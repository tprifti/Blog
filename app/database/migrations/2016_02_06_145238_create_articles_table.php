<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table){
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->text('body');

			$table->integer('category_id')->unsigned();
			$table->integer('admin_id')->unsigned();

			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
