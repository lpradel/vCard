@extends('layouts.master')

@section('title')
@lang('legal.page-title')
@stop

@section('language-links')
@if (App::getLocale() == "en")
<a href="/impressum?lang=de" id="langtrigger">
    <span class="pull-right icon lang">DE</span>
</a>
@else
<a href="/legal?lang=en" id="langtrigger">
    <span class="pull-right icon lang">EN</span>
</a>
@endif
@stop

@section('sidebar-nav')
<nav>
    <div id="sidr" class="hidden">
        <h3>Navigation</h3><a href="#" class="navclose"><span class="glyphicons remove_2"><i></i></span></a>
        <ul>
            <li><a href="#impressum" >Impressum</a></li>
            <li><a href="#disclaimer" >Haftungsausschluss</a></li>
            <li><a href="#privacy">Datenschutzerklärung</a></li>
        </ul>
    </div>
</nav>
@stop

@section('main')
<div id="home" class="sugar-container">

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center" id="animation">
                <h1 id="ccname" class=" ">@lang('legal.legal-disclosure')</h1>
            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#home -->

<div id="legal" class="cream-container parallax" data-speed="1" data-offsetY="-150">

    <div class="icon-container"><div><span class="icomoon-big icomoon-hammer2"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2 id="impressum">@lang('legal.legal-disclosure')</h2>

                <h4>@lang('legal.information-tmg5')</h4>
                <p>
                    @lang('legal.information-name')<br/>
                    @lang('legal.information-adr')<br/>
                    @lang('legal.information-adr2')<br/>
                    @lang('legal.information-adr3')<br/>
                </p>

                <h4>@lang('legal.information-contact')</h4>
                <dl class="row">
                    <dt class="col legal-col dim1half text-right padright">@lang('legal.information-phone')</dt>
                    <dd class="col dim1half text-left padleft">@lang('legal.information-phone-val')</dd>

                    <dt class="col legal-col dim1half text-right padright">@lang('legal.information-mail')</dt>
                    <dd class="col dim1half text-left padleft"><a href="http://www.google.com/recaptcha/mailhide/d?k=01h-OD9C75BfXnkoGnpom4HA==&amp;c=4IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501h-OD9C75BfXnkoGnpom4HA\75\75\46c\0754IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">lukas...</a>@googlemail.com</dd>
                </dl>
                <p>
                    @lang('legal.information-source'): <a href="http://www.e-recht24.de">http://www.e-recht24.de</a>
                </p>

                <p></p>

                <h2 id="disclaimer">@lang('legal.disclaimer-heading')</h2>

                <h4>@lang('legal.disclaimer-content')</h4>

                <p class="just">
                    @lang('legal.disclaimer-content-val')
                </p>

                <h4>@lang('legal.disclaimer-links')</h4>

                <p class="just">
                    @lang('legal.disclaimer-links-val')
                </p>

                <h4>@lang('legal.disclaimer-copyr')</h4>

                <p class="just">
                    @lang('legal.disclaimer-copyr-val')
                </p>

                <p>@lang('legal.disclaimer-source'): <a href="http://www.e-recht24.de/muster-disclaimer.html">eRecht24</a></p>

                <h2 id="privacy">@lang('legal.privacy-heading')</h2>

                <h4>@lang('legal.privacy-policy')</h4>

                <p class="just">
                    @lang('legal.privacy-policy-val')
                </p>

                <p>@lang('legal.privacy-source'): <a href="http://www.e-recht24.de/muster-datenschutzerklaerung.html">eRecht24</a></p>

                <br/>
                <br/>

                <p>
                    <a class="btn" href="/?lang=<?=App::getLocale()?>">@lang('legal.back-button')</a>
                </p>
            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#about -->
@stop