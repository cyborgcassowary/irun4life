<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class DirectorTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


			Director::create([

			]);

		DirectorMessage::create([
			'director_id' => '1',
			'message' => $faker->text
		]);

	}

}
