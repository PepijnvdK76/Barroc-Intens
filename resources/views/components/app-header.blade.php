<header class="header">
    <div class="d-flex align-items-center navbar-area">
        <div class="p-2">
            <a href="{{ route('index') }}">
                <img  src="{{ Vite::asset('public/content/img/logo6_klein.png') }}" width=75%" alt="...">
            </a>
        </div>

        <div class="ms-auto p-2">
            <div class="nav-item">
                <a class="pr-4 page-scroll" href="{{ route('dashboard') }}">
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
