<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Christopher DO.">
    <meta name="description" content="Mi portafolio de proyectos de desarrollo web">

    <title>CDO | Mi portafolio</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/components/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/all.min.css') }}"> {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('css/lib/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/structure.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/responsive.css') }}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- icons -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    <!-- Template Developed By Sa_Studio -->
</head>

<body>
    <div id="ncf-overlay"></div>

    <div class="main-wrapper">

        @yield('content')

    </div><!-- /.main-wrapper -->

    @include('partials.footer')
    @include('partials.modals')
    @include('partials.scripts')
</body>

</html>
