<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('schools', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->text('bio');
			$table->string('address');
			$table->string('town');
			$table->string('state');
			$table->string('zip');
			$table->date('year_joined');
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
		Schema::drop('schools');
	}

}
