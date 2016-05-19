<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">E-Vote</div>
                <br>
                <br>
                <br>
                <form method="POST" action="{{URL::to('checktoken')}}">
                    <h3>TOKEN :</h3>
                    <input type="text" name="token"><br><br><br>
                    <input type="submit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <br>
                <a href="{{URL::to('/')}}"><h2 style="color: black">Tidak Menerima SMS? Kirim Ulang SMS</h2></a>
            </div>
        </div>
    </body>
</html>
