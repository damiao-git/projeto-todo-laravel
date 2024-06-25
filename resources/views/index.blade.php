<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <title>To-do-list</title>
</head>
<body>
    <header>
        <h2>Bem vindo à minha To-do-list! Fique a vontade!</h2>
    </header>
    <main>
        <div class="container">
            <div class="card todo"></div>
            <div class="card doing"></div>
            <div class="card done"></div>
        </div>
    </main>
</body>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</html>