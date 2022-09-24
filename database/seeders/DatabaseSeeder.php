<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Crate Super Admin
         \App\Models\User::factory()->create([
             'name' => 'Super Admin',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('Admin@1122'),
             'is_super' => true
         ]);
    }
}
