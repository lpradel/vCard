@extends('layouts.master')

@section('title')
@lang('legal.page-title')
@stop

@section('language-links')
    @if (App::getLocale() == "en")
        <div class="polyglot-language-switcher" data-grid-columns="1" data-anim-effect="fade" data-open-mode="click" style="display:inline;">
            <ul style="display: none">
                <li><a href="/legal?lang=de" title="German" data-lang-id="de_DE"> Deutsch</a></li>
                <li><a href="/legal?lang=en" title="English"  data-lang-id="en_US" class="pls-selected-locale"> English</a></li>
            </ul>
        </div>
    @else
        <div class="polyglot-language-switcher" data-grid-columns="1" data-anim-effect="fade" data-open-mode="click" style="display:inline;">
            <ul style="display: none">
                <li><a href="/legal?lang=de" title="German" data-lang-id="de_DE" class="pls-selected-locale"> Deutsch</a></li>
                <li><a href="/legal?lang=en" title="English"  data-lang-id="en_US" > English</a></li>
            </ul>
        </div>
    @endif
@stop

@section('main')
<main>
    <div class="v-card">
        <div class="container-fluid">
            <div id="logo" style="text-align:center;"><h1>@lang('legal.legal-disclosure')</h1></div>
<section class="text-center">
        <h4>
            @lang('legal.information-tmg5')
            &sect; 5 Telemediengesetz (TMG)
        </h4>
        <p>
            @lang('legal.information-name')<br/>
            @lang('legal.information-adr')<br/>
            @lang('legal.information-adr2')<br/>
            @lang('legal.information-adr3')<br/>
        </p>
        <br/>
        <h4>@lang('legal.information-contact')</h4>
        <dl class="row">
            <dt class="column dim1half text-right pad-right">@lang('legal.information-phone')</dt>
            <dd class="column dim1half text-left pad-left">@lang('legal.information-phone-val')</dd>

            <dt class="column dim1half text-right pad-right">@lang('legal.information-mail')</dt>
            <dd class="column dim1half text-left pad-left"><a href="http://www.google.com/recaptcha/mailhide/d?k=01h-OD9C75BfXnkoGnpom4HA==&amp;c=4IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501h-OD9C75BfXnkoGnpom4HA\75\75\46c\0754IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">lukas...</a>@googlemail.com</dd>
        </dl>
        <p class="source" style="clear:both;">
            @lang('legal.information-source'): <a href="http://www.e-recht24.de">http://www.e-recht24.de</a>
        </p>
</section>

<section class="text-justify">
    <h2>@lang('legal.disclaimer-heading')</h2>

    <h4>@lang('legal.disclaimer-content')</h4>
    <p class="legal">
        @lang('legal.disclaimer-content-val')
    </p>

    <h4>@lang('legal.disclaimer-links')</h4>
    <p class="legal">
        @lang('legal.disclaimer-links-val')
    </p>

    <h4>@lang('legal.disclaimer-copyr')</h4>
    <p class="legal">
        @lang('legal.disclaimer-copyr-val')
    </p>

    <p class="source-right">@lang('legal.disclaimer-source'): <a href="http://www.e-recht24.de/muster-disclaimer.html">eRecht24</a></p>
</section>

<section class="text-justify">
    <h2>@lang('legal.privacy-heading')</h2>

    <h4>@lang('legal.privacy-policy')</h4>
    <p class="legal">
        @lang('legal.privacy-policy-val')
    </p>
    <p class="source-right">@lang('legal.privacy-source'): <a href="http://www.e-recht24.de/muster-datenschutzerklaerung.html">eRecht24</a></p>

    <br/>
    <br/>
    <p class="text-center">
        <a class="btn" href="/?lang=<?=App::getLocale()?>">@lang('legal.back-button')</a>
    </p>
</section>
        </div>
    </div>
</main>
@stop