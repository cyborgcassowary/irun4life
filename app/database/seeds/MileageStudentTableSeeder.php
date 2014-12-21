<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class MileageStudentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$date = $faker->dateTimeThisMonth($max = 'now');

		foreach(range(1, 50) as $index)
		{
			MileageStudent::create([
				'mileage_id' => $faker->numberBetween($min = 1, $max = 10),
				'student_id' => $faker->numberBetween($min = 1, $max = 4),
				'created_at' => $date,
				'updated_at' => $date
			]);

		}
	}

}
