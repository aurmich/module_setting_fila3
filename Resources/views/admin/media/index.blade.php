@extends('adm_theme::layouts.app')
@section('content')
    <x-media.crud name="images" :model="$_panel->getParent()->row" collection="images" />
@endsection
{{ Theme::add('media::css/media.css') }}
