<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ServiceCategory;
 

 
    class ServiceCategoryTableSeeder extends Seeder {

    public function run()
    {		    ServiceCategory::truncate();
				ServiceCategory::create(['name' => 'IT']);
				ServiceCategory::create(['name' => 'F&A']);
				ServiceCategory::create(['name' => 'Logistics']);
				ServiceCategory::create(['name' => 'HR']);
				ServiceCategory::create(['name' => 'Administration']);
	}
}