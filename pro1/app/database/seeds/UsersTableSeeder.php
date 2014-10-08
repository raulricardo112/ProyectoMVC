<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
	$users = array(['nombre' => 'Ricardo', 'email' => 'richi.mitsu@gmail.com', 'username' => 'Richi', 'password' => 'devyl', 'rol' => 'admin', 'activo' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
	['nombre' => 'Oscar', 'email' => 'oscar.2@gmail.com', 'username' => 'oscar12', 'password' => 'admin', 'rol' => 'user', 'activo' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
	
		DB::table('Users')->insert($users);
	}

}