
@extends('layouts.app')

@section('content')
    @include('layouts.partials.header')

    <div class="max-w-3xl mx-auto px-4 py-10">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">
                Buku Tamu SMP Mentari
            </h1>

            <p class="text-gray-600 mb-6">
                Silakan tinggalkan pesan, saran, atau masukan untuk sekolah kami.
            </p>

            @if (session('success'))
                <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 bg-red-100 text-red-700 p-3 rounded-md">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('bukutamu.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama
                    </label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        value="{{ old('nama') }}"
                        class="w-full rounded-md border-gray-300 shadow-sm"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-md border-gray-300 shadow-sm"
                        required
                    >
                </div>

                <div class="mb-6">
                    <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">
                        Pesan
                    </label>
                    <textarea
                        name="pesan"
                        id="pesan"
                        rows="5"
                        class="w-full rounded-md border-gray-300 shadow-sm"
                        required
                    >{{ old('pesan') }}</textarea>
                </div>

                <button
                    type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700"
                >
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>

    @include('layouts.partials.footer')
@endsection
