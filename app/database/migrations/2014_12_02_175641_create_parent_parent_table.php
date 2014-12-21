<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParentParentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parent_parent', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id')->unsigned()->index();
			$table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
			$table->integer('parent_id2')->unsigned()->index();
			$table->foreign('parent_id2')->references('id')->on('parents')->onDelete('cascade');
			$table->string('relationship_status');
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
		Schema::drop('parent_parent');
	}

}
