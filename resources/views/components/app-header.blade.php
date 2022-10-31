<header style="height: 10vh; z-index: 1">
    <div class="d-flex align-items-center navbar-area">
        <div class="p-2">
            <a href="{{ route('index') }}">
                <img  src="{{ Vite::asset('public/content/img/logo6_klein.png') }}" width=75%" alt="...">
            </a>
        </div>

        <div class="ms-auto p-2">
        </div>
        <div>
            <a href="{{ route('dashboard') }}">
                <div class="contactBtn">
                    <p>Dashboard</p>
                </div>
            </a>
        </div>
    </div>
</header>

