@props(['doctor'])

<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">

<h5 class="card-title">{{ $doctor['name'] }}</h5>

<p class="card-text">
Спеціалізація: {{ $doctor['specialty'] }}
</p>

<p>
Вартість прийому: {{ $doctor['price'] }}
</p>

<a href="/doctors/{{ $doctor['id'] }}" class="btn btn-primary">
Записатись
</a>

</div>
</div>
</div>