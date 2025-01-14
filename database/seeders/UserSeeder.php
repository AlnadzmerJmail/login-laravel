<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run():void
    {
        // Create Sample Dummy Users Array
        $users = [
            [
                'name'=>'Javed Ur Rehman',
                'email'=>'javed@allphptricks.com',
                'password'=> Hash::make('javed1234')
            ],
            [
                'name'=>'Syed Ahsan Kamal',
                'email'=>'ahsan@allphptricks.com',
                'password'=> Hash::make('ahsan1234')
            ],
            [
                'name'=>'Abdul Muqeet',
                'email'=>'a.muqeet@allphptricks.com',
                'password'=> Hash::make('muqeet1234')
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($users as $user){
            User::create($user);
        }
    }
    
}
