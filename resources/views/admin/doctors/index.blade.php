@extends('layouts.admin')

@section('page_title', 'Список лікарів')

@section('admin_content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ім’я</th>
            <th>Спеціалізація</th>
            <th>Вартість</th>
            <th>Дії</th>
        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialty }}</td>
                <td>{{ $doctor->price }}</td>
                <td>
                    <a href="{{ route('admin.doctors.show', $doctor) }}" class="btn btn-info btn-sm">
                        Перегляд
                    </a>

                    <form action="{{ route('admin.doctors.destroy', $doctor) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Видалити
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop