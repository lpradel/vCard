<?php

if (App::getLocale() == "en") {
    $lang = "en-US";
} else {
    $lang = "de-DE";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 7 ]><html class="no-js lt-ie9 lt-ie8" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 8 ]><html class="no-js lt-ie9" lang="<?=$lang?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="<?=$lang?>" class="no-js"><!--<![endif]-->
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

    <link rel="stylesheet" type="text/css" href="/css/normalize.css" media="all">
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="/css/polyglot-language-switcher.css" media="all">
    <link rel="stylesheet" type="text/css" href="/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" media="all">

    <!-- JS
    ================================================== -->
    <script src="/js/modernizr-2.6.2.min.js"></script>

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900,300italic,400italic,900italic' rel='stylesheet' type='text/css'>


</head>

<body>

<div class="wrapper vcard">

    <!-- BEGIN NAV -->
    <nav class="nav">
        <div class="container">
            <div class="nav-trigger"></div>
            @section('menu')
            @show
        </div>
    </nav>
    <!-- END NAV -->

    <main>
    <!-- BEGIN MAIN CONTAINER -->
    <div class="main">
        @section('main')
        @show

        <footer>
            <div class="contacts">
                <div class="inner">
                    &copy; 2014 <em>Lukas Pradel</em> |
                    <a href="@lang('routes.legal')">
                        @lang('index.menu-legal')
                    </a> |
                    Built with <a href="http://laravel.com/">Laravel/4.1.25</a> |
                    Hosted at <a href="http://digitalocean.com/">DigitalOcean</a> |
                    Powered by <a href="http://nginx.org/">nginx/1.6.0</a>

                    @section('language-links')
                    @show
                </div>
            </div>
        </footer>
    </div>
    <!-- END MAIN CONTAINER -->
    </main>

</div>

<!-- End Document
================================================== -->

<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery.polyglot.language.switcher.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
            effect: 'fade',
            testMode: true,
            websiteType: 'dynamic',
            paramName: 'lang',
                onChange: function(evt){
                alert("The selected language is: "+evt.selectedItem);
            }
//                ,afterLoad: function(evt){
//                    alert("The selected language has been loaded");
//                },
//                beforeOpen: function(evt){
//                    alert("before open");
//                },
//                afterOpen: function(evt){
//                    alert("after open");
//                },
//                beforeClose: function(evt){
//                    alert("before close");
//                },
//                afterClose: function(evt){
//                    alert("after close");
//                }
        });
    });
</script>

<script src="/plugins/ope-page-nav/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/plugins/ope-page-nav/jquery.scrollTo.js"></script>
<script src="/plugins/ope-page-nav/jquery.nav.js"></script>

<script src="/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>

<script src="/plugins/quicksand/jquery.quicksand.js"></script>

<script src="/plugins/cycle2/jquery.cycle2.min.js"></script>

<script src="/plugins/validate/jquery.validate.js"></script>

<script src="/js/scripts.js"></script>

</body>

</html>