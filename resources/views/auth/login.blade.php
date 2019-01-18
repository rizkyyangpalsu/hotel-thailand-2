<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SMEAS HOTEL ADMIN</title>


    <link rel="stylesheet" href="{{ url('css/admin/style.css') }}">


</head>

<body>
<div id="clouds">
    <div class="cloud x1"></div>
    <!-- Time for multiple clouds to dance around -->
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
</div>

<div class="container">


    <div id="login">

        <form method="post" action="{{ route('login') }}">
            {{ csrf_field() }}

            <fieldset class="clearfix">

                <p><span class="fontawesome-user"></span><input type="text" name="email" value="Username / Email"
                                                                onBlur="if(this.value == '') this.value = 'Username / Email'"
                                                                onFocus="if(this.value == 'Username / Email') this.value = ''"
                                                                value="{{ old('email') }}"
                                                                required></p>
                <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password" name="password" value="Password"
                                                                onBlur="if(this.value == '') this.value = 'Password'"
                                                                onFocus="if(this.value == 'Password') this.value = ''"
                                                                required></p>
                <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" name="sub" value="Login"></p>

            </fieldset>

        </form>


    </div> <!-- end login -->

</div>
<div class="bottom"><h3><a href="{{ url('/') }}">SMEAS HOTEL HOMEPAGE</a></h3></div>

</body>
</html>
