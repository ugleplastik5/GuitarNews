<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>GuitarNews — Главная</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page">
    <x-header />
    <main class="container">
        <h1 class="page-title">Все новости</h1>
        <section class="news-grid">
            @forelse ($texts as $text)
                <a href="{{ route('article', $text) }}" class="news-card">
                    <div class="news-body">
                        <span class="category">{{ $text->category->name ?? 'Без категории' }}</span>
                        <h2>{{ $text->heading }}</h2>
                        <p>{{ \Illuminate\Support\Str::limit($text->text, 100) }}</p>
                        <div class="article-meta">
                            Автор: {{ $text->author->login ?? 'Неизвестно' }}
                            · {{ $text->created_at ? $text->created_at->format('d.m.Y') : 'Дата неизвестна' }}
                        </div>
                    </div>
                </a>
            @empty
                <p class="empty-message">Пока новостей нет.</p>
            @endforelse
        </section>
    </main>
    <x-footer />
</div>
</body>
</html>