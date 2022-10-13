<header class="header">
    <div class="navbar-area fixed-top">
        <div class="container">
            <div class="row align-items-center">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav">
                                <li class="nav-item">
                                    <div>
                                        <a href="{{ route('index') }}">
                                        <img  src="{{ Vite::asset('public/content/img/logo6_klein.png') }}" width=75%" alt="...">
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('bonen') }}">Bonen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#section3">Aparaten</a>
                                </li>
                            </ul>
                        </div>
                        <a class="pr-4" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                        <a href="{{ route('offerte') }}">
                            <div class="contactBtn p-4">
                                <p>Contact</p>
                            </div>
                        </a>
                    </nav>
            </div>
        </div>
    </div>
</header>
