<?php

if (App::getLocale() == "en") {
    $lang = "en-US";
    $lang_plain = "en";
} else {
    $lang = "de-DE";
    $lang_plain = "de";
}
?>

<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta charset="UTF-8">
    <title>
        @section('title')
        @show
    </title>
    <meta name="description" content="Lukas Pradel">
    <meta name="author" content="Lukas Pradel">

    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-ipad-retina-152x152.png">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic%7COpen+Sans:700,400%7CSource+Sans+Pro:700,400" media="all">
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/css/polyglot-language-switcher.css" media="all">
</head>

<body itemscope itemtype="http://schema.org/WebPage">
@section('main')
@show

<footer>
    <hr/>
    <div class="notes">
    &copy; <?php
        $fromYear = 2014;
        $thisYear = (int)date('Y');
        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?>
        <em>Lukas Pradel</em> |
    <a href="@lang('routes.legal')?lang=<?=$lang_plain?>">
        @lang('index.menu-legal')
    </a>
    </div>
    @section('language-links')
    @show
</footer>

<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery.polyglot.language.switcher.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
            effect: 'fade',
            testMode: false,
            websiteType: 'dynamic',
            paramName: 'lang',
            onChange: function(evt){
                return;
            }
        });
    });
</script>

</body>

</html>