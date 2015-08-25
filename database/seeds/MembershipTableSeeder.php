<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Membership;
 

 
    class MembershipTableSeeder extends Seeder {

    public function run()
    {		    Membership::truncate();
				Membership::create(['name' => 'DELL',
       				'subscription_price_per_month' => '40000']);
				Membership::create(['name' => 'HCL',
       				'subscription_price_per_month' => '25000']);
				Membership::create(['name' => 'IBM',
       				'subscription_price_per_month' => '34000']);	
				Membership::create(['name' => 'HP',
       				'subscription_price_per_month' => '90000']);
				Membership::create(['name' => 'ATI',
       				'subscription_price_per_month' => '150000']);
	}
}