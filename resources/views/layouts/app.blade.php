<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>Varma - Portfolio</title>

    <!-- favicon -->
    <link id="favicon" rel="icon" type="image/png" href="frontend\images\favicon.png">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script:300,400,500%7CMontserrat:300,400,500,600,700,800,900%7CPoppins:300,400,500">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="frontend\css\bootstrap.css">

    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="frontend\css\magnific-popup.css">

    <!-- slick css -->
    <link rel="stylesheet" href="frontend\css\slick.css">
    <link rel="stylesheet" href="frontend\css\slick-theme.css">

    <!-- pe-icon-7-stroke.min.css -->
    <link rel="stylesheet" href="frontend\css\pe-icon-7-stroke.min.css">

    <!-- font-awesome.min.css -->
    <link rel="stylesheet" href="frontend\css\font-awesome.min.css">

    <!-- Main style css -->
    <link rel="stylesheet" href="frontend\css\style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="frontend\css\responsive.css">

    <!-- Yellow Color -->
    <link rel="stylesheet" href="frontend\css\color-{{ $user->color }}.css">

    <!-- Purple Color -->
    <!-- <link rel="stylesheet" href="frontend/css/color-purple.css"> -->

    <!-- Green Color -->
    <!-- <link rel="stylesheet" href="frontend/css/color-green.css"> -->

    <!-- Red Color -->
    <!-- <link rel="stylesheet" href="frontend/css/color-red.css"> -->

    <!-- Blue Color -->
    <!-- <link rel="stylesheet" href="frontend/css/color-blue.css"> -->
</head>

<body class="loading">


    <!--Start Preloader-->
    <div class="page-loader startLoad">
        <div class="loader startLoad"></div>
    </div>
    <!--End Preloader-->


    @yield('content')


    <!--jquery.min.js-->
    <script src="frontend\js\jquery.min.js"></script>

    <!--modernizr-custom.js-->
    <script src="frontend\js\modernizr-custom.js"></script>

    <!--bootstrap.min.js-->
    <script src="frontend\js\bootstrap.min.js"></script>

    <!--jquery.fittext.js-->
    <script src="frontend\js\jquery.fittext.js"></script>

    <!--jquery.lettering.js-->
    <script src="frontend\js\jquery.lettering.js"></script>

    <!--jquery.magnific-popup.min.js-->
    <script src="frontend\js\jquery.magnific-popup.min.js"></script>

    <!--isotope.pkgd.min.js-->
    <script src="frontend\js\isotope.pkgd.min.js"></script>

    <!--slick.js-->
    <script src="frontend\js\slick.js"></script>

    <!--anime.min.js-->
    <script src="frontend\js\anime.min.js"></script>

    <!--jquery.hover3d.min.js-->
    <script src="frontend\js\jquery.hover3d.min.js"></script>

    <!--jquery.slimscroll.min.js-->
    <script src="frontend\js\jquery.slimscroll.min.js"></script>

    <!--imagesloaded.pkgd.min.js-->
    <script src="frontend\js\imagesloaded.pkgd.min.js"></script>

    <!--three.min.js-->
    <script src="frontend\js\three.min.js"></script>

    <!--TweenMax.min.js-->
    <script src="frontend\js\TweenMax.min.js"></script>

    <!-- Main script js -->
    <script src="frontend\js\custom_anim.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    @if(session('status'))
    swal({
        title: '{{ session('status') }}',
        icon: '{{ session('statuscode') }}',
        button: 'Ok',
    });
    @endif
    </script>

</body>

</html>