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
    E-VOTE
</div>
<div class="login" style="width: 1000px;">
    <div class="login-form">
        <!-- <div class="form-group"> -->
        <form>
            <div class="login-header">
                DPR
            </div>
            <div class="cc-selector">
                <input id="lala1" type="radio" name="credit-card" value="lala1" />
                <label class="drinkcard-cc lala1" for="lala1"></label>
                <input id="lala2" type="radio" name="credit-card" value="2" />
                <label class="drinkcard-cc lala2"for="lala2"></label>
                <input id="lala3" type="radio" name="credit-card" value="3" />
                <label class="drinkcard-cc lala3"for="lala3"></label>
                <input id="lala4" type="radio" name="credit-card" value="4" />
                <label class="drinkcard-cc lala4"for="lala4"></label>
                <input id="lala5" type="radio" name="credit-card" value="5" />
                <label class="drinkcard-cc lala5"for="lala5"></label>
                <input id="lala6" type="radio" name="credit-card" value="6" />
                <label class="drinkcard-cc lala6"for="lala6"></label>
            </div>
        </form>
        <br><br><br>
        <form>
            <div class="login-header">
                DPD
            </div>
            <div class="cc-selector">
                <input id="lalaa" type="radio" name="credit-card" value="lala1" />
                <label class="drinkcard-cc lalaa" for="lalaa"></label>
                <input id="lalab" type="radio" name="credit-card" value="2" />
                <label class="drinkcard-cc lalab"for="lalab"></label>
                <input id="lalac" type="radio" name="credit-card" value="3" />
                <label class="drinkcard-cc lalac"for="lalac"></label>
                <input id="lalad" type="radio" name="credit-card" value="4" />
                <label class="drinkcard-cc lalad"for="lalad"></label>
                <input id="lalae" type="radio" name="credit-card" value="5" />
                <label class="drinkcard-cc lalae"for="lalae"></label>
                <input id="lalaf" type="radio" name="credit-card" value="6" />
                <label class="drinkcard-cc lalaf"for="lalaf"></label>
            </div>
        </form>
        <br><br><br>
        <form>
            <div class="login-header">
                DPRD Provinsi
            </div>
            <div class="cc-selector">
                <input id="lala11" type="radio" name="credit-card" value="lala1" />
                <label class="drinkcard-cc lala11" for="lala11"></label>
                <input id="lala22" type="radio" name="credit-card" value="2" />
                <label class="drinkcard-cc lala22"for="lala22"></label>
                <input id="lala33" type="radio" name="credit-card" value="3" />
                <label class="drinkcard-cc lala33"for="lala33"></label>
                <input id="lala44" type="radio" name="credit-card" value="4" />
                <label class="drinkcard-cc lala44"for="lala44"></label>
                <input id="lala55" type="radio" name="credit-card" value="5" />
                <label class="drinkcard-cc lala55"for="lala55"></label>
                <input id="lala66" type="radio" name="credit-card" value="6" />
                <label class="drinkcard-cc lala66"for="lala66"></label>
            </div>
        </form>
        <br><br><br>
        <form>
            <div class="login-header">
                DPRD Kabupaten/Kota
            </div>
            <div class="cc-selector">
                <input id="lalaaa" type="radio" name="credit-card" value="lala1" />
                <label class="drinkcard-cc lalaaa" for="lalaaa"></label>
                <input id="lalabb" type="radio" name="credit-card" value="2" />
                <label class="drinkcard-cc lalabb"for="lalabb"></label>
                <input id="lalacc" type="radio" name="credit-card" value="3" />
                <label class="drinkcard-cc lalacc"for="lalacc"></label>
                <input id="laladd" type="radio" name="credit-card" value="4" />
                <label class="drinkcard-cc laladd"for="laladd"></label>
                <input id="lalaee" type="radio" name="credit-card" value="5" />
                <label class="drinkcard-cc lalaee"for="lalaee"></label>
                <input id="lalaff" type="radio" name="credit-card" value="6" />
                <label class="drinkcard-cc lalaff"for="lalaff"></label>
            </div>
        </form>
        <br><br><br>
        <a href="{{URL::to('pilih')}}" class="btn btn-warning" role="button" style="width: 130px;height: 35px;">Kembali</a>
        <a href="#" class="btn btn-info" role="button" style="width: 130px;height: 35px;">Submit</a>
    </div>
</div>
</body>
</html></body>
</html>
