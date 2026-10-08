<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrNew(['email' => 'admin@gmail.com']);

        $admin->forceFill([
            'name'              => 'Tourvalley Admin',
            'phone'             => '+8801548525169',
            'password'          => Hash::make('password'),
            'role'              => 'admin',
            'status'            => 'active',
            'email_verified_at' => now(),
        ])->save();
    }
}
