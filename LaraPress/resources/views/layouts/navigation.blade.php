
<style>
    .lp-navbar { background:#fff; border-bottom:1px solid #e5e7eb; font-family:Arial,sans-serif; }
    .lp-nav-inner { max-width:1200px; margin:auto; min-height:70px; padding:0 24px; display:flex; align-items:center; justify-content:space-between; gap:20px; }
    .lp-brand { color:#4f46e5; font-size:25px; font-weight:800; text-decoration:none; white-space:nowrap; }
    .lp-nav-links,.lp-nav-user { display:flex; align-items:center; gap:24px; }
    .lp-nav-links a,.lp-nav-user a { color:#4b5563; text-decoration:none; font-size:14px; }
    .lp-nav-links a:hover,.lp-nav-user a:hover { color:#4f46e5; }
    .lp-nav-user { gap:18px; }
    .lp-logout { background:#ef4444; color:white; border:0; padding:10px 16px; border-radius:8px; cursor:pointer; font-weight:600; }
    .lp-logout:hover { background:#dc2626; }
    .lp-mobile-button { display:none; border:0; background:white; font-size:25px; cursor:pointer; }
    .lp-mobile-menu { display:none; padding:16px 24px; border-top:1px solid #eee; }
    .lp-mobile-menu a { display:block; padding:10px 0; color:#4b5563; text-decoration:none; }
    .lp-mobile-menu form { padding-top:8px; }
    @media(max-width:850px) {
        .lp-nav-inner { flex-wrap:wrap; }
        .lp-nav-links,.lp-nav-user { display:none; }
        .lp-mobile-button { display:block; }
        .lp-mobile-menu.lp-open { display:block; }
    }
</style>

<nav class="lp-navbar">
    <div class="lp-nav-inner">
        <a class="lp-brand" href="{{ url('/') }}">LaraPress</a>

        <div class="lp-nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
            <a href="{{ url('/kontak') }}">Kontak</a>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @endauth
        </div>

        <div class="lp-nav-user">
            @auth
                <span style="font-size:14px;color:#6b7280">Halo, {{ Auth::user()->name }}</span>
                <a href="{{ route('profile.edit') }}">Profil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="lp-logout" type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>

        <button class="lp-mobile-button" type="button"
            onclick="document.getElementById('lp-mobile-menu').classList.toggle('lp-open')"
            aria-label="Buka menu">☰</button>
    </div>

    <div class="lp-mobile-menu" id="lp-mobile-menu">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
        <a href="{{ url('/kontak') }}">Kontak</a>
        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile.edit') }}">Profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="lp-logout" type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</nav>
