<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTutorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutors', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('mapp');
			$table->integer('papp');
			$table->integer('pav');
			$table->integer('actref');
			$table->integer('senint');
			$table->integer('vervis');
			$table->integer('seqglo');
			$table->integer('total_score');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

	public function down()
	{
		Schema::drop('tutors');
	}

}