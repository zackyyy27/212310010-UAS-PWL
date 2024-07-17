<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'  => "admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role'=> 'admin',
        ]);
        User::create([
            'name'  => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('siswa'),
            'role'=> 'siswa',
        ]);
        User::create([
            'name'  => 'siswa2',
            'email' => 'siswa2@gmail.com',
            'password' => Hash::make('siswa'),
        ]);
    }
}
