<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Категории — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page">
    <x-header />
    <main class="container">
        <h1 class="page-title">Категории</h1>
        @php $hasAny = false; @endphp
        @foreach ($categories as $category)
            @if ($category->texts->count() > 0)
                @php $hasAny = true; @endphp
                <section class="category-block">
                    <h2 class="category-title">{{ $category->name }}</h2>
                    <div class="news-grid">
                        @foreach ($category->texts as $text)
                            <a href="{{ route('article', $text) }}" class="news-card">
                                <div class="news-body">
                                    <h2>{{ $text->heading }}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($text->text, 100) }}</p>
                                    <div class="article-meta">
                                        Автор: {{ $text->author->login ?? 'Неизвестно' }}
                                        · {{ $text->created_at ? $text->created_at->format('d.m.Y') : 'Дата неизвестна' }}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endif
        @endforeach
        @if (!$hasAny)
            <p class="empty-message">Пока нет статей ни в одной категории.</p>
        @endif
    </main>
    <x-footer />
</div>
</body>
</html>