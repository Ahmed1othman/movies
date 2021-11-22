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
        $user = User::create([
            'name'=> 'super_admin',
            'email'=>'super_admin@gmail.com',
            'password'=>'password',
            'type'=>'super_admin',
            'status'=>'active'
        ]);
        $user->attachRole('super_admin');
    }
}
