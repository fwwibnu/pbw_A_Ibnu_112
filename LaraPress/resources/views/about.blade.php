<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            min-height: 100vh;
        }

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

        .brand span { color: #4f46e5; }

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
        .nav-links a.active { color: #4f46e5; }

        .nav-links .nav-button {
            padding: 12px 22px;
            color: white;
            background: linear-gradient(135deg,#2563eb,#7c3aed);
            border-radius: 10px;
        }

        .nav-links .nav-button:hover { color: white; }

        .page-content {
            min-height: calc(100vh - 76px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background: linear-gradient(135deg,#2563eb,#7c3aed);
        }

        .container { width: 100%; max-width: 700px; }

        .card {
            background: white;
            border-radius: 22px;
            padding: 45px 40px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0,0,0,.18);
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 22px;
            background: linear-gradient(135deg,#2563eb,#7c3aed);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
        }

        h1 { color: #1e293b; font-size: 32px; margin-bottom: 15px; }

        .description {
            color: #64748b;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 26px;
            margin-bottom: 28px;
        }

        .info-box h2 { color: #334155; font-size: 20px; margin-bottom: 12px; }

        .info-box p { color: #64748b; line-height: 1.8; }

        .button {
            display: inline-block;
            padding: 14px 25px;
            background: linear-gradient(135deg,#2563eb,#4f46e5);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: .2s;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37,99,235,.25);
        }

        footer { margin-top: 26px; color: #94a3b8; font-size: 13px; }

        @media(max-width:650px) {
            .navbar-content { flex-direction: column; gap: 18px; }
            .nav-links { justify-content: center; gap: 16px; }
            .card { padding: 35px 22px; }
            h1 { font-size: 27px; }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="navbar-content">
        <a href="/" class="brand">Lara<span>Press</span></a>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/tentang-kami" class="active">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
            @auth
                <a href="/dashboard">Dashboard</a>
                <a href="/profile">Profil</a>
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="nav-button" style="border:0;cursor:pointer;font-weight:bold;">Logout</button>
                </form>
            @else
                <a href="/login" class="nav-button">Login →</a>
            @endauth
        </div>
    </div>
</nav>

<main class="page-content">
    <div class="container">
        <div class="card">
            <div class="logo">📰</div>

            <h1>Tentang LaraPress</h1>

            <p class="description">
                Selamat datang di LaraPress, sebuah proyek blog sederhana
                yang dibuat sebagai media pembelajaran dan pengembangan
                website menggunakan framework Laravel.
            </p>

            <div class="info-box">
                <h2>📚 Tentang Proyek</h2>
                <p>
                    LaraPress adalah proyek blog sederhana untuk mempelajari
                    dasar-dasar Laravel 12, mulai dari routing, controller,
                    view, hingga pengelolaan halaman pada aplikasi web.
                </p>
            </div>

            <a href="/kontak" class="button">Lanjut ke Halaman Kontak →</a>

            <footer>© 2026 LaraPress. Semua hak dilindungi.</footer>
        </div>
    </div>
</main>

</body>
</html>