<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
				
		$coments = array(['user_id' => 1, 'post_id' => 1,'comentario' => 'Mi primera aplicacion en laravel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
					['user_id' => 1, 'post_id' => 2, 'comentario' => 'Lenguaje de programacion en java', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
	
		DB::table('Comments')->insert($coments);

	}

}
