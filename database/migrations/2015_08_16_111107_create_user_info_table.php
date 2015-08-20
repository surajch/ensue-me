<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name', 255);
			$table->string('company_address1', 255);
			$table->string('company_address2', 255);		
			$table->string('city', 255);		
			$table->string('state', 255);					
			$table->string('country', 255);
			$table->integer('pin');
			$table->integer('phone');
			$table->string('description', 255);
			$table->timestamps();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_info');
		//
	}

}
