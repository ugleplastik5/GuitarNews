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
            @forelse ($articles as $article)
                <a href="{{ route('article', $article) }}" class="news-card">
                    <div class="news-body">
                        <span class="category">{{ $article->category->name ?? 'Без категории' }}</span>
                        <h2>{{ $article->title }}</h2>
                        <p>{{ \Illuminate\Support\Str::limit($article->text, 100) }}</p>
                        <div class="article-meta">
                            Автор: {{ $article->author->login ?? 'Неизвестно' }}
                            · {{ $article->created_at->format('d.m.Y') }}
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