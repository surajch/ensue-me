<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Service;
 

 
    class ServicesTableSeeder extends Seeder {

    public function run()
    {		Service::truncate();
				Service::create(['name' => 'IT',
        			'service_category_id' => '321',
       				'price_per_month' => '2000',
       				'details' => 'Easy Lifes easy']);
        Service::create(['name' => 'Finance',
              'service_category_id' => '4521',
              'price_per_month' => '4500',
              'details' => '123 as easy']);
        Service::create(['name' => 'Logistics',
              'service_category_id' => '8914',
              'price_per_month' => '22000',
              'details' => 'Dispatch things']);
        Service::create(['name' => 'HR',
              'service_category_id' => '8521',
              'price_per_month' => '32000',
              'details' => 'Recruitment']);
        Service::create(['name' => 'Services',
              'service_category_id' => '11321',
              'price_per_month' => '223000',
              'details' => 'Easy services']);
      }
}