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
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/animate.css') }}" rel="stylesheet">

    <!-- font awesome-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ URL::to('assets/css/skillset.css') }}" rel="stylesheet">

    <link href="{{ URL::to('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/owl.theme.css') }}" rel="stylesheet">

    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .lala1{background-image:url({{URL::to('assets/e-vote/1.jpg')}});}
        .lala2{background-image:url({{URL::to('assets/e-vote/2.jpg')}});}
        .lala3{background-image:url({{URL::to('assets/e-vote/8.jpg')}});}
        .lala4{background-image:url({{URL::to('assets/e-vote/4.jpg')}});}
        .lala5{background-image:url({{URL::to('assets/e-vote/9.jpg')}});}
        .lala6{background-image:url({{URL::to('assets/e-vote/10.jpg')}});}

        .lala11{background-image:url({{URL::to('assets/e-vote/1.jpg')}});}
        .lala22{background-image:url({{URL::to('assets/e-vote/2.jpg')}});}
        .lala33{background-image:url({{URL::to('assets/e-vote/8.jpg')}});}
        .lala44{background-image:url({{URL::to('assets/e-vote/4.jpg')}});}
        .lala55{background-image:url({{URL::to('assets/e-vote/9.jpg')}});}
        .lala66{background-image:url({{URL::to('assets/e-vote/10.jpg')}});}

        .lalaa{background-image:url({{URL::to('assets/e-vote/5.jpg')}});}
        .lalab{background-image:url({{URL::to('assets/e-vote/6.jpg')}});}
        .lalac{background-image:url({{URL::to('assets/e-vote/7.jpg')}});}
        .lalad{background-image:url({{URL::to('assets/e-vote/11.jpg')}});}
        .lalae{background-image:url({{URL::to('assets/e-vote/12.jpg')}});}
        .lalaf{background-image:url({{URL::to('assets/e-vote/13.jpg')}});}

        .lalaaa{background-image:url({{URL::to('assets/e-vote/5.jpg')}});}
        .lalabb{background-image:url({{URL::to('assets/e-vote/6.jpg')}});}
        .lalacc{background-image:url({{URL::to('assets/e-vote/7.jpg')}});}
        .laladd{background-image:url({{URL::to('assets/e-vote/11.jpg')}});}
        .lalaee{background-image:url({{URL::to('assets/e-vote/12.jpg')}});}
        .lalaff{background-image:url({{URL::to('assets/e-vote/13.jpg')}});}

        .pres1{background-image:url({{URL::to('assets/e-vote/pres1.jpg')}});}
        .pres2{background-image:url({{URL::to('assets/e-vote/pres2.jpg')}});}
    </style>

</head>
<body>
<div class="name-hero">
    KIJ
</div>
<div class="login">
    <div class="login-header">
        E-VOTE
    </div>
    <div class="login-form">
        <!-- <form action="#">
            <div class="form-group">
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="no.hp" placeholder="Nomor Telepone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="ktp" placeholder="No KTP">
            </div> -->
        <!--<div class="form-group">
            <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="tanggallahir" placeholder="Tanggal Lahir">
        </div> -->
        <!-- <a href="index.php" class="btn btn-info" role="button" style="width: 130px;height: 35px;">Login</a>
        <button type="submit" class="btn btn-login">Daftar</button>
    </form> -->
        <a href="{{URL::to('dpr')}}" class="btn btn-info" role="button" style="width: 130px;height: 35px;">Pilih DPR</a>
        <a href="{{URL::to('pres')}}" class="btn btn-info" role="button" style="width: 130px;height: 35px;">Pilih Presiden</a>
    </div>
</div>
</body>
</html></body>
</html>
