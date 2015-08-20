<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
	// $this->call('UserTableSeeder');
		$this->call('UserInfoTableSeeder');
		$this->call('ServicesTableSeeder');
		$this->call('UserServiceBucketTableSeeder');
		$this->call('AddressTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('MembershipTableSeeder');
		$this->call('MembershipServiceTableSeeder');
		$this->call('OrderTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('ServiceCategoryTableSeeder');



		$this->call('CityTableSeeder');
        $this->call('CountryTableSeeder');
        $this->call('StateTableSeeder');
	}

}
