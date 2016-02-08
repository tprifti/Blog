<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 1/2/2016
 * Time: 12:46 PM
 */

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();
        Category::create(array(
            'category' => 'Operating Systems',
        ));
        Category::create(array(
            'category' => 'Programming',
        ));
        Category::create(array(
            'category' => '3rd CATEGORY',
        ));
        Category::create(array(
            'category' => '4th CATEGORY',
        ));
        Category::create(array(
            'category' => '5TH CATEGORY',
        ));

    }

}
