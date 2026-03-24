@extends('adminlte::page')

@section('title', 'Адмінпанель')

@section('content_header')
    <h1>@yield('page_title', 'Адмінпанель')</h1>
@stop

@section('content')
    @yield('admin_content')
@stop