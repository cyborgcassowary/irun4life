<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGooddeedStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gooddeeds_student', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gooddeeds_id')->unsigned()->index();
			$table->foreign('gooddeeds_id')->references('id')->on('gooddeeds')->onDelete('cascade');
			$table->integer('student_id')->unsigned()->index();
			$table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
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
		Schema::drop('gooddeeds_student');
	}

}
