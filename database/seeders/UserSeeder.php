<?php

namespace Database\Seeders;

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
        $superadmin = User::create([
            'id' => 1,
            'username' => 'superadmin',
            'nama' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $superadmin->assignRole('1');

        $admin = User::create([
            'id' => 2,
            'username' => 'admin',
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $admin->assignRole('2');
    }
}