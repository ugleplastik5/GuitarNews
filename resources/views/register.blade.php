<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page">

    <x-header />

    <main class="container">
        <h1 class="page-title">Регистрация</h1>

        @if ($errors->any())
            <div class="flash-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form class="article-form" method="POST" action="{{ route('register') }}">
            @csrf

            <label>
                Логин
                <input type="text" name="login" value="{{ old('login') }}" required>
            </label>

            <label>
                Пароль
                <input type="password" name="password" required>
            </label>

            <label>
                Подтверждение пароля
                <input type="password" name="password_confirmation" required>
            </label>

            <button type="submit" class="btn-primary">Зарегистрироваться</button>
        </form>
    </main>

    <x-footer />

</div>

</body>
</html>