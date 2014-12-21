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
		Schema::create('gooddeed_student', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gooddeed_id')->unsigned()->index();
			$table->foreign('gooddeed_id')->references('id')->on('gooddeeds')->onDelete('cascade');
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
		Schema::drop('gooddeed_student');
	}

}
