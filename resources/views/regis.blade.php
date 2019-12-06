<html>
    <body>
        <form action="/regis" method="post">
            {{csrf_field()}}
            <input type="text" name="username" id="">
            <input type="text" name="password" id="">
            <input type="text" name="level" id="">
            <input type="submit" value="OK">
        </form>
    </body>
</html>