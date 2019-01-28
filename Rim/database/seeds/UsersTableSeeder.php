<?php

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
        //  for Administrator
       $user = App\User::create([

        	'name' => '3s -Tech'.'Admin',
        	'email' => 'nms@amin.com',
        	'password' => bcrypt('password'),
            'admin' => 1

        	]);

       // for User or His PRofile Info

       App\Profile::create([

        'user_id' => $user->id,
        'avatar' => 'uploads/avatars/k.jpg',
        'about' => '3s Tech is one of best Hard Ware Plus Software Solution in Asia Pacific',
        'facebook' => 'user@facebook.com',
        'youtube' => 'user@youtube.pk'

        ]);


    }
}
