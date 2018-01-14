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
        //reset the user table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 users author
        DB::table('users')->insert([
            [
                'name' => 'Muhammad Hilmy',
                'email' => 'hilmybatara@gmail.com',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Syipa Fauziah',
                'email' => '1406122@sttgarut.ac.id',
                'password' => bcrypt('secret')
            ],
            [
                'name' => 'Ganjar',
                'email' => 'ajp@gmail.com',
                'password' => bcrypt('secret')
            ],
        ]);
    }
}
