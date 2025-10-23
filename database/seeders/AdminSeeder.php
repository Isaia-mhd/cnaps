<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', config('app.admin.email'))->exists();
        if (!$admin) {
            User::create([
                'name' => config('app.admin.name'),
                'email' => config('app.admin.email'),
                'password' => Hash::make(config('app.admin.password')),
                'email_verified_at' => now()
            ]);
        }
    }
}
