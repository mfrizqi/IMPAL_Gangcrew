<?php

use Illuminate\Database\Seeder;

use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory('App\User')->make();
        User::insert([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'alamat' => 'apartemen aladin',
            'umur' => 44,   
            'role' => 1,
            'no_tlp' => '0812912286731',
            'gaji' => NULL,
            'created_at'=>Carbon::now()
            
        ]);
    }
}
