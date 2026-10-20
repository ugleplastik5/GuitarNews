<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Журналист — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page">
    <x-header />
    <main class="container">
        <h1 class="page-title">Новая статья</h1>
        @if (session('success'))
            <div class="flash-success">{{ session('success') }}</div>
        @endif
        <form class="article-form" method="POST" action="{{ route('journalist.store') }}">
            @csrf
            <label>
                Заголовок
                <input type="text" name="heading" placeholder="Введите заголовок статьи" required>
            </label>
            <label>
                Категория
                <select name="category_id" required>
                    <option value="">— Выберите категорию —</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
            <label>
                Текст статьи
                <textarea name="text" rows="10" placeholder="Текст новости..." required></textarea>
            </label>
            <button type="submit" class="btn-primary">Опубликовать</button>
        </form>
    </main>
    <x-footer />
</div>
</body>
</html>