<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	    $admin = DB::table('users')->insert([
			'username'   => 'username',                 //default username	
			'email'      => 'username@domain.com',     //default email
			'password'   => Hash::make('123456'),      //default password
			'name' => 'Admin Full Name',
			'phone'  => '+880-1722-000000',
			'image'  => '',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
		]);
    }
}
