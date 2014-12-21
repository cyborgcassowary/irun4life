<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class StudentGoodDeedsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			StudentGoodDeeds::create([
				'gooddeed_id' => $faker->numberBetween($min = 1, $max = 30),
				'student_id' => $faker->numberBetween($min = 1, $max = 4)
			]);

		}
	}

}
