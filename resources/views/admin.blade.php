<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель — GuitarNews</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page">
    <x-header />
    <main class="container">
        <h1 class="page-title">Панель администратора</h1>

        @if (session('success'))
            <div class="flash-success">{{ session('success') }}</div>
        @endif

        <section class="admin-block">
            <h2 class="admin-title">Статьи</h2>
            <div class="admin-list">
                @forelse ($texts as $text)
                    <div class="admin-item">
                        <div class="admin-info">
                            <h3>{{ $text->heading }}</h3>
                            <p class="admin-meta">
                                {{ $text->category->name ?? 'Без категории' }} · 
                                Автор: {{ $text->author->login ?? 'Неизвестно' }} · 
                                {{ $text->created_at ? $text->created_at->format('d.m.Y') : '' }}
                                @if($text->blocked) · <span class="status-banned">Заблокирована</span> @endif
                            </p>
                        </div>
                        <div class="admin-actions">
                            <a href="{{ route('admin.texts.edit', $text) }}" class="btn-edit" style="text-decoration:none; padding:8px 14px; display:inline-block;">Редактировать</a>
                            
                            <form method="POST" action="{{ route('admin.texts.block', $text) }}">
                                @csrf
                                <button type="submit" class="btn-ban">
                                    {{ $text->blocked ? 'Разблокировать' : 'Блокировать' }}
                                </button>
                            </form>
                            
                            <form method="POST" action="{{ route('admin.texts.delete', $text) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Удалить</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>Статей нет.</p>
                @endforelse
            </div>
        </section>

        <section class="admin-block">
            <h2 class="admin-title">Пользователи</h2>
            <div class="admin-list">
                @foreach ($users as $user)
                    <div class="admin-item">
                        <div class="admin-info">
                            <h3>{{ $user->login }}</h3>
                            <p class="admin-meta">
                                Роль: {{ $user->role->name ?? 'Нет' }} · 
                                @if($user->banned) <span class="status-banned">Забанен</span> @else <span class="status-ok">Активен</span> @endif
                            </p>
                        </div>
                        <div class="admin-actions">
                            <form method="POST" action="{{ route('admin.users.role', $user) }}">
                                @csrf
                                <select name="role_id" onchange="this.form.submit()" class="role-select" style="padding: 8px; border-radius: 6px;">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </form>
                            
                            <form method="POST" action="{{ route('admin.users.ban', $user) }}">
                                @csrf
                                <button type="submit" class="btn-ban">
                                    {{ $user->banned ? 'Разбанить' : 'Забанить' }}
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <x-footer />
</div>
</body>
</html>