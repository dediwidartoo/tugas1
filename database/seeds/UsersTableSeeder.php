<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
    		'name' => 'admin',
	        'email' => 'admin@admin.com',
	        'password' => bcrypt('admin'),
	        'api_token'=>str_random(18),
	        'is_admin'=>true,
	        'remember_token' => str_random(10),
    	];
    	DB::table('users')->insert($users);
    	
        factory(App\User::class,50)->create();
    }
}
