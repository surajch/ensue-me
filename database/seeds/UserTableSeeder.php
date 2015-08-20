<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
 

 
    class UserTableSeeder extends Seeder {

    public function run()
    {	
      User::truncate();
			User::create(['name' => 'Deepak',
        			'email' => 'deepak@yahoo.com',
       				'password' => 'deepak',
       				'role_id' => '1']);
			User::create(['name' => 'Monsoor',
        			'email' => 'monsoorch@gmail.com',
       				'password' => 'monsoorch',
       				'role_id' => '2']);
			User::create(['name' => 'Suraj',
        			'email' => 'sacontrack@gmail.com',
       				'password' => 'sactrack',
       				'role_id' => '3']);
			User::create(['name' => 'Saidul',
        			'email' => 'saidul.a.ch@gmail.com',
       				'password' => '123456',
       				'role_id' => '4']);
			User::create(['name' => 'Raihan',
        			'email' => 'raihan25@gmail.com',
       				'password' => '321654',
       				'role_id' => '5']);

	}
}