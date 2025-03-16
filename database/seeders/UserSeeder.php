<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Arif',
            'username' => 'mhmdarifnha',
            'email' => 'arif@arifmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),

        ]);

        User::factory(5)->create();
    }
}
