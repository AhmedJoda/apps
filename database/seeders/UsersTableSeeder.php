<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'test@test.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('123456'),
                'is_admin' => 1,
                'super_admin' => 1,
            ]
        );
    }
}
