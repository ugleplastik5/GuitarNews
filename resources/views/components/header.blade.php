<header class="site-header">
    <div class="container header-inner">
        <a href="{{ url('/') }}" class="logo">GuitarNews</a>

        <nav class="main-nav">
            <a href="{{ url('/') }}">Главная</a>
            <a href="{{ url('/category') }}">Категории</a>

            @auth
                @if(in_array(auth()->user()->role_id, [1, 2]))
                    <a href="{{ url('/journalist') }}">Журналист</a>
                    <a href="{{ url('/categories') }}">Управление категориями</a>
                @endif

                @if(auth()->user()->role_id == 1)
                    <a href="{{ url('/admin') }}">Админка</a>
                @endif
            @endauth
        </nav>

        <div class="header-actions">
            @auth
                <span class="user-name">{{ auth()->user()->login }}</span>

                <form method="POST" action="{{ route('logout') }}" style="display:inline">
                    @csrf
                    <button type="submit" class="btn-login">Выйти</button>
                </form>
            @else
                <a href="{{ url('/login') }}" class="btn-login">Вход</a>
                <a href="{{ url('/register') }}" class="btn-login">Регистрация</a>
            @endauth
        </div>
    </div>
</header>