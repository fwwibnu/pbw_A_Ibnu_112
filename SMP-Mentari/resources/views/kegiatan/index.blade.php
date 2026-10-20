
@extends('layouts.admin')

@section('admin_title', 'Kelola Kegiatan')

@section('admin_content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-800">
                Daftar Kegiatan
            </h3>

            <a href="{{ route('kegiatan.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                + Tambah Kegiatan
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        @if ($kegiatan->isEmpty())
            <p class="text-gray-500">
                Belum ada data kegiatan. Silakan tambahkan kegiatan baru.
            </p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">
                                No.
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">
                                Judul Kegiatan
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">
                                Deskripsi
                            </th>
                            <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($kegiatan as $item)
                            <tr>
                                <td class="px-4 py-3">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $item->judul }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $item->deskripsi }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <a href="{{ route('kegiatan.edit', $item) }}"
                                       class="text-blue-600 hover:underline mr-3">
                                        Edit
                                    </a>

                                    <form action="{{ route('kegiatan.destroy', $item) }}"
                                          method="POST"
                                          class="inline"
                                          onsubmit="return confirm('Yakin ingin menghapus kegiatan ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="text-red-600 hover:underline">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
