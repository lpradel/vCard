@extends('layouts.master')

@section('title')
Lukas Pradel
@stop

@section('language-links')
@if (App::getLocale() == "en")
    <div class="polyglot-language-switcher" data-grid-columns="1" data-anim-effect="fade" data-open-mode="click" style="display:inline;">
        <ul style="display: none">
            <li><a href="/?lang=de" title="German" data-lang-id="de_DE"> Deutsch</a></li>
            <li><a href="/?lang=en" title="English"  data-lang-id="en_US" class="pls-selected-locale"> English</a></li>
        </ul>
    </div>
@else
    <div class="polyglot-language-switcher" data-grid-columns="1" data-anim-effect="fade" data-open-mode="click" style="display:inline;">
        <ul style="display: none">
            <li><a href="/?lang=de" title="German" data-lang-id="de_DE" class="pls-selected-locale"> Deutsch</a></li>
            <li><a href="/?lang=en" title="English"  data-lang-id="en_US" > English</a></li>
        </ul>
    </div>
@endif
@stop

@section('main')
<main>
    <div class="v-card">
        <div class="container-fluid">
            <div class="ui-user">
                <img src="images/me.jpg" alt="" class="img-responsive" />
                <h3><a href="#">Lukas Pradel</a><span>@lang('index.about-0-0')</span></h3>
            </div>
            <p> @lang('index.about-1-0')
                @lang('index.about-1-1')
                <a href="https://paluno.uni-due.de/"><span class="red">paluno</span></a>@lang('index.about-1-2')
                @lang('index.about-2-1')
                <a href="http://steamcommunity.com/id/boonzsteam/"><span class="red">@lang('index.about-2-2')</span></a>,
                @lang('index.about-2-3')
                @lang('index.about-2-4')
                <a href="images/wee.jpg"><span class="red">@lang('index.about-2-5')</span></a>.
            </p>

            <br />
            <hr />

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-1-0')</h4>
                        <ul>
                            <li><a href="http://blog.lukaspradel.com">Blog</a></li>
                            <li><a href="/public/download/cv.lukas.pradel.en.pdf">@lang('index.col-1-1')</a></li>
                            <li><a href="/public/download/cv.lukas.pradel.de.pdf">@lang('index.col-1-2')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-2-0')</h4>
                        <ul>
                            <li><a href="http://github.com/lpradel">GitHub</a></li>
                            <li><a href="http://stackoverflow.com/users/1055743/lpradel">StackOverflow</a></li>
                            <li><a href="https://resume.github.io/?lpradel">OS Resume</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-3-0')</h4>
                        <ul>
                            <li><a href="https://plus.google.com/+LukasPradel/">Google+</a></li>
                            <li><a href="https://www.linkedin.com/in/lukaspradel">LinkedIn</a></li>
                            <li><a href="https://www.xing.com/profile/Lukas_Pradel/">XING</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 col-mob">
                    <div class="ui-item">
                        <h4>@lang('index.col-4-0')</h4>
                        <ul>
                            <li><a href="http://www.google.com/recaptcha/mailhide/d?k=01h-OD9C75BfXnkoGnpom4HA==&amp;c=4IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501h-OD9C75BfXnkoGnpom4HA\75\75\46c\0754IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">E-Mail</a></li>
                            <li><a href="https://keybase.io/lpradel">GPG</a></li>
                            <li><a href="https://twitter.com/lukaspradel">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop