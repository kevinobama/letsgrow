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
        //
        DB::table('users')->insert([
            'name' => 'kevingates',
            'email' => 'kevinobamatheus@gmail.com',
            'password' => bcrypt('kevin'),
        ]);
    }
}
