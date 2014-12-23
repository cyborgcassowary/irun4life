<?php

/**
 * Run the database seeds.
 *
 * @return void
 */

class DirectorTableSeeder extends Seeder {

	public function run()
	{
//		Eloquent::unguard();

		Directors::create([
			'email' => 'ryan@ryanhettler.net',
			'firstname' => 'Malcolm',
			'lastname' => 'Ford',
			'password' => Hash::make('2222'),
			'school' => '1'
		]);

	}
}