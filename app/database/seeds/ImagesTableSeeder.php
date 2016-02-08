<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 1/2/2016
 * Time: 12:46 PM
 */
class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->delete();
        DB::table('images')->insert(
            array(
                array(
                    'image' => 'images/seed_images/robot.jpg',
                    'article_id' => DB::table('articles')->select('id')->where('title', 'Robots helped inspire deep learning might become.')->first()->id,
                ),
                array(
                    'image' => 'images/seed_images/money.jpg',
                    'article_id' => DB::table('articles')->select('id')->where('title', 'Man agrees to complete $50,000 Hereford Inlet Lighthouse paint job.')->first()->id,
                ),
                array(
                    'image' => 'images/seed_images/microsoft.png',
                    'article_id' => DB::table('articles')->select('id')->where('title', 'Microsoft Subsumes Open Tech Unit Back Inside Mothership.')->first()->id,
                ),
                array(
                    'image' => 'images/seed_images/five_things.jpg',
                    'article_id' => DB::table('articles')->select('id')->where('title', 'Five things you may have missed over the weekend from the i dont know.')->first()->id,
                ),
                array(
                    'image' => 'images/seed_images/php.jpg',
                    'article_id' => DB::table('articles')->select('id')->where('title', 'Announcing a specification for PHP.')->first()->id,
                ),
            )
        );
    }
}