<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page">
    <x-header />
    <main class="container">
        <h1 class="page-title">Редактирование статьи</h1>

        <form class="article-form" method="POST" action="{{ route('admin.texts.update', $text) }}">
            @csrf
            @method('PUT')

            <label>
                Заголовок
                <input type="text" name="heading" value="{{ $text->heading }}" required>
            </label>

            <label>
                Текст статьи
                <textarea name="text" rows="10" required>{{ $text->text }}</textarea>
            </label>

            <button type="submit" class="btn-primary">Сохранить изменения</button>
        </form>
    </main>
    <x-footer />
</div>
</body>
</html>