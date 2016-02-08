<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 1/2/2016
 * Time: 12:45 PM
 */

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(
            array(
                'username' => 'user',
                'email' => 'admin@mailservice.com',
                'password' => Hash::make('user'),
            )
        );
    }
}