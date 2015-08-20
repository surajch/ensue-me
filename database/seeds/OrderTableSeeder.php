<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Order;
 

 
    class OrderTableSeeder extends Seeder {

    public function run()
    {		    Order::truncate();
				Order::create(['service_id' => '5',
       				'status' => 'pending',
       				'user_id' => '5']);
				Order::create(['service_id' => '3',
       				'status' => 'onprogress',
       				'user_id' => '3']);
				Order::create(['service_id' => '2',
       				'status' => 'pending',
       				'user_id' => '2']);
				Order::create(['service_id' => '1',
       				'status' => 'failed',
       				'user_id' => '1']);
				Order::create(['service_id' => '4',
       				'status' => 'success',
       				'user_id' => '4']);
	}
}