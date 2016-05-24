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
            <form action="{{URL::to('sendsms')}}" method="post">
                <div class="form-group">
                    <input type="number" class="form-control" name="ktp" id="ktp" placeholder="No KTP (14 digit)">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="hp" id="hp" placeholder="Nomor HP (Ex. 085736590630)">
                </div>
                <!--<div class="form-group">
                    <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                	<input type="date" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
                </div> -->
				<button type="submit" class="btn btn-login">Buat Token</button>
			</form>
		</div>
	</div>
</body>
</html>