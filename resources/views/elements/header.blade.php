<div class="main">
    <a href="{{ route("home") }}"><img class="logo" src="/img/Logo.png"></a>
    <div class="menu">
        <ul class="menu-ul">
            <li class="menu-desktop-li">
                <a href="{{ route("home") }}" class="menu-a">Главная</a>
            </li>
            <li class="menu-desktop-li">
                <a href="{{ route("tense") }}" class="menu-a">Таблица времен</a>
            </li>
            <li class="menu-desktop-li">
                <a href="{{ route("grammar") }}" class="menu-a">Основы грамматики</a>
            </li>
            <li class="menu-mobile">
                <a href="" class="menu-a">Меню</a>
                <ul class="dropdown">
                    <li class="menu-mobile-li">
                        <a href="{{ route("home") }}" class="dropdown-a">Главная</a>
                    </li>
                    <li class="menu-mobile-li">
                        <a href="{{ route("tense") }}" class="dropdown-a">Таблица времен</a>
                    </li>
                    <li class="menu-mobile-li">
                        <a href="{{ route("grammar") }}" class="dropdown-a">Основы грамматики</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
