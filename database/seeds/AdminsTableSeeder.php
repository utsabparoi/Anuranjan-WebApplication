<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(array(
        	array(
		 'name' => "Utsab",
		 'email' => 'utsab123@gmail.com',
		 'password' => bcrypt('test1234'),
		        	),
		        	array(
		 'name' => "Paroi",
		 'email' => 'paroi007@gmail.com',
		 'password' => bcrypt('test1234'),
		        	)
		));
    }
}
