<!-- Nav -->
<nav id="nav" class="navbar">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="i{{ url('/') }}">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
                    <img class="logo-alt" src="{{ asset('img/logo-alt.png') }}" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Collapse nav button -->
            <div class="nav-collapse">
                <span></span>
            </div>
            <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#team">Team</a></li>
            <li class="has-dropdown"><a href="#blog">Blog</a>
                <ul class="dropdown">
                    <li><a href="{{ url('blog') }}">blog post</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact</a></li>

            @if (Route::has('login'))
                <li class="has-dropdown">
                    @auth
                        <a>{{ Auth::user()->name }}</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                        </ul>
                    @else
                        <a>Entrar/Registrar</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    @endauth
                </li>
            @endif

        </ul>
        <!-- /Main navigation -->

    </div>
</nav>
<!-- /Nav -->
