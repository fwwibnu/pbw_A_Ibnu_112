<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return 'Halaman Tambah Postingan';
    }

    public function store(Request $request)
    {
        return 'Postingan berhasil dikirim.';
    }

    public function edit(string $post)
    {
        return 'Halaman Edit Postingan: ' . $post;
    }

    public function update(Request $request, string $post)
    {
        return 'Postingan ' . $post . ' berhasil diperbarui.';
    }

    public function destroy(string $post)
    {
        return 'Postingan ' . $post . ' berhasil dihapus.';
    }
}
