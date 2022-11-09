<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--First Mobile Meta-->
    <meta name="description" content="application landing page">
    <!--Description Meta-->
    <!-- Document Title
    ============================================= -->
    <title>Medcity Template Documention</title>
    <link href="{{ asset('backend/assets/images/favicon/favicon.png') }}" rel="icon">

    <!-- Stylesheets
    ============================================= -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/prettify.css') }}" rel="stylesheet">
</head>

<body class="side-header">
    <div class="wrapper clearfix">
        @include('dashboard._sidebar')

        {{ $slot }}

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('backend/assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/prettify.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/functions.js') }}"></script>
</body>

</html>
