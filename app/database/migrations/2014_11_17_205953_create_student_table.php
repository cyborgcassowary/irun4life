<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('firstname');
			$table->string('lastname');
			$table->string('password');
			$table->integer('grade_id');
			$table->integer('school_id');
			$table->integer('age');
			$table->boolean('active');
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
		// destroy student table here
		Schema::drop('student');
	}

}
