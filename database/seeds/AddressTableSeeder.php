<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Address;
 
    class AddressTableSeeder extends Seeder {

    public function run()
    {		Address::truncate();
				Address::create(['user_id' => '1',
        			'address1' => 'T Nagar',
       				'address2' => 'New York',
       				'city' => 'Melbourne',
       				'state' => 'Dubai',
      				'country' => 'USA',
       				'pin' => '4213456',
       				'phone' => '7234556',
       				'landmark' => 'Lifes easy']);
				Address::create(['user_id' => '2',
        			'address1' => 'Anna Nagar',
       				'address2' => 'Yorkshire',
       				'city' => 'canberra',
       				'state' => 'Chennai',
      				'country' => 'UFA',
       				'pin' => '43433',
       				'phone' => '533336',
       				'landmark' => 'world easy']);
				Address::create(['user_id' => '3',
        			'address1' => 'Srinagar',
       				'address2' => 'New Jersey',
       				'city' => 'Stockholm',
       				'state' => 'Dublin',
      				'country' => 'SA',
       				'pin' => '13456',
       				'phone' => '4556',
       				'landmark' => 'Lifes Tough']);
				Address::create(['user_id' => '4',
        			'address1' => 'Tilak Nagar',
       				'address2' => 'New Delhi',
       				'city' => 'Qatar',
       				'state' => 'New Castle',
      				'country' => 'Canada',
       				'pin' => '456',
       				'phone' => '756',
       				'landmark' => 'Too easy']);
				Address::create(['user_id' => '5',
        			'address1' => 'Nagar',
       				'address2' => 'York',
       				'city' => 'bourne',
       				'state' => 'Duai',
      				'country' => 'SAE',
       				'pin' => '42456',
       				'phone' => '756',
       				'landmark' => 'Lifes!!!!!!!!!!!!']);

    }

}