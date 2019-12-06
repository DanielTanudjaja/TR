<?php

namespace App\Http\Controllers;

use App\AnakKos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function admin()
    {

        $count = DB::table('tmp_booking')->count();
        $countUser = DB::table('tb_user')->where('aktif', 'on')->count();

        $cekuser = DB::table('tb_user')->where('aktif', 'on')->select('id_kamar');
        $cekbooking = DB::table('tmp_booking')->select('id_kamar')->union($cekuser)->get();

        foreach ($cekbooking as $cb) {
            $data[] = $cb->id_kamar;
        }
        $kamarks = DB::table('tb_kamar')->whereNotIn('id_kamar', $data)->select('id_kamar')->count();

        $keluar = DB::table('tb_user')->where('aktif', 'off')->select('tb_user.*')->count();

        $kamarUser = DB::table('tb_user')->where('aktif', 'on')->select('tb_user.*')->count();
        $kamarBooking = DB::table('tmp_booking')->select('tmp_booking.*')->count();
        $totalKmr = DB::table('tb_kamar')->select('tb_kamar.*')->count();

        return view('pageadmin/dashboard', ['count' => $count, 'countUser' => $countUser, 'kamarks' => $kamarks, 'keluar' => $keluar, 'kmrUser' => $kamarUser, 'kmrBooking' => $kamarBooking, 'totalKmr' => $totalKmr]);
    }

    public function index()
    {
        $user = DB::table('tb_user')->where('aktif', 'on')->paginate(2);

        return view('pageadmin/manageaccount', compact('user'));
    }

    public function edit($nik)
    {
        $user = DB::table('tb_user')
            ->where('nik', $nik)
            ->select('tb_user.*')
            ->get();

        return view('pageadmin/edituser', ['user' => $user]);
    }

    public function update(Request $request)
    {
        DB::table('tb_user')
            ->where('nik', $request->nik)
            ->update([
                'nama' => $request->nama,
                'kontak' => $request->kontak,
                'wali' => $request->wali,
                'alamat' => $request->alamat,
            ]);

        return redirect('pageadmin/manageaccount')->with('success', 'Data berhasil di update!');
    }

    public function pindahKamar($nik)
    {
        $user = DB::table('tb_user')
            ->where('nik', $nik)
            ->select('tb_user.nik', 'tb_user.id_kamar')
            ->get();

        $cekuser = DB::table('tb_user')->select('id_kamar');
        $cekbooking = DB::table('tmp_booking')->select('id_kamar')->union($cekuser)->get();

        foreach ($cekbooking as $cb) {
            $data[] = $cb->id_kamar;
        }

        $kamar = DB::table('tb_kamar')->whereNotIn('id_kamar', $data)->select('id_kamar')->get();

        return view('pageadmin/pindahuser', ['user' => $user, 'kamar' => $kamar])->with('success', 'Berhasil pindah kamar!');
    }

    public function pindah2(Request $r)
    {
        DB::table('tb_user')
            ->where('nik', $r->nik)
            ->update(['id_kamar' => $r->kamarbaru]);

        return redirect('pageadmin/manageaccount')->with('success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        // $user = AnakKos::find($nik);
        // $user->delete();
        DB::table('tb_user')->where('nik', '=', $nik)
            ->update([
                'aktif' => 'off'
            ]);

        DB::table('tb_account')->where('nik', $nik)->delete();

        return redirect('pageadmin/manageaccount');
    }

    public function vbooking()
    {
        $book = DB::table('tmp_booking')->get();


        return view('pageadmin/v-booking', ['book' => $book]);
    }

    public function insertBooking(Request $r)
    {
        $this->validate($r, [
            'file-validasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $file = $r->file('file-validasi');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $folder = 'imgPembayaranPertama';

        $file->move($folder, $nama_file);

        DB::table('tmp_booking')
            ->where('id_booking', $r->id_booking)
            ->update([
                'kwitansi' => $nama_file
            ]);

        return redirect('/home');
    }


    public function vpembayaran()
    {
        // $user = DB::table('tb_validasi')
        //     ->select('tb_user.id_kamar', 'tb_user.nama', 'tb_validasi.foto')
        //     ->join('tb_user', 'tb_user.nik', '=', 'tb_validasi.nik')
        //     ->get();

        $user = DB::table('tb_validasi')
            ->where('tb_user.aktif', 'on')
            ->where('tb_user.status', '0')
            ->select('tb_user.id_kamar', 'tb_user.nama', 'tb_validasi.foto', 'tb_user.nik')
            ->join('tb_user', 'tb_user.nik', '=', 'tb_validasi.nik')
            ->get();
        return view('pageadmin/v-pembayaran', compact('user'));
    }

    public function updateStatusPembayaran($nik)
    {
        DB::table('tb_user')
            ->where('nik', $nik)
            ->update([
                'status' => '1'
            ]);

        return redirect()->back();
    }

    public function kwitansiBooking($r, $foto, $nama, $kamar, $nik)
    {
        DB::table('tmp_booking')
            ->where('id_booking', $r)
            ->update([
                'status' => '1'
            ]);

        DB::insert("insert into tb_user(nik, nama, kontak, email, wali, alamat, status, id_kamar, foto) select nik, nama, kontak, email, wali,alamat, status, id_kamar, foto from tmp_booking WHERE id_booking='$r'");

        DB::table('tmp_booking')->where('id_booking', $r)
            ->delete();

        $nama = str_replace(' ', '', $nama);
        $nama = $nama . "_" . Carbon::now()->timestamp . "_" . $kamar;

        DB::table('tb_account')->insert([
            'username' =>  $nama,
            'password' => bcrypt('user'),
            'nik' => $nik
        ]);

        File::move('imgBooking/' . $foto, 'imgUser/' . $foto);

        return redirect()->back();
    }
}
