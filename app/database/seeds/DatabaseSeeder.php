<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('GradeTableSeeder');
		$this->call('SchoolTableSeeder');	
		$this->call('StudentTableSeeder');
		$this->call('ParentTableSeeder');
		$this->call('MileageTableSeeder');
		$this->call('GooddeedsTableSeeder');
		$this->call('SchoolReportTableSeeder');
		$this->call('SchoolSchoolReportsTableSeeder');
		$this->call('StudentGoodDeedsTableSeeder');
		$this->call('MileageStudentTableSeeder');
		$this->call('ParentStudentTableSeeder');
		$this->call('DirectorTableSeeder');

	}

}
