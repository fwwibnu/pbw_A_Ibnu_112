<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ibnu',
                'email' => 'ibnu@gmail.com',
                'password' => 'admin123',
                'role' => 'admin',
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => 'staff123',
                'role' => 'staff',
            ],
            [
                'name' => 'Viewer',
                'email' => 'viewer@gmail.com',
                'password' => 'viewer123',
                'role' => 'viewer',
            ],
        ];

        foreach ($users as $data) {
            // Kalau akun belum ada, dibuat baru. Kalau sudah ada, password tidak diubah.
            $user = User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => $data['password'],
                ]
            );

            // Pastikan role-nya sesuai
            $user->update(['role' => $data['role']]);
        }
    }
}