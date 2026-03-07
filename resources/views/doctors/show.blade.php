@extends('layouts.app')

@section('title', 'Лікар')

@section('content')

<h1>{{ $doctor['name'] }}</h1>

<p>Спеціалізація: {{ $doctor['specialty'] }}</p>
<p>Вартість прийому: {{ $doctor['price'] }}</p>

<a href="/doctors" class="btn btn-secondary">
Назад до лікарів
</a>

@endsection