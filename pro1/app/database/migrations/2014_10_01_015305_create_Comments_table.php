<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('email');
			$table->string('username');
			$table->string('password');
			$table->string('rol');
			$table->boolean('activo');
			$table->timestamps();
		});

        Schema::create('Posts', function(Blueprint $table)
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
		});

		Schema::create('Comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('comentario');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('Posts')->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
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
		Schema::drop('Comments');
	}

}
