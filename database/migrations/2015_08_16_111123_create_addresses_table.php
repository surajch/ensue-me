<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');	
			$table->string('address1', 255);
			$table->string('address2', 255);		
			$table->string('city', 255);		
			$table->string('state', 255);					
			$table->string('country', 255);
			$table->integer('pin');
			$table->integer('phone');
			$table->string('landmark', 255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
