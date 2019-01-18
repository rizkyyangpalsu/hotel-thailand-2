<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smesa Hotel - SMK Negeri 1 Surabaya</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <!-- Venobox -->
    <link rel="stylesheet" href="{{ url('css/venobox.css') }}">

    <!-- fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('fonts/flaticon/css/flaticon.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{  url('css/style.css') }}">
</head>
<body>

@yield('app')

<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.5/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.5/plugins/jquery.lazy.av.min.js"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/jquery.easing.min.js') }}"></script>
<script src="{{ url('js/wow.js') }}"></script>
<script src="{{ url('js/venobox.min.js') }}"></script>
<script src="{{ url('js/SmoothScroll.js') }}"></script>
<script src="{{ url('js/jquery.filterizr.min.js') }}"></script>
<script src="{{ url('js/sticky-kit.min.js') }}"></script>
<script src="{{ url('js/form-validator.min.js') }}"></script>
<script src="{{ url('js/contact-form-script.js') }}"></script>
<script src="{{ url('js/script.js') }}"></script>
<script>
    jQuery(function ($) {
        $("video").lazy();
    })
</script>
</body>
</html>
