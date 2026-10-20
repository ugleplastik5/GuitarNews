<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $text->heading }} — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page">
    <x-header />
    <main class="container">
        <article class="article-full">
            <span class="category">{{ $text->category->name ?? 'Без категории' }}</span>
            <h1 class="article-title">{{ $text->heading }}</h1>
            <div class="article-meta">
                Автор: {{ $text->author->login ?? 'Неизвестно' }}
                · {{ $text->created_at ? $text->created_at->format('d.m.Y') : 'Дата неизвестна' }}
            </div>
            <div class="article-text">
                {{ $text->text }}
            </div>
            <a href="{{ url()->previous() }}" class="btn-back">← Назад</a>
        </article>
    </main>
    <x-footer />
</div>
</body>
</html>