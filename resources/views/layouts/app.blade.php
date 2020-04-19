<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Spaletta Kecskemét – Étterem és Sörház</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Multipurpose HTML template.">
        <script src="../scripts/jquery.min.js"></script>
        <link rel="stylesheet" href="../scripts/bootstrap/css/bootstrap.css">
        <script src="../scripts/script.js"></script>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/content-box.css">
        <link rel="stylesheet" href="../css/image-box.css">
        <link rel="stylesheet" href="../css/animations.css">
        <link rel="stylesheet" href='../css/components.css'>
        <link rel="stylesheet" href='../scripts/flexslider/flexslider.css'>
        <link rel="stylesheet" href='../scripts/magnific-popup.css'>
        <link rel="stylesheet" href='../scripts/php/contact-form.css'>
        <link rel="stylesheet" href='../scripts/social.stream.css'>
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
        <link rel="stylesheet" href="../skin.css">
        <link rel="stylesheet" href="{{ mix('/css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164016404-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-164016404-1');
        </script>
    </head>
    <body>

        <div id="preloader"></div>
        <div class="footer-parallax-container">

            @include('partials._header')

            @yield('content')

        </div>

        <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>

        @include('partials._footer')
    </body>
</html>
