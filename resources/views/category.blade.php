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
            @if ($category->articles->count() > 0)
                @php $hasAny = true; @endphp

                <section class="category-block">
                    <h2 class="category-title">{{ $category->name }}</h2>

                    <div class="news-grid">
                        @foreach ($category->articles as $article)
                            <article class="news-card">
                                <div class="news-body">
                                    <h2>{{ $article->title }}</h2>
                                    <p>{{ \Illuminate\Support\Str::limit($article->text, 100) }}</p>
                                    <div class="article-meta">
                                        Автор: {{ $article->author->login ?? 'Неизвестно' }}
                                        · {{ $article->created_at->format('d.m.Y') }}
                                    </div>
                                </div>
                            </article>
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