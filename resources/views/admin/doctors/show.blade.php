@extends('layouts.admin')

@section('page_title', 'Перегляд лікаря')

@section('admin_content')

<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $doctor->id }}</p>
        <p><strong>Ім’я:</strong> {{ $doctor->name }}</p>
        <p><strong>Спеціалізація:</strong> {{ $doctor->specialty }}</p>
        <p><strong>Вартість прийому:</strong> {{ $doctor->price }}</p>
    </div>
</div>

<a href="{{ route('admin.doctors.index') }}" class="btn btn-secondary mt-3">
    Назад
</a>

@stop