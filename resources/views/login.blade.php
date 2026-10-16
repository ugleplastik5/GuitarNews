<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page">

    <x-header />

    <main class="container">
        <h1 class="page-title">Вход</h1>

        @if ($errors->any())
            <div class="flash-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form class="article-form" method="POST" action="{{ route('login') }}">
            @csrf

            <label>
                Логин
                <input type="text" name="login" value="{{ old('login') }}" required>
            </label>

            <label>
                Пароль
                <input type="password" name="password" required>
            </label>

            <button type="submit" class="btn-primary">Войти</button>
        </form>
    </main>

    <x-footer />

</div>

</body>
</html>