<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchooldirectorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('schooldirectors', function(Blueprint $table) {
			// create student table here
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('firstname');
			$table->string('lastname');			
			$table->string('password');
			$table->integer('school');
			$table->rememberToken();
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
		//
		Schema::drop('schooldirectors');
	}

}
