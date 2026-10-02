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

        <section class="category-block">
            <h2 class="category-title">Электрогитары</h2>

            <div class="news-grid">

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Обзор</span>
                        <h2>Fender Player II — новые цвета</h2>
                        <p>Что нового в обновлённой линейке.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Новости</span>
                        <h2>Gibson анонсировала новую серию Les Paul</h2>
                        <p>Подробности о моделях и ценах.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Сравнение</span>
                        <h2>Ibanez vs Jackson: что выбрать</h2>
                        <p>Сравниваем два культовых бренда.</p>
                    </div>
                </article>

            </div>
        </section>

        <section class="category-block">
            <h2 class="category-title">Акустика</h2>

            <div class="news-grid">

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Обзор</span>
                        <h2>Yamaha FG800 — легенда среди бюджетных</h2>
                        <p>Почему её советуют новичкам.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Топ</span>
                        <h2>Лучшие акустические гитары до 30 000 ₽</h2>
                        <p>Подборка на 2025 год.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Новости</span>
                        <h2>Martin выпустила новую серию</h2>
                        <p>Обзор флагманской линейки.</p>
                    </div>
                </article>

            </div>
        </section>

        <section class="category-block">
            <h2 class="category-title">Усилители</h2>

            <div class="news-grid">

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Обзор</span>
                        <h2>Ламповый или цифровой усилитель?</h2>
                        <p>Сравниваем два подхода.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Новости</span>
                        <h2>Marshall анонсировал новую серию</h2>
                        <p>Что нового в линейке DSL.</p>
                    </div>
                </article>

                <article class="news-card">
                    <div class="news-body">
                        <span class="tag">Тест</span>
                        <h2>Fender Tone Master — обзор</h2>
                        <p>Цифра, которая звучит как лампа.</p>
                    </div>
                </article>

            </div>
        </section>

    </main>

    <x-footer />

</div>

</body>
</html>