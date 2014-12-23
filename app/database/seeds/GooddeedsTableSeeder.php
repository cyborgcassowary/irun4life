<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class GooddeedsTableSeeder extends Seeder {

	public function run()
	{
//		Eloquent::unguard();

		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Gooddeeds::create([
				'deed_name' => $faker->word,
				'score' => '1',
				'date' => $faker->date($format = 'Y-m-d', $max = 'now')
			]);
		}
	}

}
