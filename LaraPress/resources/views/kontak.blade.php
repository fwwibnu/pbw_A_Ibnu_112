<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LaraPress</title>

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
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,.18);
        }

        .header { text-align: center; }

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

        .contact-list { display: grid; gap: 14px; margin-bottom: 25px; }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 17px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            transition: .2s;
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,.06);
        }

        .contact-icon {
            min-width: 48px;
            height: 48px;
            background: #dbeafe;
            color: #2563eb;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .contact-text { text-align: left; }
        .contact-text h2 { color: #334155; font-size: 16px; margin-bottom: 5px; }
        .contact-text a,
        .contact-text p { color: #64748b; text-decoration: none; line-height: 1.5; }
        .contact-text a:hover { color: #2563eb; }

        .info-box {
            background: linear-gradient(135deg,#eff6ff,#f5f3ff);
            border-radius: 15px;
            padding: 22px;
            margin-bottom: 25px;
        }

        .info-box h2 { color: #334155; font-size: 18px; margin-bottom: 8px; }
        .info-box p { color: #64748b; line-height: 1.7; }

        .button {
            display: block;
            width: fit-content;
            margin: 0 auto;
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

        footer { text-align: center; margin-top: 25px; color: #94a3b8; font-size: 13px; }

        @media(max-width:650px) {
            .navbar-content { flex-direction: column; gap: 18px; }
            .nav-links { justify-content: center; gap: 16px; }
            .card { padding: 32px 20px; }
            h1 { font-size: 27px; }
            .contact-item { padding: 14px; }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="navbar-content">
        <a href="/" class="brand">Lara<span>Press</span></a>

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak" class="active">Kontak</a>
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
            <div class="header">
                <div class="logo">📞</div>
                <h1>Hubungi LaraPress</h1>
                <p class="description">
                    Punya pertanyaan, saran, kritik, atau membutuhkan bantuan?
                    Hubungi kami melalui informasi kontak yang tersedia di bawah ini.
                </p>
            </div>

            <div class="contact-list">
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-text">
                        <h2>Email</h2>
                        <a href="mailto:info@larapress.com">info@larapress.com</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div class="contact-text">
                        <h2>WhatsApp / Telepon</h2>
                        <a href="https://wa.me/6281234567890">+62 812-3456-7890</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-text">
                        <h2>Alamat</h2>
                        <p>Jl. Tuku Umar</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">🕐</div>
                    <div class="contact-text">
                        <h2>Jam Operasional</h2>
                        <p>Senin - Jumat: 08.00 - 17.00 WIB</p>
                    </div>
                </div>
            </div>

            <div class="info-box">
                <h2>📩 Kami Siap Membantu</h2>
                <p>
                    Silakan hubungi kami melalui email atau WhatsApp.
                    Kami akan berusaha memberikan respons secepat mungkin.
                </p>
            </div>

            <a href="/" class="button">← Kembali ke Halaman Utama</a>

            <footer>© 2026 LaraPress. Semua hak dilindungi.</footer>
        </div>
    </div>
</main>

</body>
</html>