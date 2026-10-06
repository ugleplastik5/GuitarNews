<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page">

    <x-header />

    <main class="container">
        <h1 class="page-title">Панель администратора</h1>

        <section class="admin-block">
            <h2 class="admin-title">Статьи</h2>

            <div class="admin-list">

                <div class="admin-item">
                    <div class="admin-info">
                        <h3>Обзор Fender Player II</h3>
                        <p class="admin-meta">Электрогитары · Иван · 01.10.2025</p>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit" type="button">Редактировать</button>
                        <button class="btn-ban" type="button">Блокировать</button>
                        <button class="btn-delete" type="button">Удалить</button>
                    </div>
                </div>

                <div class="admin-item">
                    <div class="admin-info">
                        <h3>Топ акустик до 30 000 ₽</h3>
                        <p class="admin-meta">Акустика · Мария · 29.09.2025</p>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit" type="button">Редактировать</button>
                        <button class="btn-ban" type="button">Блокировать</button>
                        <button class="btn-delete" type="button">Удалить</button>
                    </div>
                </div>

                <div class="admin-item">
                    <div class="admin-info">
                        <h3>Ламповый или цифровой?</h3>
                        <p class="admin-meta">Усилители · Пётр · 28.09.2025</p>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit" type="button">Редактировать</button>
                        <button class="btn-ban" type="button">Блокировать</button>
                        <button class="btn-delete" type="button">Удалить</button>
                    </div>
                </div>

            </div>
        </section>

        <section class="admin-block">
            <h2 class="admin-title">Пользователи</h2>

            <div class="admin-list">

                <div class="admin-item">
                    <div class="admin-info">
                        <h3>Иван</h3>
                        <p class="admin-meta">ivan@mail.com · Журналист · <span class="status-ok">Активен</span></p>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-ban" type="button">Забанить</button>
                    </div>
                </div>

                <div class="admin-item">
                    <div class="admin-info">
                        <h3>Мария</h3>
                        <p class="admin-meta">maria@mail.com · Журналист · <span class="status-ok">Активен</span></p>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-ban" type="button">Забанить</button>
                    </div>
                </div>

                <div class="admin-item">
                    <div class="admin-info">
                        <h3>Пётр</h3>
                        <p class="admin-meta">petr@mail.com · Журналист · <span class="status-banned">Забанен</span></p>
                    </div>
                    <div class="admin-actions">
                        <button class="btn-edit" type="button">Разбанить</button>
                    </div>
                </div>

            </div>
        </section>

        <section class="admin-block">
            <h2 class="admin-title">Изменение роли пользователя</h2>

            <form class="admin-form">
                <label>
                    Пользователь
                    <select name="user">
                        <option>Иван (ivan@mail.com)</option>
                        <option>Мария (maria@mail.com)</option>
                        <option>Пётр (petr@mail.com)</option>
                    </select>
                </label>

                <label>
                    Новая роль
                    <select name="role">
                        <option>Пользователь</option>
                        <option>Журналист</option>
                        <option>Администратор</option>
                    </select>
                </label>

                <button type="button" class="btn-primary">Сохранить</button>
            </form>
        </section>

    </main>

    <x-footer />

</div>

</body>
</html>