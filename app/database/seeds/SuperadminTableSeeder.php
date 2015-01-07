<?php


class SuperadminTableSeeder extends Seeder {

	public function run()
	{

			SuperAdmin::create([
				'email' => 'ryan@ryanhettler.com',
				'firstname' => 'Ryan',
				'lastname' => 'Hettler',
				'password' => Hash::make('1234')
			]);
	}

}
