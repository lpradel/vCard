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

@section('main')
LEGAL
@stop