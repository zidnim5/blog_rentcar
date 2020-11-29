<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
        ];

        $user = User::create($user);

        /** assign role */
        $user->assignRole('admin');
    }
}
