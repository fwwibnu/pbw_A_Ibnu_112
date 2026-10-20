
@extends('layouts.admin')

@section('admin_title', 'Dashboard')

@section('admin_content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">
            Selamat Datang, {{ Auth::user()->name }}!
        </h3>

        <p>
            Ini adalah pusat kendali untuk website SMP Mentari.
            Silakan pilih menu di sebelah kiri untuk mulai mengelola konten.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div class="bg-blue-100 p-5 rounded-lg">
                <h4 class="text-lg font-semibold text-blue-800">
                    Jumlah Kegiatan
                </h4>
                <p class="text-3xl font-bold text-blue-900">
                    {{ $jumlahKegiatan }}
                </p>
            </div>

            <div class="bg-green-100 p-5 rounded-lg">
                <h4 class="text-lg font-semibold text-green-800">
                    Jumlah Pesan Buku Tamu
                </h4>
                <p class="text-3xl font-bold text-green-900">
                    {{ $jumlahPesan }}
                </p>
            </div>
        </div>
    </div>
@endsection
