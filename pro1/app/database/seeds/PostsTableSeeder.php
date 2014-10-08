<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
	$posts = array(['titulo' => 'Laravel', 'descripcion' => 'Este es el primer post de mi aplicacaion', 'imagen' => 'imagen.jpg', 'contenido' => 'Creacion de mi primera aplicacion de laravel', 'tags' => 'UTIM', 'user_id' => 1 , 'created_at' => new DateTime, 'updated_at' => new DateTime],
	['titulo' => 'Tutorial', 'descripcion' => 'Chequen mi aplicaion por facebook', 'imagen' => 'imagen2.jpg', 'contenido' => 'Facilito la  instalacion de laravel', 'tags' => 'Linux', 'user_id' => 1 , 'created_at' => new DateTime, 'updated_at' => new DateTime]					
						);
	
		DB::table('Posts')->insert($posts);
	}

}