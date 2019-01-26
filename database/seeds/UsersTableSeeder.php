<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user1 = [
          'name'=>'Daniel Ngungath',
          'email'=>'daniel2ngungath@gmail.com',
          'password'=>bcrypt('ericky123'),
    	];

    		$user2 = [
          'name'=>'Ayubu Sukurieti',
          'email'=>'ayubu@gmail.com',
          'password'=>bcrypt('ayubu123'),
    	];

    	User::create($user1);
    	User::create($user2);
        

        
    }
}
