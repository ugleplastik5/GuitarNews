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

        <form class="article-form">

            <label>
                Заголовок
                <input type="text" name="title" placeholder="Введите заголовок статьи">
            </label>

            <label>
                Категория
                <select name="category">
                    <option value="electric">Электрогитары</option>
                    <option value="acoustic">Акустика</option>
                    <option value="amps">Усилители</option>
                </select>
            </label>

            <label>
                Тег
                <input type="text" name="tag" placeholder="Например: Обзор">
            </label>

            <label>
                Ссылка на картинку
                <input type="url" name="image" placeholder="https://...">
            </label>

            <label>
                Текст статьи
                <textarea name="text" rows="10" placeholder="Текст новости..."></textarea>
            </label>

            <button type="button" class="btn-primary">Опубликовать</button>

        </form>
    </main>

    <x-footer />

</div>

</body>
</html>