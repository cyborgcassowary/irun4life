<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class MileageTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Mileage::create([ 
				'activity_name' => 'Miles',
				'total_miles' => $faker->numberBetween('1', '9'),
				'date' => $faker->date($format = 'Y-m-d', $max = 'now')
			]);
		}
	}

}
