@extends('layouts.app')

@section('title', 'Наші лікарі')

@section('content')
    <h1>Наші лікарі</h1>

    <div class="row">
        @foreach($doctors as $doctor)
            <x-card :doctor="$doctor" />
        @endforeach
    </div>
@endsection