<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление категориями — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page">

    <x-header />

    <main class="container">
        <h1 class="page-title">Управление категориями</h1>

        @if (session('success'))
            <div class="flash-success">{{ session('success') }}</div>
        @endif

        <form class="article-form" method="POST" action="{{ route('categories.store') }}">
            @csrf

            <label>
                Название категории
                <input type="text" name="name" placeholder="Например: Педали эффектов" required>
            </label>

            <button type="submit" class="btn-primary">Добавить</button>
        </form>

        <section class="admin-block" style="margin-top: 40px;">
            <h2 class="admin-title">Существующие категории</h2>

            <div class="admin-list">
                @forelse ($categories as $category)
                    <div class="admin-item">
                        <div class="admin-info">
                            <h3>{{ $category->name }}</h3>
                        </div>
                    </div>
                @empty
                    <p class="empty-message">Категорий пока нет.</p>
                @endforelse
            </div>
        </section>
    </main>

    <x-footer />

</div>

</body>
</html>