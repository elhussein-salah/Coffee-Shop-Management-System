@include('layouts.header')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>




        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @yield('home-active')"><a href="{{ route('theme.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item @yield('menu-active')"><a href="{{ route('theme.menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item @yield('services-active')"><a href="{{ route('theme.services') }}" class="nav-link">Services</a></li>
                <li class="nav-item @yield('about-active')"><a href="{{ route('theme.about') }}" class="nav-link">About</a></li>
                <li class="nav-item @yield('contact-active')"><a href="{{ route('theme.contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cart"><a href="{{ route('theme.cart') }}" class="nav-link"><span
                            class="icon icon-shopping_cart"></span></a></li>
                @if (!Auth::check())
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">register</a></li>
                @endif
            </ul>
            @auth
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                {{-- show username down menu and link to logout --}}
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-light dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>                    </div>
                </div>

            </div>
            @endauth
        </div> <!-- Close the <div> tag here -->
    </div>
</nav>
@include('layouts.scripts')
