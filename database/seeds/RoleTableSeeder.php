<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
 

 
    class RoleTableSeeder extends Seeder {

    public function run()
    {		    Role::truncate();
				Role::create(['role_type' => 'admin']);
				Role::create(['role_type' => 'user']);
				Role::create(['role_type' => 'guest']);
				Role::create(['role_type' => 'admin']);
				Role::create(['role_type' => 'guest']);
	}
}