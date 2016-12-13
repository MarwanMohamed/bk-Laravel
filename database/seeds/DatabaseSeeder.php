<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        App\User::insert(['name'=> 'Marwan', 'email' => 'maro@m.com', 'password' => bcrypt('maro')]);
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
