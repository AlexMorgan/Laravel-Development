<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('name');
			$table->string('response_values1');
			$table->string('response_values2');
			$table->string('response_values3');
			$table->string('response_values4');
			$table->string('response_values5');
			$table->string('response_values6');
			$table->string('response_values7');
			$table->integer('response_values8');
			$table->integer('response_values9');
			$table->integer('response_values10');
			$table->integer('response_values11');
			$table->integer('response_values12');
			$table->integer('response_values13');
			$table->integer('response_values14');
			$table->integer('response_values15');
			$table->integer('response_values16');
			$table->integer('response_values17');
			$table->integer('response_values18');
			$table->integer('response_values19');
			$table->integer('response_values20');
			$table->integer('response_values21');
			$table->integer('response_values22');
			$table->integer('response_values23');
			$table->integer('response_values24');
			$table->integer('response_values25');
			$table->integer('response_values26');
			$table->integer('response_values27');
			$table->integer('response_values28');
			$table->integer('response_values29');
			$table->integer('response_values30');
			$table->integer('response_values31');
			$table->integer('response_values32');
			$table->integer('response_values33');
			$table->integer('response_values34');
			$table->integer('response_values35');
			$table->integer('response_values36');
			$table->integer('response_values37');
			$table->integer('response_values38');
			$table->integer('response_values39');
			$table->integer('response_values40');
			$table->integer('response_values41');
			$table->integer('response_values42');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

	public function down()
	{
		Schema::drop('answers');
	}

}