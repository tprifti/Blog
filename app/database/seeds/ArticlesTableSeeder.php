<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 1/2/2016
 * Time: 12:46 PM
 */
class ArticlesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('articles')->delete();
        Article::create(array(
            'title' => 'Robots helped inspire deep learning might become.',
            'slug' => 'Robots-helped-inspire-deep-learning-might-become',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum imperdiet nisi, feugiat facilisis ex pretium a. Nulla nec justo ipsum. In hac habitasse platea dictumst. Nunc eu tortor vitae diam sodales ultrices. Quisque sed elit et mauris vulputate rhoncus. Nam erat eros, vehicula sed nunc at, aliquet finibus magna. Duis suscipit odio vitae vulputate bibendum. Phasellus non neque quis odio congue mattis. Duis ullamcorper arcu magna, sit amet pretium urna pretium eget. Duis lectus leo, auctor id euismod commodo, ultrices vitae orci. Sed sit amet massa eget sem suscipit dictum placerat in magna. Integer ut nibh mauris. Maecenas turpis quam, vehicula sit amet sagittis eu, egestas non justo. Maecenas magna massa, tristique vel sagittis et, aliquam non nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                       Vestibulum et nisl porttitor, auctor magna non, vestibulum ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor luctus, accumsan enim id, condimentum eros. Aliquam sed convallis lacus. Vestibulum in venenatis est, vitae tempor libero. In porttitor nulla nec mi sagittis fermentum. Curabitur erat lacus, aliquam at vulputate facilisis, egestas nec dui. Nullam ac lorem ipsum. Curabitur ac libero sed turpis rutrum tempus ac faucibus leo.
                       Phasellus ac aliquam turpis. Fusce vestibulum eleifend varius. Nunc pharetra posuere elit, eu convallis eros condimentum sed. Pellentesque orci sapien, semper sed dolor ac, euismod pellentesque velit. Duis blandit purus ac odio mattis sollicitudin. Suspendisse tortor nisl, euismod at nulla et, ullamcorper dignissim eros. Vivamus a vestibulum risus.',
            'admin_id' => DB::table('admins')->select('id')->where('username', 'admin')->first()->id,
            'category_id'=> DB::table('categories')->select('id')->where('category', 'Programming')->first()->id,

        ));

        Article::create(array(
            'title' => 'Man agrees to complete $50,000 Hereford Inlet Lighthouse paint job.',
            'slug' => 'Man-agrees-to-complete-$50,000-Hereford-Inlet-Lighthouse-paint-job',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum imperdiet nisi, feugiat facilisis ex pretium a. Nulla nec justo ipsum. In hac habitasse platea dictumst. Nunc eu tortor vitae diam sodales ultrices. Quisque sed elit et mauris vulputate rhoncus. Nam erat eros, vehicula sed nunc at, aliquet finibus magna. Duis suscipit odio vitae vulputate bibendum. Phasellus non neque quis odio congue mattis. Duis ullamcorper arcu magna, sit amet pretium urna pretium eget. Duis lectus leo, auctor id euismod commodo, ultrices vitae orci. Sed sit amet massa eget sem suscipit dictum placerat in magna. Integer ut nibh mauris. Maecenas turpis quam, vehicula sit amet sagittis eu, egestas non justo. Maecenas magna massa, tristique vel sagittis et, aliquam non nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                       Vestibulum et nisl porttitor, auctor magna non, vestibulum ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor luctus, accumsan enim id, condimentum eros. Aliquam sed convallis lacus. Vestibulum in venenatis est, vitae tempor libero. In porttitor nulla nec mi sagittis fermentum. Curabitur erat lacus, aliquam at vulputate facilisis, egestas nec dui. Nullam ac lorem ipsum. Curabitur ac libero sed turpis rutrum tempus ac faucibus leo.
                       Phasellus ac aliquam turpis. Fusce vestibulum eleifend varius. Nunc pharetra posuere elit, eu convallis eros condimentum sed. Pellentesque orci sapien, semper sed dolor ac, euismod pellentesque velit. Duis blandit purus ac odio mattis sollicitudin. Suspendisse tortor nisl, euismod at nulla et, ullamcorper dignissim eros. Vivamus a vestibulum risus.',
            'admin_id' => DB::table('admins')->select('id')->where('username', 'admin')->first()->id,
            'category_id' => DB::table('categories')->select('id')->where('category', 'Programming')->first()->id,

        ));

        Article::create(array(
            'title' => 'Microsoft Subsumes Open Tech Unit Back Inside Mothership.',
            'slug' => 'Microsoft-Subsumes-Open-Tech-Unit-Back-Inside-Mothership',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum imperdiet nisi, feugiat facilisis ex pretium a. Nulla nec justo ipsum. In hac habitasse platea dictumst. Nunc eu tortor vitae diam sodales ultrices. Quisque sed elit et mauris vulputate rhoncus. Nam erat eros, vehicula sed nunc at, aliquet finibus magna. Duis suscipit odio vitae vulputate bibendum. Phasellus non neque quis odio congue mattis. Duis ullamcorper arcu magna, sit amet pretium urna pretium eget. Duis lectus leo, auctor id euismod commodo, ultrices vitae orci. Sed sit amet massa eget sem suscipit dictum placerat in magna. Integer ut nibh mauris. Maecenas turpis quam, vehicula sit amet sagittis eu, egestas non justo. Maecenas magna massa, tristique vel sagittis et, aliquam non nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                       Vestibulum et nisl porttitor, auctor magna non, vestibulum ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor luctus, accumsan enim id, condimentum eros. Aliquam sed convallis lacus. Vestibulum in venenatis est, vitae tempor libero. In porttitor nulla nec mi sagittis fermentum. Curabitur erat lacus, aliquam at vulputate facilisis, egestas nec dui. Nullam ac lorem ipsum. Curabitur ac libero sed turpis rutrum tempus ac faucibus leo.
                       Phasellus ac aliquam turpis. Fusce vestibulum eleifend varius. Nunc pharetra posuere elit, eu convallis eros condimentum sed. Pellentesque orci sapien, semper sed dolor ac, euismod pellentesque velit. Duis blandit purus ac odio mattis sollicitudin. Suspendisse tortor nisl, euismod at nulla et, ullamcorper dignissim eros. Vivamus a vestibulum risus.',
            'admin_id' => DB::table('admins')->select('id')->where('username', 'admin')->first()->id,
            'category_id' => DB::table('categories')->select('id')->where('category', 'Programming')->first()->id,

        ));

        Article::create(array(
            'title' => 'Five things you may have missed over the weekend from the i dont know.',
            'slug' => 'Five-things-you-may-have-missed-over-the-weekend-from-the-i-dont-know',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum imperdiet nisi, feugiat facilisis ex pretium a. Nulla nec justo ipsum. In hac habitasse platea dictumst. Nunc eu tortor vitae diam sodales ultrices. Quisque sed elit et mauris vulputate rhoncus. Nam erat eros, vehicula sed nunc at, aliquet finibus magna. Duis suscipit odio vitae vulputate bibendum. Phasellus non neque quis odio congue mattis. Duis ullamcorper arcu magna, sit amet pretium urna pretium eget. Duis lectus leo, auctor id euismod commodo, ultrices vitae orci. Sed sit amet massa eget sem suscipit dictum placerat in magna. Integer ut nibh mauris. Maecenas turpis quam, vehicula sit amet sagittis eu, egestas non justo. Maecenas magna massa, tristique vel sagittis et, aliquam non nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                       Vestibulum et nisl porttitor, auctor magna non, vestibulum ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor luctus, accumsan enim id, condimentum eros. Aliquam sed convallis lacus. Vestibulum in venenatis est, vitae tempor libero. In porttitor nulla nec mi sagittis fermentum. Curabitur erat lacus, aliquam at vulputate facilisis, egestas nec dui. Nullam ac lorem ipsum. Curabitur ac libero sed turpis rutrum tempus ac faucibus leo.
                       Phasellus ac aliquam turpis. Fusce vestibulum eleifend varius. Nunc pharetra posuere elit, eu convallis eros condimentum sed. Pellentesque orci sapien, semper sed dolor ac, euismod pellentesque velit. Duis blandit purus ac odio mattis sollicitudin. Suspendisse tortor nisl, euismod at nulla et, ullamcorper dignissim eros. Vivamus a vestibulum risus.',
            'admin_id' => DB::table('admins')->select('id')->where('username', 'admin')->first()->id,
            'category_id' => DB::table('categories')->select('id')->where('category', 'Operating Systems')->first()->id,

        ));

        Article::create(array(
            'title' => 'Announcing a specification for PHP.',
            'slug' => 'Announcing-a-specification-for-PHP',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum imperdiet nisi, feugiat facilisis ex pretium a. Nulla nec justo ipsum. In hac habitasse platea dictumst. Nunc eu tortor vitae diam sodales ultrices. Quisque sed elit et mauris vulputate rhoncus. Nam erat eros, vehicula sed nunc at, aliquet finibus magna. Duis suscipit odio vitae vulputate bibendum. Phasellus non neque quis odio congue mattis. Duis ullamcorper arcu magna, sit amet pretium urna pretium eget. Duis lectus leo, auctor id euismod commodo, ultrices vitae orci. Sed sit amet massa eget sem suscipit dictum placerat in magna. Integer ut nibh mauris. Maecenas turpis quam, vehicula sit amet sagittis eu, egestas non justo. Maecenas magna massa, tristique vel sagittis et, aliquam non nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                       Vestibulum et nisl porttitor, auctor magna non, vestibulum ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor luctus, accumsan enim id, condimentum eros. Aliquam sed convallis lacus. Vestibulum in venenatis est, vitae tempor libero. In porttitor nulla nec mi sagittis fermentum. Curabitur erat lacus, aliquam at vulputate facilisis, egestas nec dui. Nullam ac lorem ipsum. Curabitur ac libero sed turpis rutrum tempus ac faucibus leo.
                       Phasellus ac aliquam turpis. Fusce vestibulum eleifend varius. Nunc pharetra posuere elit, eu convallis eros condimentum sed. Pellentesque orci sapien, semper sed dolor ac, euismod pellentesque velit. Duis blandit purus ac odio mattis sollicitudin. Suspendisse tortor nisl, euismod at nulla et, ullamcorper dignissim eros. Vivamus a vestibulum risus.',
            'admin_id' => DB::table('admins')->select('id')->where('username', 'admin')->first()->id,
            'category_id' => DB::table('categories')->select('id')->where('category', 'Programming')->first()->id,

        ));
    }

}