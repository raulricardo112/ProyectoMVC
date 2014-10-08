<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('Posts')->onDelete('cascade');
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
		Schema::drop('Logs');
	}

}
