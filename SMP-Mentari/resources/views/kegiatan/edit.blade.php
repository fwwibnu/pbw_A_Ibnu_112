
@extends('layouts.admin')

@section('admin_title', 'Edit Kegiatan')

@section('admin_content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">
            Edit Kegiatan
        </h3>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-4 rounded-md">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kegiatan.update', $kegiatan) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">
                    Judul Kegiatan
                </label>

                <input
                    type="text"
                    name="judul"
                    id="judul"
                    value="{{ old('judul', $kegiatan->judul) }}"
                    class="w-full rounded-md border-gray-300 shadow-sm"
                    required
                >
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">
                    Deskripsi Kegiatan
                </label>

                <textarea
                    name="deskripsi"
                    id="deskripsi"
                    rows="5"
                    class="w-full rounded-md border-gray-300 shadow-sm"
                    required
                >{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
            </div>

            <div class="flex gap-3">
                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700"
                >
                    Simpan Perubahan
                </button>

                <a
                    href="{{ route('kegiatan.index') }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300"
                >
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
