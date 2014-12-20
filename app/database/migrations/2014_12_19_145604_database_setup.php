<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseSetup extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
        
		Schema::create('guitars', function(Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->float('price');
            $table->string('about');
            $table->string('caracteristics');
            $table->integer('year_body');
            $table->integer('year_neck');
            $table->integer('year_pickup');
            $table->integer('year_electronic');
            $table->integer('serial_number');
            $table->boolean('sold');
        });

		Schema::create('articles', function(Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('chapeau');
            $table->enum('type', array(
            	'rencontres_stars',
            	'events',
            	'actu',
            	'reference',
            	'guitariste_exception'
            ));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('guitars');
		Schema::drop('articles');
	}

}
