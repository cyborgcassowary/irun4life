<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parent_student', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id')->unsigned()->index();
			$table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
			$table->integer('student_id')->unsigned()->index();
			$table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
			$table->timestamps();
		});



// 		Schema::create('gigs', function($table)
// {
//     $table->increments('gig_id');

//     $table->dateTime('gig_startdate');

//     $table->integer('band_id')->unsigned();
//     $table->integer('stage_id')->unsigned();
// });

// Schema::table('gigs', function($table)
// {
//     $table->foreign('band_id')
//         ->references('band_id')->on('bands')
//         ->onDelete('cascade');

//     $table->foreign('stage_id')
//         ->references('stage_id')->on('stages')
//         ->onDelete('cascade');
// });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parent_student');
	}

}
