<?php

/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

class ParentTableSeeder extends Seeder {

	public function run()
	{
//		Eloquent::unguard();

		// Harrison Ford
		Parents::create([
			'firstname' => 'Harrison',
			'lastname' => 'Ford',
			'email' => 'ryan@ryanhettler.com',
			'password' => Hash::make('1234'),
			'active' => '1'
		]);

// Melissa Mathison
		Parents::create([
			'firstname' => 'Melissa',
			'lastname' => 'Mathison',
			'email' => 'info@cyborgcassowary.com',
			'password' => Hash::make('1234'),
			'active' => '1'
		]);

// Mary Marquardt

		Parents::create([
			'firstname' => 'Mary',
			'lastname' => 'Marquardt',
			'email' => 'ryanhettler@me.com',
			'password' => Hash::make('1234'),
			'active' => '1'
		]);
	}
}
