<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'HospitalApp')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="/">HospitalApp</a>

    <div class="navbar-nav">
        <a class="nav-link" href="/">Головна</a>
        <a class="nav-link" href="/doctors">Лікарі</a>
        <a class="nav-link" href="/about">Про проєкт</a>
    </div>
</div>
</nav>

<main class="flex-grow-1">
<div class="container mt-4">
    @yield('content')
</div>
</main>

<footer class="bg-dark text-white text-center p-3">
    HospitalApp © 2026
</footer>

</body>
</html>