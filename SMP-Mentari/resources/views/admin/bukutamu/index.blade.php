
@extends('layouts.admin')

@section('admin_title', 'Kelola Buku Tamu')

@section('admin_content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">
            Daftar Pesan Buku Tamu
        </h3>

        @if (session('success'))
            <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        @if ($daftar_pesan->isEmpty())
            <p class="text-gray-500">
                Belum ada pesan dari pengunjung.
            </p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left">No.</th>
                            <th class="px-4 py-3 text-left">Nama</th>
                            <th class="px-4 py-3 text-left">Email</th>
                            <th class="px-4 py-3 text-left">Pesan</th>
                            <th class="px-4 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($daftar_pesan as $pesan)
                            <tr>
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $pesan->nama }}</td>
                                <td class="px-4 py-3">{{ $pesan->email }}</td>
                                <td class="px-4 py-3">{{ $pesan->pesan }}</td>
                                <td class="px-4 py-3">
                                    <form
                                        action="{{ route('bukutamu.admin.destroy', $pesan) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus pesan ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="text-red-600 hover:underline">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $daftar_pesan->links() }}
            </div>
        @endif
    </div>
@endsection
