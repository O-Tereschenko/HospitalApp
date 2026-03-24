@extends('layouts.admin')

@section('page_title', 'Додати лікаря')

@section('admin_content')

<form action="{{ route('admin.doctors.store') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label>Ім’я лікаря</label>
        <input type="text" name="name" class="form-control">

        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label>Спеціалізація</label>
        <input type="text" name="specialty" class="form-control">

        @error('specialty')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label>Вартість прийому</label>
        <input type="text" name="price" class="form-control">

        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Зберегти
    </button>

</form>

@stop