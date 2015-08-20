<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\MembershipService;
 
    class MembershipServiceTableSeeder extends Seeder {

    public function run()
    {		MembershipService::truncate();
				MembershipService::create(['membership_id' => '1',
        			'service_id' => '1',
       				'frequency_interval' => '2',
       				'frequency_count' => '3',
       				'limit' => '8']);
        MembershipService::create(['membership_id' => '2',
              'service_id' => '2',
              'frequency_interval' => '2',
              'frequency_count' => '5',
              'limit' => '7']);
        MembershipService::create(['membership_id' => '3',
              'service_id' => '5',
              'frequency_interval' => '7',
              'frequency_count' => '5',
              'limit' => '11']);
        MembershipService::create(['membership_id' => '4',
              'service_id' => '4',
              'frequency_interval' => '5',
              'frequency_count' => '3',
              'limit' => '21']);
        MembershipService::create(['membership_id' => '5',
              'service_id' => '5',
              'frequency_interval' => '13',
              'frequency_count' => '4',
              'limit' => '23']);
    }
}