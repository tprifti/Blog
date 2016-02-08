<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/2/2016
 * Time: 4:28 PM
 */


class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert(
            array(
                'username' => 'admin',
                'email' => 'admin@mailservice.com',
                'password' => Hash::make('admin'),
            )
        );
    }
}