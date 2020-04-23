<!DOCTYPE html>
<html lang="en-us">

<head>
    <!-- Web config-->



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminHero</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <!-- lib-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="{{asset ('code/backoffice_template/login_asset/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset ('code/backoffice_template/login_asset/css/font-awesome.css')}}">

    <!-- Theme-->
    <link id="mainstyle" rel="stylesheet" href="{{asset ('code/backoffice_template/login_asset/css/skin.css')}}">
    <link id="mainstyle" rel="stylesheet" href="{{asset ('code/backoffice_template/login_asset/css/demo.css')}}">

<body class="f-dark login login-side"
    style="background:url({{asset ('code/backoffice_template/login_asset/bg/bg2.jpg')}});background-size:cover;">
    <form class="login-form" id="userlogin" autocomplete="off" action="{{url('admin/login')}}" method="POST">
        {{ csrf_field() }}
        <div class="p-a-3 text-xs-center"><a class="demo-logo" href="index.html">AdminHero</a></div>
        <div class="form-group">
            <label class="sr-only" for="formBasicEmail">Email Address</label>
            <input class="form-control" id="formBasicEmail" type="email" name="email" placeholder="Email Address"
                autocomplete="off">
        </div>
        <div class="form-group">
            <label class="sr-only" for="formBasicPassword">Password</label>
            <input class="form-control" id="formBasicPassword" type="password" name="password" placeholder="Password"
                autocomplete="off">
        </div>
        <div class="form-group">
            <div class="checkbox">
                <input id="formBasicRemember" type="checkbox" name="ceklist" autocomplete="off">
                <label for="formBasicRemember">Remember Me</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4 pull-xs-right">
                <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
            </div>
        </div>
    </form>
</body>
</head>

</html>