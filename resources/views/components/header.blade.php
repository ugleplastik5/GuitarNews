<header class="site-header">
    <div class="container header-inner">
        <a href="{{ url('/') }}" class="logo">GuitarNews</a>

        <nav class="main-nav">
            <a href="{{ url('/') }}">Главная</a>
            <a href="{{ url('/category') }}">Категории</a>

            @auth
                <a href="{{ url('/journalist') }}">Журналист</a>
                <a href="{{ url('/categories') }}">Категории (управление)</a>
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