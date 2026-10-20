
@extends('layouts.app')

@section('content')
    @include('layouts.partials.header')

    <section class="bg-blue-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-5">
                Selamat Datang di SMP Mentari
            </h1>

            <p class="text-lg md:text-xl text-white mb-8">
                Membentuk generasi cerdas, berkarakter, dan berprestasi.
            </p>

            <a href="{{ route('bukutamu.index') }}"
               class="inline-block bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100">
                Kunjungi Buku Tamu
            </a>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Kegiatan Terbaru
        </h2>

        @if ($kegiatan_terbaru->isEmpty())
            <div class="bg-white p-6 rounded-lg shadow text-center text-gray-600">
                Belum ada kegiatan yang ditambahkan.
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($kegiatan_terbaru as $kegiatan)
                    <article class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">
                            {{ $kegiatan->judul }}
                        </h3>

                        <p class="text-gray-600 whitespace-pre-line">
                            {{ $kegiatan->deskripsi }}
                        </p>

                        <p class="text-sm text-gray-500 mt-4">
                            {{ $kegiatan->created_at->format('d M Y') }}
                        </p>
                    </article>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $kegiatan_terbaru->links() }}
            </div>
        @endif
    </section>

    @include('layouts.partials.footer')
@endsection
