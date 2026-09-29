<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Selamat Datang di LaraPress</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #2563eb, #7c3aed);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container {
        width: 100%;
        max-width: 650px;
    }

    .card {
        background: white;
        border-radius: 20px;
        padding: 45px 40px;
        text-align: center;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .logo {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, #2563eb, #7c3aed);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
    }

    h1 {
        color: #1e293b;
        font-size: 32px;
        margin-bottom: 15px;
    }

    .description {
        color: #64748b;
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .welcome-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
    }

    .welcome-box h2 {
        color: #334155;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .welcome-box p {
        color: #64748b;
        line-height: 1.7;
    }

    .button {
        display: inline-block;
        padding: 14px 28px;
        background: linear-gradient(135deg, #2563eb, #4f46e5);
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: 0.3s ease;
    }

    .button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.35);
    }

    footer {
        margin-top: 25px;
        color: #94a3b8;
        font-size: 13px;
    }

    @media (max-width: 600px) {
        .card {
            padding: 35px 25px;
        }

        h1 {
            font-size: 27px;
        }

        .description {
            font-size: 15px;
        }
    }
</style>

</head> <body>
<div class="container">
    <div class="card">

        <div class="logo">📰</div>

        <h1>Selamat Datang di LaraPress</h1>

        <p class="description">
            Selamat datang di blog LaraPress, tempat sederhana
            untuk belajar dan mengembangkan aplikasi web
            menggunakan framework Laravel.
        </p>

        <div class="welcome-box">
            <h2>🚀 Blog LaraPress</h2>

            <p>
                Ini adalah halaman utama dari aplikasi blog kita.
                LaraPress dibuat sebagai proyek pembelajaran untuk
                memahami dasar-dasar Laravel 12 dan pengembangan
                aplikasi web modern.
            </p>
        </div>

        <a href="/tentang-kami" class="button">
            Lihat Halaman Tentang Kami →
        </a>

        <footer>
            © 2026 LaraPress. Semua hak dilindungi.
        </footer>

    </div>
</div>

</body> </html>