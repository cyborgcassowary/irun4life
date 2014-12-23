<?php

class StudentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();
		//DB::table('student')->delete();

		// $this->call('UserTableSeeder'); 

// Melissa Mathison - Second Wife
		 Student::create([
			'username' => 'MFord',
			'firstname' => 'Malcolm',
			'lastname' => 'Ford',
			'password' => Hash::make('1234'),
			'grade_id' => '4',
			'school_id' => '1',
			'age' =>'9',
			'active' => '1'
		]);

		Student::create([
			'username' => 'GFord',
			'firstname' => 'Georgia',
			'lastname' => 'Ford',
			'password' => Hash::make('1234'),
			'grade_id' => '3',
			'school_id' => '1',
			'age' =>'8',
			'active' => '1'
		]);


// Mary Marquardt - First Wife
		Student::create([
			'username' => 'BFord',
			'firstname' => 'Benjamin',
			'lastname' => 'Ford',
			'password' => Hash::make('1234'),
			'grade_id' => '7',
			'school_id' => '2',
			'age' =>'14',
			'active' => '1'
		]);

		Student::create([
			'username' => 'WFord',
			'firstname' => 'Willard',
			'lastname' => 'Ford',
			'password' => Hash::make('1234'),
			'grade_id' => '6',
			'school_id' => '2',
			'age' =>'13',
			'active' => '1'
		]);

	}

}
