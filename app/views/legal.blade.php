@extends('layouts.master')

@section('title')
@lang('legal.page-title')
@stop

@section('language-links')
@if (App::getLocale() == "en")
<div id="polyglotLanguageSwitcher">
    <form action="#">
        <select id="polyglot-language-options">
            <option id="en" value="en" selected>English</option>
            <option id="de" value="de">German</option>
        </select>
    </form>
</div>
@else
<div id="polyglotLanguageSwitcher">
    <form action="#">
        <select id="polyglot-language-options">
            <option id="en" value="en">Englisch</option>
            <option id="de" value="de" selected>Deutsch</option>
        </select>
    </form>
</div>
@endif
@stop

@section('sidebar-nav')
<nav>
    <div id="sidr" class="hidden">
        <h3>Navigation</h3><a href="#" class="navclose"><span class="glyphicons remove_2"><i></i></span></a>
        <ul>
            <li><a href="#impressum" >@lang('legal.legal-disclosure')</a></li>
            <li><a href="#disclaimer" >@lang('legal.disclaimer-heading')</a></li>
            <li><a href="#privacy">@lang('legal.privacy-heading')</a></li>
        </ul>
    </div>
</nav>
@stop

@section('menu')
<ul>
    <li class="current"><a href="#impressum">@lang('legal.legal-disclosure')</a></li>
    <li><a href="#disclaimer">@lang('legal.disclaimer-heading')</a></li>
    <li><a href="#privacy">@lang('legal.privacy-heading')</a></li>
</ul>
@stop

@section('main')
<section id="impressum" class="cont-sec about-sec">

    <div class="cont-b">

        <div class="container">

            <div class="intro">
                <h1 class="fn">@lang('legal.legal-disclosure')</h1>
            </div>

        </div>

    </div>

    <div class="sec-title">

        <div class="container">

            <h2>@lang('legal.legal-disclosure')</h2>

        </div>

    </div>

    <div class="container" style="text-align: center">
        <h4>
            @lang('legal.information-tmg5')
            <span style="font-family: 'Arial', sans-serif;font-weight: bold;">&sect;</span>
            5 Telemediengesetz (TMG)
        </h4>
        <br/>
        <p style="font-size: 100%;">
            @lang('legal.information-name')<br/>
            @lang('legal.information-adr')<br/>
            @lang('legal.information-adr2')<br/>
            @lang('legal.information-adr3')<br/>
        </p>
        <br/>
        <h4>@lang('legal.information-contact')</h4>
        <dl class="row">
            <dt class="column dim1half text-right padright">@lang('legal.information-phone')</dt>
            <dd class="column dim1half text-left padleft">@lang('legal.information-phone-val')</dd>

            <dt class="column dim1half text-right padright">@lang('legal.information-mail')</dt>
            <dd class="column dim1half text-left padleft"><a href="http://www.google.com/recaptcha/mailhide/d?k=01h-OD9C75BfXnkoGnpom4HA==&amp;c=4IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501h-OD9C75BfXnkoGnpom4HA\75\75\46c\0754IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">lukas...</a>@googlemail.com</dd>
        </dl>
        <br style="clear: both;"/>
        <br/>
        <p>
            @lang('legal.information-source'): <a href="http://www.e-recht24.de">http://www.e-recht24.de</a>
        </p>
    </div>

</section>

<section id="disclaimer">

    <div class="sec-title">

        <div class="container">

            <h2>@lang('legal.disclaimer-heading')</h2>

        </div>

    </div>

    <div class="container">

        <h4>@lang('legal.disclaimer-content')</h4>

        <p>
            @lang('legal.disclaimer-content-val')
        </p>

        <h4>@lang('legal.disclaimer-links')</h4>

        <p>
            @lang('legal.disclaimer-links-val')
        </p>

        <h4>@lang('legal.disclaimer-copyr')</h4>

        <p>
            @lang('legal.disclaimer-copyr-val')
        </p>

        <p>@lang('legal.disclaimer-source'): <a href="http://www.e-recht24.de/muster-disclaimer.html">eRecht24</a></p>

    </div>

</section>

<section id="privacy">

    <div class="sec-title">

        <div class="container">

            <h2>@lang('legal.privacy-heading')</h2>

        </div>

    </div>

    <div class="container">

        <h4>@lang('legal.privacy-policy')</h4>

        <p class="just">
            @lang('legal.privacy-policy-val')
        </p>

        <p>@lang('legal.privacy-source'): <a href="http://www.e-recht24.de/muster-datenschutzerklaerung.html">eRecht24</a></p>

        <br/>
        <br/>

        <p style="text-align: center;">
            <a class="btn" href="/?lang=<?=App::getLocale()?>">@lang('legal.back-button')</a>
        </p>

    </div>

</section>
@stop