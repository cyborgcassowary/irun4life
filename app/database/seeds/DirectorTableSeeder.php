<?php

/**
 * Run the database seeds.
 *
 * @return void
 */

class DirectorTableSeeder extends Seeder {

	public function run()
	{
//		Eloquent::unguard();

		DB::table('schooldirectors')->truncate();

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'ryan@ryanhettler.com', 'Ryan', 'Hettler', Hash::make('redhead22'), 1));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'info@cyborgcassowary.com', 'Cyborg', 'Cassowary', Hash::make('redhead22'), 2));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'intell@cyborgcassowary.com', 'Intell', 'Cassowary', Hash::make('redhead22'), 3));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'install@cyborgcassowary.com', 'Install', 'Cassowary', Hash::make('redhead22'), 4));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'vegan@cyborgcassowary.com', 'Vegan', 'Cassowary', Hash::make('redhead22'), 5));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'vegetable@cyborgcassowary.com', 'Vegetable', 'Cassowary', Hash::make('redhead22'), 6));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'death@cyborgcassowary.com', 'Death', 'Cassowary', Hash::make('redhead22'), 7));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'stone@cyborgcassowary.com', 'Stone', 'Cassowary', Hash::make('redhead22'), 8));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'kingqueen@cyborgcassowary.com', 'KingQueen', 'Cassowary', Hash::make('redhead22'), 9));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'N@cyborgcassowary.com', 'N', 'Cassowary', Hash::make('redhead22'), 10));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'lasttime@cyborgcassowary.com', 'LastTime', 'Cassowary', Hash::make('redhead22'), 11));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'school@cyborgcassowary.com', 'School', 'Cassowary', Hash::make('redhead22'), 12));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'boo@cyborgcassowary.com', 'Boo', 'Cassowary', Hash::make('redhead22'), 13));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'goo@cyborgcassowary.com', 'Goo', 'Cassowary', Hash::make('redhead22'), 14));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'foo@cyborgcassowary.com', 'Foo', 'Cassowary', Hash::make('redhead22'), 15));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'bar@cyborgcassowary.com', 'Bar', 'Cassowary', Hash::make('redhead22'), 16));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'luffy@cyborgcassowary.com', 'Luffy', 'Cassowary', Hash::make('redhead22'), 17));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'hulu@cyborgcassowary.com', 'Hulu', 'Cassowary', Hash::make('redhead22'), 18));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'yoohoo@cyborgcassowary.com', 'Yoohoo', 'Cassowary', Hash::make('redhead22'), 19));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'yoo@cyborgcassowary.com', 'Yoo', 'Cassowary', Hash::make('redhead22'), 20));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'hoo@cyborgcassowary.com', 'Hoo', 'Cassowary', Hash::make('redhead22'), 21));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'doo@cyborgcassowary.com', 'Doo', 'Cassowary', Hash::make('redhead22'), 22));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'joo@cyborgcassowary.com', 'Joo', 'Cassowary', Hash::make('redhead22'), 23));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'Qoo@cyborgcassowary.com', 'Qoo', 'Cassowary', Hash::make('redhead22'), 24));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'go@cyborgcassowary.com', 'Go', 'Cassowary', Hash::make('redhead22'), 25));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'yo@cyborgcassowary.com', 'Yo', 'Cassowary', Hash::make('redhead22'), 26));

		DB::insert('insert into schooldirectors (email, firstname, lastname, password, school) values (?, ?, ?, ?, ?)', array( 'moo@cyborgcassowary.com', 'Moo', 'Cassowary', Hash::make('redhead22'), 27));


//		Directors::create([
//			//'email' => 'ryan@ryanhettler.net',
//			'firstname' => 'Harrison',
//			'lastname' => 'Ford',
//			'password' => Hash::make('2222'),
//			'school' => '1'
//		]);

	}
}