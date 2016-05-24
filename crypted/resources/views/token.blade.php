<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIJ</title>

    <!--Google web fonts-->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600,700,600italic,200,200italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet">

    <!-- font awesome-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/skillset.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.theme.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body>
<div class="name-hero">
    KIJ
</div>
<div class="login">
    <div class="login-header">
        Generate Token
    </div>
    <div class="login-form">
        <!-- <form action="submit_register.php" method="post"> -->
        @if(Session::has('notif'))
            <h2>Token Tidak Ditemukan / Kadaluarsa</h2>
        @endif
        <form action="{{URL::to('checktoken')}}" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="token" placeholder="Token">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-login">Kirim</button>
            <a href="{{URL::to('/')}}"><h5 style="color: black">Tidak Menerima SMS? Kirim Ulang SMS</h5></a>
        </form>
    </div>
</div>
</body>
</html>