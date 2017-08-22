<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
        	'name' => 'Diones Diego',
        	'email' => 'ddas1507@gmail.com',
        	'password' => bcrypt('2708')
    	]);
    }
}
