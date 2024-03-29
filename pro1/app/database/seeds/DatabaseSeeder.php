<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('UsersTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('LogsTableSeeder');

		// $this->call('UserTableSeeder');
	}

}
