<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>
    
    <title>@yield('title')</title>

    <!-- Load style file -->
    <!-- <link href="/css/style.css" rel="stylesheet" type="text/css" /> -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

</head>
<body>
    <!-- Navigation Bar-->
    <header id="topnav">
        @include('./layouts/navbar')
    </header>
    <!-- End Navigation Bar-->

     <!-- Wrapper -->
    <div class="wrapper" id="app">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- End wrapper -->

    <!-- Footer -->
    
    <!-- End footer -->

    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>