<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Kontak - LaraPress</title>
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
        max-width: 700px;
    }

    .card {
        background: white;
        border-radius: 20px;
        padding: 45px 40px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .header {
        text-align: center;
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

    .contact-list {
        display: grid;
        gap: 15px;
        margin-bottom: 30px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 18px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        transition: 0.3s ease;
    }

    .contact-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
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

    .contact-text {
        text-align: left;
    }

    .contact-text h2 {
        color: #334155;
        font-size: 16px;
        margin-bottom: 5px;
    }

    .contact-text a,
    .contact-text p {
        color: #64748b;
        text-decoration: none;
        line-height: 1.5;
    }

    .contact-text a:hover {
        color: #2563eb;
    }

    .info-box {
        background: linear-gradient(135deg, #eff6ff, #f5f3ff);
        border-radius: 15px;
        padding: 22px;
        margin-bottom: 30px;
    }

    .info-box h2 {
        color: #334155;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .info-box p {
        color: #64748b;
        line-height: 1.6;
    }

    .button {
        display: block;
        width: fit-content;
        margin: 0 auto;
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
        text-align: center;
        margin-top: 25px;
        color: #94a3b8;
        font-size: 13px;
    }

    @media (max-width: 600px) {
        .card {
            padding: 35px 20px;
        }

        h1 {
            font-size: 27px;
        }

        .contact-item {
            padding: 15px;
        }
    }
</style>

</head> <body>
<div class="container">
    <div class="card">

        <div class="header">
            <div class="logo">📞</div>

            <h1>Hubungi LaraPress</h1>

            <p class="description">
                Punya pertanyaan, saran, kritik, atau membutuhkan bantuan?
                Jangan ragu untuk menghubungi kami melalui informasi kontak
                yang tersedia di bawah ini.
            </p>
        </div>

        <div class="contact-list">

            <!-- Email -->
            <div class="contact-item">
                <div class="contact-icon">✉️</div>

                <div class="contact-text">
                    <h2>Email</h2>
                    <a href="mailto:info@larapress.com">
                        info@larapress.com
                    </a>
                </div>
            </div>

            <!-- WhatsApp -->
            <div class="contact-item">
                <div class="contact-icon">💬</div>

                <div class="contact-text">
                    <h2>WhatsApp / Telepon</h2>
                    <a href="https://wa.me/6281234567890">
                        +62 812-3456-7890
                    </a>
                </div>
            </div>

            <!-- Alamat -->
            <div class="contact-item">
                <div class="contact-icon">📍</div>

                <div class="contact-text">
                    <h2>Alamat</h2>
                    <p>
                        Jl. Contoh No. 123, Indonesia
                    </p>
                </div>
            </div>

            <!-- Jam Operasional -->
            <div class="contact-item">
                <div class="contact-icon">🕐</div>

                <div class="contact-text">
                    <h2>Jam Operasional</h2>
                    <p>
                        Senin - Jumat: 08.00 - 17.00 WIB
                    </p>
                </div>
            </div>

        </div>

        <div class="info-box">
            <h2>📩 Kami Siap Membantu</h2>

            <p>
                Silakan hubungi kami melalui email atau WhatsApp.
                Kami akan berusaha memberikan respons secepat mungkin
                untuk membantu kebutuhan Anda.
            </p>
        </div>

        <a href="/" class="button">
            ← Kembali ke Halaman Utama
        </a>

        <footer>
            © 2026 LaraPress. Semua hak dilindungi.
        </footer>

    </div>
</div>

</body> </html>