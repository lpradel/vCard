<?php

if (App::getLocale() == "en") {
    $lang = "en-US";
} else {
    $lang = "de-DE";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?=$lang?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="<?=$lang?>"><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <title>
        @section('title')
        @show
    </title>
    <meta name="description" content="Lukas Pradel">
    <meta name="author" content="Lukas Pradel">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-ipad-retina-152x152.png">

    <!-- CSS
    ================================================== -->

    <link rel="stylesheet" id="o-responsive-css" href="/css/o-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" id="themestyle-css" href="/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="glyphicons-css" href="/css/glyphicons.css" type="text/css" media="all">
    <link rel="stylesheet" id="icomoon-css" href="/css/icomoon.css" type="text/css" media="all">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900,300italic,400italic,900italic' rel='stylesheet' type='text/css'>


</head>

<body class="fullwidth boxed " data-device="" data-maxcols="">
<div id="top"></div>


<header>
    <div id="header">
        <div class="container wrap text-center">
            <span class="">Lukas Pradel |</span>
            <span class="">Software Engineer</span>
        </div>

        @section('language-links')
        @show

        <a href="#sidr" id="menutrigger" class="pull-right btn icon transparent"><span class="glyphicons justify"><i></i></span></a><span class="clear"></span>
    </div><!-- /#header -->
</header>

@yield('sidebar-nav')

<main>
@section('main')
@show
</main>





<footer>
    <div id="copyright">

        <div class="container wrap">

            <div class="row">

                <div class="col dimfull text-center">

                    <p>
                        &copy; 2014 <em>Lukas Pradel</em> |
                        <a href="@lang('routes.legal')">
                            @lang('index.menu-legal')
                        </a> |
                        Built with <a href="http://laravel.com/">Laravel/4.1.25</a> |
                        Hosted at <a href="http://digitalocean.com/">DigitalOcean</a> |
                        Powered by <a href="http://nginx.org/">nginx/1.6.0</a>
                    </p>


                </div><!-- /.col -->

            </div><!-- /.row  -->

        </div><!-- /.container -->

    </div><!-- /#copyright -->
</footer>




<a style="display: none;" href="#" id="scrolltop" title="Top"><span class="glyphicons up_arrow"><i></i></span></a>


<!-- End Document
================================================== -->

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.migrate.min.js"></script>
<script type="text/javascript" src="/js/klass.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>


</body>

</html>