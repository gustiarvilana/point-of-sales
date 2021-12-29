<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('123'),
                'level' => 1
            ],
            [
                'name' => 'Admin 1',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}