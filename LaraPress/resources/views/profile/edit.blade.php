<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - LaraPress</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f6fa;
            color: #1f2937;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-content {
            max-width: 1200px;
            min-height: 76px;
            margin: auto;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .brand {
            color: #4f46e5;
            font-size: 26px;
            font-weight: bold;
            text-decoration: none;
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: #374151;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #4f46e5;
        }

        .user-links {
            display: flex;
            align-items: center;
            gap: 18px;
            white-space: nowrap;
        }

        .username {
            color: #6b7280;
            font-size: 14px;
        }

        .logout-button {
            border: none;
            border-radius: 9px;
            padding: 12px 17px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        /* JUDUL HALAMAN */
        .page-header {
            background: white;
            border-bottom: 1px solid #e5e7eb;
        }

        .page-header-content {
            max-width: 1200px;
            margin: auto;
            padding: 23px 25px;
        }

        .page-header h1 {
            margin: 0;
            font-size: 24px;
            color: #111827;
        }

        .page-header p {
            margin: 8px 0 0;
            color: #6b7280;
            font-size: 14px;
        }

        /* ISI PROFIL */
        .profile-container {
            max-width: 1200px;
            margin: 35px auto;
            padding: 0 25px 40px;
        }

        .profile-card {
            background: white;
            padding: 30px;
            margin-bottom: 24px;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
        }

        .profile-card h2 {
            margin: 0 0 8px;
            color: #111827;
            font-size: 20px;
        }

        .profile-card p {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.6;
        }

        .profile-card form {
            width: 100%;
        }

        .profile-card input[type="text"],
        .profile-card input[type="email"],
        .profile-card input[type="password"] {
            width: 100%;
            max-width: 600px;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 15px;
            outline: none;
        }

        .profile-card input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.15);
        }

        .profile-card label {
            display: block;
            margin-bottom: 7px;
            color: #374151;
            font-size: 14px;
        }

        .profile-card button,
        .profile-card input[type="submit"] {
            display: inline-block;
            margin-top: 15px;
            padding: 11px 18px;
            border: none;
            border-radius: 7px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .profile-card button:hover,
        .profile-card input[type="submit"]:hover {
            opacity: 0.9;
        }

        .profile-card a {
            color: #4f46e5;
        }

        .profile-card section {
            max-width: 100%;
        }

        .profile-card .max-w-xl {
            max-width: 100%;
        }

        .profile-card .mt-1 {
            margin-top: 7px;
        }

        .profile-card .mt-2 {
            margin-top: 10px;
        }

        .profile-card .mt-4 {
            margin-top: 20px;
        }

        .profile-card .mt-6 {
            margin-top: 28px;
        }

        .profile-card .mt-8 {
            margin-top: 32px;
        }

        .profile-card .text-sm {
            font-size: 14px;
        }

        .profile-card .text-gray-600 {
            color: #6b7280;
        }

        .profile-card .text-gray-900 {
            color: #111827;
        }

        .profile-card .text-gray-800 {
            color: #1f2937;
        }

        .profile-card .font-medium {
            font-weight: 600;
        }

        .profile-card .block {
            display: block;
        }

        .profile-card .w-full {
            width: 100%;
        }

        .profile-card .max-w-xl {
            max-width: 100%;
        }

        .profile-card .flex {
            display: flex;
        }

        .profile-card .items-center {
            align-items: center;
        }

        .profile-card .gap-4 {
            gap: 16px;
        }

        .profile-card .rounded-md {
            border-radius: 7px;
        }

        .profile-card .border-gray-300 {
            border-color: #d1d5db;
        }

        .profile-card .shadow-sm {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .profile-card .text-red-600 {
            color: #dc2626;
        }

        .profile-card .bg-red-600 {
            background: #dc2626;
        }

        .profile-card .bg-gray-800 {
            background: #1f2937;
        }

        .profile-card .text-white {
            color: white;
        }

        .profile-card .focus\:outline-none:focus {
            outline: none;
        }

        .profile-card .focus\:ring-2:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }

        .profile-card .inline-flex {
            display: inline-flex;
            align-items: center;
        }

        .profile-card .underline {
            text-decoration: underline;
        }

        .profile-card .opacity-75 {
            opacity: 0.75;
        }

        .profile-card .border {
            border: 1px solid #e5e7eb;
        }

        .profile-card .p-4 {
            padding: 16px;
        }

        .profile-card .sm\:p-8 {
            padding: 24px;
        }

        @media (max-width: 900px) {
            .navbar-content {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-links {
                gap: 15px;
            }

            .user-links {
                justify-content: center;
            }
        }

        @media (max-width: 600px) {
            .navbar-content {
                padding: 18px;
            }

            .nav-links {
                width: 100%;
                gap: 14px;
            }

            .user-links {
                width: 100%;
                flex-wrap: wrap;
            }

            .page-header-content,
            .profile-container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .profile-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-content">

            <a href="{{ url('/') }}" class="brand">
                LaraPress
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                <a href="{{ url('/kontak') }}">Kontak</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </div>

            <div class="user-links">
                <span class="username">
                    Halo, {{ Auth::user()->name }}
                </span>

                <a href="{{ route('profile.edit') }}" class="active">
                    Profil
                </a>

                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" class="logout-button">
                        Logout
                    </button>
                </form>
            </div>

        </div>
    </nav>

    <header class="page-header">
        <div class="page-header-content">
            <h1>Profil</h1>
            <p>Kelola informasi akun dan keamanan kamu di LaraPress.</p>
        </div>
    </header>

    <main class="profile-container">

        <div class="profile-card">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div class="profile-card">
            @include('profile.partials.update-password-form')
        </div>

        <div class="profile-card">
            @include('profile.partials.delete-user-form')
        </div>

    </main>

</body>
</html>