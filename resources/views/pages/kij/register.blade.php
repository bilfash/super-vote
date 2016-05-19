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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- font awesome-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/skillset.css">


    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"> 
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="name-hero">
		KIJ
	</div>
	<div class="login">
		<div class="login-header">
			LOGIN
		</div>
		<div class="login-form">
			<form method="POST" action="{{URL::to('insertToken')}}">
                <div class="form-group">
                    <input type="text" name="telp" class="form-control" id="no.hp" placeholder="Nomor Telepone">
                </div>
                <div class="form-group">
                    <input type="text" name="ktp" class="form-control" id="ktp" placeholder="No KTP">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!--<div class="form-group">
                    <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                	<input type="date" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
                </div> -->
				<button type="submit" class="btn btn-login">Login</button>
			</form>
		</div>
	</div>
</body>
</html>