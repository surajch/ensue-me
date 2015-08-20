<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UserInfo;
 

 
    class UserInfoTableSeeder extends Seeder {

    public function run()
    {		
        UserInfo::truncate();
				UserInfo::create(['company_name' => 'Dell',
        			'company_address1' => 'T Nagar',
       				'company_address2' => 'New York',
       				'city' => 'Melbourne',
       				'state' => 'Dubai',
      				'country' => 'USA',
       				'pin' => '4213456',
       				'phone' => '7234556',
              'description' => 'Lifes easy',
       				'user_id' => 1
              ]);
				UserInfo::create(['company_name' => '123',
        			'company_address1' => 'T Nagar',
       				'company_address2' => 'New York',
       				'city' => 'Melbourne',
       				'state' => 'Dubai',
      				'country' => 'USA',
       				'pin' => '4213456',
       				'phone' => '7234556',
       				'description' => 'Lifes easy',

              'user_id' => 2]);
				UserInfo::create(['company_name' => 'Dell',
        			'company_address1' => 'T Nagar',
       				'company_address2' => 'New York',
       				'city' => 'Melbourne',
       				'state' => 'Dubai',
      				'country' => 'USA',
       				'pin' => '4213456',
       				'phone' => '7234556',
       				'description' => 'Lifes easy',

              'user_id' => 3]);
				
    }

}