<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserServiceBucketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_bucket', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id') ;
			$table->integer('service_id');
			$table->integer('service_remaining');
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
		Schema::drop('service_bucket');	
	}

}
