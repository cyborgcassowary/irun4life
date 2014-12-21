<?php

// Composer: "fzaninotto/faker": "v1.4.0"

class ParentStudentTableSeeder extends Seeder {

	public function run()
	{
			ParentStudent::create([
				'parent_id' => 2,
				'student_id' => 1
			]);

			ParentStudent::create([
				'parent_id' => 2,
				'student_id' => 2
			]);
			ParentStudent::create([
				'parent_id' => 3,
				'student_id' => 3
			]);
			ParentStudent::create([
				'parent_id' => 3,
				'student_id' => 4
			]);
	}

}
