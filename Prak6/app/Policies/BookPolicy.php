<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer'], true);
    }

    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'staff', 'viewer'], true);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'staff'], true);
    }

    public function update(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'staff'], true);
    }

    public function delete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    // Dipakai Filament untuk bulk delete (hapus banyak sekaligus)
    public function deleteAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    public function restoreAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Book $book): bool
    {
        return $user->role === 'admin';
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->role === 'admin';
    }
}