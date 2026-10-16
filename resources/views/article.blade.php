<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $article->title }} — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page">

    <x-header />

    <main class="container">
        <article class="article-full">

            <span class="category">{{ $article->category->name ?? 'Без категории' }}</span>

            <h1 class="article-title">{{ $article->title }}</h1>

            <div class="article-meta">
                Автор: {{ $article->author->login ?? 'Неизвестно' }}
                · {{ $article->created_at->format('d.m.Y') }}
            </div>

            <div class="article-text">
                {{ $article->text }}
            </div>

            <a href="{{ url()->previous() }}" class="btn-back">← Назад</a>

        </article>
    </main>

    <x-footer />

</div>

</body>
</html>