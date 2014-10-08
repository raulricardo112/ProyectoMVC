<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
/*7*Schema::create('Posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->string('descripcion');
			$table->string('imagen');
			$table->string('contenido');
			$table->string('tags');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
			$table->timestamps();
		});*/
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Posts');
	}

}
