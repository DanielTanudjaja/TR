<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
// use App\Http\Controllers\Input;
// use PDF;

class KK_C extends Controller
{
    function home()
    {
        return view('index');
    }


    public function admin()
    {

        $count = DB::table('tmp_booking')->count();
        $countUser = DB::table('tb_user')->count();

        $cekuser = DB::table('tb_user')->select('id_kamar');
        $cekbooking = DB::table('tmp_booking')->select('id_kamar')->union($cekuser)->get();

        foreach ($cekbooking as $cb) {
            $data[] = $cb->id_kamar;
        }
        $kamarks = DB::table('tb_kamar')->whereNotIn('id_kamar', $data)->select('id_kamar')->count();
        // dump($cekbooking);
        // dd($kamarks);

        return view('pageadmin/dashboard', ['count' => $count, 'countUser' => $countUser, 'kamarks' => $kamarks]);
    }

    public function user()
    {
        $user = DB::table('tb_user')
            ->get();

        return view('pageuser/profile', compact('user'));
    }

    public function gotobooking()
    {
        $cekuser    = DB::table('tb_user')->select('id_kamar');
        $cekbooking = DB::table('tmp_booking')->select('id_kamar')->union($cekuser)->get();
        $kode       = Carbon::now()->timestamp;

        return view('booking', ['kamar' => $cekbooking, 'kode' => $kode]);
    }

    public function loadbooking(Request $data)
    {
        $file = $data->file('avatar');
        $nama_file = Carbon::now()->timestamp . "_" . $file->getClientOriginalName();
        $folder = 'imgBooking';
        $file->move($folder, $nama_file);

        $items = $data->input('adds');

        $harga = 600000;

        DB::table('tmp_booking')->insert([
            'id_booking' => $data->kode,
            'id_kamar'   => $data->kamar,
            'nik'        => $data->nik,
            'nama'       => $data->nama,
            'kontak'     => $data->kontak,
            'wali'       => $data->wali,
            'email'      => $data->mail,
            'alamat'     => $data->alamat,
            'foto'       => $nama_file
        ]);

        if (!empty($items)) {
            foreach ($items as $i) {
                DB::table('tmp_booking_add')->insert([
                    'id_booking' => $data->kode,
                    'id_item'    => $i
                ]);

                $cekharga = DB::table('tb_items')
                    ->select('harga')
                    ->where('id_item', $i)
                    ->value('harga');

                $harga2 = $cekharga;
                $harga += $harga2;
            }

            DB::table('tmp_booking')
                ->where('id_booking', $data->kode)
                ->update(['harga' => $harga]);
        }

        return view('/konfirm', ['kode' => $data->kode]);
    }

       public function showDataUser()
        {
            $user = DB::table('tb_user')
                ->select('tb_user.*')
                ->get();
            return view('pageuser/profile', compact('user'));
        }

        public function showDataUserUpd()
        {
            $user = DB::table('tb_user')
                ->select('tb_user.*')
                ->get();
            return view('pageuser/updateprofil', compact('user'));
        }

        public function updateDataDiri(Request $r, $nik)
        {
            if ($r->hasFile('foto')) {
            $file = $r->file('foto');
            $nama_file = Carbon::now()->timestamp . "_" . $file->getClientOriginalName();
            $folder = 'imgUser';

            $file->move($folder, $nama_file);

            DB::table('tb_user')
                ->where('nik', $nik)
                ->update([
                    'nama' => $r->nama,
                    'kontak' => $r->kontak,
                    'email' => $r->email,
                    'wali' => $r->wali,
                    'alamat' => $r->alamat,
                    'foto' => $nama_file
                ]);
            }else{
                // $file = $r->file('foto_lama');
            
            DB::table('tb_user')
            ->where('nik', $nik)
            ->update([
                'nama' => $r->nama,
                'kontak' => $r->kontak,
                'email' => $r->email,
                'wali' => $r->wali,
                'alamat' => $r->alamat,
                'foto' => $r->foto_lama
                // 'foto' => $file
            ]);
            }

            return redirect('/pageuser/profile');
        }
    
    public function inputPassword()
    {
        $account = DB::table('tb_user')
            ->get();

        $user = DB::table('tb_user')->get();

        return view('/pageuser/changepassword', compact('account'), compact('user'));
    }

    public function updatePassword(Request $r, $nik)
    {
        DB::table('tb_account')
            ->where('nik', $nik)
            ->update([
                'password' => bcrypt($r->password)
            ]);

        return redirect()->back();
    }

    public function cetakInvoice($booking)
    {
        $dataP = DB::table('tmp_booking')
            ->where('id_booking', $booking)
            ->select('tmp_booking.*')
            ->get();

        $dataC = DB::table('tb_items')
            ->join('tmp_booking_add', 'tmp_booking_add.id_item', '=', 'tb_items.id_item')
            ->where('tmp_booking_add.id_booking', $booking)
            ->select('tb_items.*')
            ->get();

        // $pdf = \PDF::loadview('invoice_pdf', ['dataP' => $dataP, 'dataC' => $dataC]);
        // return $pdf->download('invoice');
        return view('invoice_pdf', ['dataP' => $dataP, 'dataC' => $dataC]);
    }

    public function bayarKos(Request $r, $nik){
        $file = $r->file('validasi');
        $nama_file = Carbon::now()->timestamp . "_" . $file->getClientOriginalName();
        $folder = 'imgBayar';
        $file->move($folder, $nama_file);

        DB::table('tb_validasi')->where('nik', $nik)->insert([
            'foto' => $nama_file,
            'nik' => $nik
        ]);

        return redirect()->back();
    }
}