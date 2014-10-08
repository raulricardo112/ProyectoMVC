<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LogsTableSeeder extends Seeder {

	public function run()
	{
		$logs = array(['user_id' => 1, 'descripcion' => 'Creacion de un Logs en laravel', 'post_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['user_id' => 1, 'descripcion' => 'Animacion predeterminada', 'post_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
	
		DB::table('Logs')->insert($logs);
	}

}

