<?php

use App\User;
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
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('123');
        $admin->save();

        $user1 = new User();
        $user1->name = 'test';
        $user1->email = 'test@gmail.com';
        $user1->password = bcrypt('123');
        $user1->save();

        $user2 = new User();
        $user2->name = 'test2';
        $user2->email = 'test2@gmail.com';
        $user2->password = bcrypt('123');
        $user2->save();
    }
}
