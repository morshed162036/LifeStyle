<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Easy Ecommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="@if ($company->favicon)
    {{asset('images/company/'.$company->favicon)}}
@endif" alt="">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/component.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/theme-styles.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/theme-styles-responsive.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/theme-styles-setting.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/settings.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/custom.scss.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/v5.globo.search.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!--    <script type="text/javascript" src="assets/js/selectize.min.js"></script>-->
    <!--    <script type="text/javascript" src="assets/js/jquery.nicescroll.min.js"></script>-->
    <!--    <script type="text/javascript" src="assets/js/lang2.js"></script>-->
    <!--    <script type="text/javascript" src="assets/js/v5.globo.filter.lib.js"></script>-->
    <!--    <script type="text/javascript" src="assets/js/script-1607339089.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/custom.css">

</head>
