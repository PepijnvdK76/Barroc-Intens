<header class="header">
    <div class="d-flex align-items-center fixed-top navbar-area">
        <div class="p-2">
            <a href="{{ route('index') }}">
                <img  src="{{ Vite::asset('public/content/img/logo6_klein.png') }}" width=75%" alt="...">
            </a>
        </div>
        <div class="p-2">
            <ul id="nav" class="navbar-nav">
                <li class="nav-item">
                    <a  class="page-scroll navbarText" href="{{ route('bonen') }}">Bonen</a>
                </li>
            </ul>
        </div>
        <div class="p-2">
            <ul id="nav" class="navbar-nav">
                <li class="nav-item">
                    <a class="page-scroll navbarText" href="{{ route('machines') }}">Aparaten</a>
                </li>
            </ul>
        </div>
        <div class="ms-auto p-2">
            <div class="nav-item">
                <a class="pr-4 page-scroll navbarText" href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </div>
            </div>
                <div>
                <a href="{{ route('offerte') }}">
                    <div class="contactBtn">
                        <p>Contact</p>
                    </div>
                </a>
             </div>
        </div>
</header>
