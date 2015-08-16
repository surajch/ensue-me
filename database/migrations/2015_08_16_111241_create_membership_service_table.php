<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membership_service', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('membership_id') ;
			$table->integer('service_id') ;
			$table->integer('frequency_interval');
			$table->integer('frequency_count');
			$table->integer('limit');
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
		Schema::drop('membership_service');
	}

}
