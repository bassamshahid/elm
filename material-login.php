<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Employee Leave Managment</title>
    <link rel="stylesheet" type="text/css" href="assets/css/material-css.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch'
          href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,latin-ext'>
</head>
<body>
<script src="assets/js/material-js.js"></script>
<div class="materialContainer">
    <form id="login_form" action="index.php?controller=is_login" method="post">
        <div class="box">
            <div class="title">LOGIN</div>
            <div class="input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <span class="spin"></span>
            </div>
            <div class="button login">
                <button type="submit" name="login" value="Login"><span>Login</span> <i class="fa fa-check"></i></button>
            </div>
            <a href="" class="pass-forgot">Forgot your password?</a>
        </div>
    </form>



<!--  Registration Form  -->
    <form id="registration_form">
        <div class="overbox">
            <div class="material-button alt-2"><span class="shape"></span></div>
            <div class="title">REGISTER</div>
            <div class="input">
                <label for="regname">Username</label>
                <input type="text" name="regname" id="regname">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="regpass">Password</label>
                <input type="password" name="regpass" id="regpass">
                <span class="spin"></span>
            </div>
            <div class="input">
                <label for="reregpass">Repeat Password</label>
                <input type="password" name="reregpass" id="reregpass">
                <span class="spin"></span>
            </div>
            <div class="button">
                <button><span>NEXT</span></button>
            </div>
        </div>
    </form>

</div>
</body>
</html>