<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="pt-br">

<head>
    <title>CRUD - Create</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Bootstrap 4 CSS (Standard for Laravel 7 era) -->
    <link rel="stylesheet" href="https://jsdelivr.net">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-light">
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">My App</a>
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="/products">Produtos</a>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col-12">
                {{ $slot }}
            </div>
        </div>
    </main>


    <script src="/js/script.js" defer></script>
       <!-- Bootstrap JS Dependencies -->
    <script src="https://jsdelivr.net"></script>
    <script src="https://jsdelivr.net"></script>
</body>

</html>