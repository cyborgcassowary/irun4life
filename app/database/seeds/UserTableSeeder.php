<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		User::create([
			'email' => 'ryan@ryanhettler.com',
			'name' => 'Ryan',
			'password' => Hash::make('1234')
		]);


	}

}
