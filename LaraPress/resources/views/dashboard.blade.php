<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
            position: relative;
            z-index: 10;
        }

        .navbar-content {
            max-width: 1200px;
            min-height: 76px;
            margin: auto;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            color: #1e293b;
            font-size: 26px;
            font-weight: bold;
            text-decoration: none;
            white-space: nowrap;
        }

        .brand span {
            color: #4f46e5;
        }

        .nav-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .nav-links a {
            color: #475569;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            transition: .2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #4f46e5;
        }

        .nav-links .nav-button {
            display: inline-block;
            padding: 12px 22px;
            color: white;
            background: linear-gradient(135deg,#2563eb,#7c3aed);
            border: 0;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: .2s;
        }

        .nav-links .nav-button:hover {
            color: white;
            opacity: .9;
        }

        .nav-links form {
            display: inline;
            margin: 0;
        }

        /* JUDUL DASHBOARD */
        .page-heading {
            background: white;
            border-bottom: 1px solid #e2e8f0;
        }

        .heading-content {
            max-width: 1200px;
            margin: auto;
            padding: 27px 25px 24px;
        }

        .heading-content h1 {
            font-size: 24px;
            margin-bottom: 7px;
        }

        .heading-content p {
            color: #64748b;
            font-size: 14px;
        }

        /* KONTEN DASHBOARD */
        .dashboard-content {
            padding: 34px 20px;
            min-height: calc(100vh - 155px);
        }

        .container {
            max-width: 1140px;
            margin: auto;
        }

        .hero {
            padding: 36px;
            color: white;
            background: linear-gradient(120deg,#4338ca,#9333ea);
            border-radius: 18px;
            box-shadow: 0 12px 28px rgba(79,70,229,.16);
            margin-bottom: 26px;
        }

        .hero .eyebrow {
            font-size: 14px;
            margin-bottom: 12px;
        }

        .hero h2 {
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 14px;
        }

        .hero .description {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
            color: #f5f3ff;
        }

        .primary-button {
            display: inline-block;
            padding: 13px 20px;
            color: #4f46e5;
            background: white;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            transition: .2s;
        }

        .primary-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,.12);
        }

        /* KARTU DASHBOARD */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(3,minmax(0,1fr));
            gap: 20px;
            margin-bottom: 26px;
        }

        .dash-card {
            padding: 25px 24px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(15,23,42,.03);
            transition: .2s;
        }

        .dash-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 22px rgba(15,23,42,.07);
        }

        .card-icon {
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            font-size: 23px;
            margin-bottom: 18px;
        }

        .icon-purple {
            color: #4f46e5;
            background: #eef2ff;
        }

        .icon-pink {
            color: #9333ea;
            background: #f3e8ff;
        }

        .icon-green {
            color: #16a34a;
            background: #dcfce7;
        }

        .dash-card h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .dash-card p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 16px;
        }

        .card-link {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .card-link:hover {
            color: #7c3aed;
        }

        /* BAGIAN BAWAH */
        .bottom-panel {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            padding: 25px 27px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
        }

        .bottom-panel h3 {
            font-size: 19px;
            margin-bottom: 8px;
        }

        .bottom-panel p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.7;
        }

        .bottom-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .secondary-button,
        .contact-button {
            display: inline-block;
            padding: 12px 17px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            transition: .2s;
        }

        .secondary-button {
            color: #334155;
            background: #f1f5f9;
        }

        .contact-button {
            color: white;
            background: #4f46e5;
        }

        .secondary-button:hover,
        .contact-button:hover {
            transform: translateY(-2px);
        }

        /* RESPONSIVE */
        @media(max-width:950px) {
            .navbar-content {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-links {
                justify-content: center;
                gap: 18px;
            }

            .card-grid {
                grid-template-columns: repeat(2,minmax(0,1fr));
            }
        }

        @media(max-width:650px) {
            .navbar-content {
                flex-direction: column;
                padding: 18px 15px;
                gap: 18px;
            }

            .nav-links {
                justify-content: center;
                gap: 16px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .heading-content {
                padding: 23px 20px;
            }

            .dashboard-content {
                padding: 23px 15px;
            }

            .hero {
                padding: 27px 23px;
            }

            .hero h2 {
                font-size: 28px;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }

            .bottom-panel {
                align-items: flex-start;
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR: HANYA SATU --}}
    <nav class="navbar">
        <div class="navbar-content">

            <a href="{{ url('/') }}" class="brand">
                Lara<span>Press</span>
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                <a href="{{ url('/kontak') }}">Kontak</a>
                <a href="{{ route('dashboard') }}" class="active">Dashboard</a>
                <a href="{{ route('profile.edit') }}">Profil</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-button">Logout</button>
                </form>
            </div>

        </div>
    </nav>

    {{-- JUDUL --}}
    <section class="page-heading">
        <div class="heading-content">
            <h1>Dashboard</h1>
            <p>Selamat datang kembali di LaraPress.</p>
        </div>
    </section>

    {{-- ISI DASHBOARD --}}
    <main class="dashboard-content">
        <div class="container">

            <section class="hero">
                <p class="eyebrow">Selamat datang kembali,</p>

                <h2>Halo, {{ Auth::user()->name }}!</h2>

                <p class="description">
                    Kelola postingan, atur profil, dan jelajahi semua fitur
                    LaraPress melalui dashboard kamu.
                </p>

                <a href="{{ route('posts.create') }}" class="primary-button">
                    + Tambah Postingan
                </a>
            </section>

            <section class="card-grid">

                <article class="dash-card">
                    <div class="card-icon icon-purple">☰</div>
                    <h3>Postingan</h3>
                    <p>Buat dan mulai menulis postingan baru di LaraPress.</p>
                    <a href="{{ route('posts.create') }}" class="card-link">
                        Mulai menulis →
                    </a>
                </article>

                <article class="dash-card">
                    <div class="card-icon icon-pink">♙</div>
                    <h3>Profil Saya</h3>
                    <p>Lihat dan kelola informasi akun kamu.</p>
                    <a href="{{ route('profile.edit') }}" class="card-link">
                        Buka profil →
                    </a>
                </article>

                <article class="dash-card">
                    <div class="card-icon icon-green">▦</div>
                    <h3>Jelajahi LaraPress</h3>
                    <p>Kenali situs dan informasi kontak kami.</p>
                    <a href="{{ url('/tentang-kami') }}" class="card-link">
                        Tentang Kami →
                    </a>
                </article>

            </section>

            <section class="bottom-panel">
                <div>
                    <h3>Akun kamu sudah siap!</h3>
                    <p>
                        Kamu berhasil login. Gunakan menu di atas untuk
                        menjelajahi LaraPress.
                    </p>
                </div>

                <div class="bottom-actions">
                    <a href="{{ url('/') }}" class="secondary-button">
                        Kembali ke Home
                    </a>

                    <a href="{{ url('/kontak') }}" class="contact-button">
                        Hubungi Kami
                    </a>
                </div>
            </section>

        </div>
    </main>

</body>
</html>