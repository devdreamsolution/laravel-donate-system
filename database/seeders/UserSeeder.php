<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // create users
        $superAdmin = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
        ]);
        $superAdmin->assignRole('Admin');

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com'
        ]);
        $user->assignRole('User');
    }
}
