<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            "name" => "AdminPoject",
            "email" => "admin@mail.mail",
            "password" => bcrypt("qwerty")
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            "name" => "UserProject",
            "email" => "user@mail.mail",
            "password" => bcrypt("qwerty")
        ]);

        $user->assignRole('user');
    }
}
