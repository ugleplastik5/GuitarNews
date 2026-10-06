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

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Электрогитары</span>
                        <h2>Обзор новой Fender Stratocaster 2025</h2>
                        <p>Разбираем, что изменилось в легендарной модели.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Акустика</span>
                        <h2>Топ-5 акустических гитар до 30 000 ₽</h2>
                        <p>Подборка лучших бюджетных моделей.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Усилители</span>
                        <h2>Ламповый или цифровой усилитель?</h2>
                        <p>Сравниваем два подхода.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Эффекты</span>
                        <h2>Обзор педалей overdrive 2025 года</h2>
                        <p>Новые модели, которые изменят ваш звук.</p>
                    </div>
                </article>

            </section>
        </main>

        <x-footer />

    </div>

</body>
</html>