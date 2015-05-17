@extends('layouts.master')

@section('title')
Lukas Pradel
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

@section('main')
<main>
    <div id="logo"><img src="images/me.jpg" alt="Photo" title="" /><h1>Lukas Pradel</h1></div>

    <section>

        <h2>@lang('index.about')</h2>
        <ul>
            <li>
                @lang('index.about-1-1')
                <a href="https://paluno.uni-due.de/">@lang('index.about-1-2')</a>
                @lang('index.about-1-3')
            </li>
            <li>
                @lang('index.about-2-1')
                <a href="http://steamcommunity.com/id/boonzsteam/">@lang('index.about-2-2')</a>,
                @lang('index.about-2-3')
            </li>
            <li>
                @lang('index.about-3-1')
                <a href="/public/download/cv.lukas.pradel.en.pdf">@lang('index.about-3-2')</a>
                @lang('index.about-3-3')
                <a class="btn-2" href="/public/download/cv.lukas.pradel.de.pdf">@lang('index.about-3-4')</a></li>
        </ul>
    </section>

    <section>
        <h2>@lang('index.work')</h2>
        <ul>
            <li>
                @lang('index.work-1-1')
                <a href="https://paluno.uni-due.de/">paluno</a>
            </li>
            <li>
                @lang('index.work-2-1')
                <a href="http://www.se.wiwi.uni-due.de/">@lang('index.work-2-2')</a>
                @lang('index.work-2-3')
            </li>
            <li>
                @lang('index.work-3-1')
                <a href="https://github.com/lpradel">@lang('index.work-3-2')</a>
            </li>
        </ul>
    </section>

    <section>
        <h2>@lang('index.more-info')</h2>
        <ul>
            <li><a href="http://blog.lukaspradel.com">Blog</a></li>
            <li><a href="http://github.com/lpradel">GitHub</a></li>
            <li><a href="http://osrc.dfm.io/lpradel/">Open Source Report Card</a></li>
            <li><a href="https://www.linkedin.com/in/lukaspradel">LinkedIn</a></li>
            <li><a href="https://www.xing.com/profile/Lukas_Pradel/">XING</a></li>
            <li><a href="https://twitter.com/lukaspradel">Twitter</a></li>
            <li><a href="https://plus.google.com/+LukasPradel/">Google+</a></li>
        </ul>
    </section>
</main>
@stop