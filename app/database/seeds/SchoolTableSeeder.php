<?php 

use Faker\Factory as Faker;

class SchoolTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		Eloquent::unguard();

		$faker = Faker::create();

		// $this->call('UserTableSeeder'); 

		Schools::create([
			'name' => 'Bridge Valley',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2008-01-01'
		]);

		Schools::create([
			'name' => 'Groveland',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2008-01-01'
		]);

		Schools::create([
			'name' => 'Linden',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2008-01-01'
		]);

		Schools::create([
			'name' => 'Our Lady of Mt. Carmel',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2008-01-01'
		]);

		Schools::create([
			'name' => 'Simon Butler',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2009-01-01'
		]);

		Schools::create([
			'name' => 'Warwick',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2009-01-01'
		]);

		Schools::create([
			'name' => 'Buckingham',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2010-01-01'
		]);

		Schools::create([
			'name' => 'Cold Spring',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2010-01-01'
		]);

		Schools::create([
			'name' => 'Doyle',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2010-01-01'
		]);

		Schools::create([
			'name' => 'Jamison',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2010-01-01'
		]);

		Schools::create([
			'name' => 'Paul W. Kutz',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2010-01-01'
		]);

		Schools::create([
			'name' => 'Richboro',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2011-01-01'
		]);

		Schools::create([
			'name' => 'St. Katharine of Siena',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2011-01-01'
		]);

		Schools::create([
			'name' => 'Colonial Elementary',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2012-01-01'
		]);

		Schools::create([
			'name' => 'Pine Run',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2012-01-01'
		]);

		Schools::create([
			'name' => 'Pine Road',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2012-01-01'
		]);

		Schools::create([
			'name' => 'Radnor Elementary',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2012-01-01'
		]);

		Schools::create([
			'name' => 'Shady Grove',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2012-01-01'
		]);

		Schools::create([
			'name' => 'Colonial Middle School',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Frenchtown Elementary',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Gayman',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Hillcrest',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Rober hunter Elementary',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Titus',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Wayne',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2013-01-01'
		]);

		Schools::create([
			'name' => 'Plumstead Christian',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2014-01-01'
		]);

		Schools::create([
			'name' => 'Franklin Township',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2014-01-01'
		]);

		Schools::create([
			'name' => 'Seylar Elementary',
			'bio' => $faker->text,
			'address' => $faker->streetAddress,
			'town' => $faker->city,
			'state' => $faker->state,
			'zip' => $faker->postcode,
			'year_joined' => '2014-01-01'
		]);

	}
}
