<header>
    <nav class="navigation">
        <a href="index.html" id="logo">Sport Store</a>
        <ul>
            <li>
                <x-nav-link href="{{ route('home') }}" active=" {{ request()->routeIs('/') }}">
                    Accueil
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="" active="">
                    A-propos
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="" active="">
                    Contact
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('login') }}" class="btn">
                    Se connecter
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('register') }}" class="btn inscrire">
                    S'inscrire
                </x-nav-link>
            </li>
        </ul>
    </nav>
</header>