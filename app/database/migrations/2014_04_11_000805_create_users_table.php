<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

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
			$table->string('email');
			$table->string('password');
			$table->boolean('gender');
			$table->date('dob');
			$table->string('ethnicity');
			$table->date('grad_date');
			$table->bigInteger('zip');
			$table->boolean('confirmed');
			$table->smallInteger('distance');
			$table->double('papp');
			$table->double('mapp');
			$table->double('pav');
			$table->double('actref');
			$table->double('senint');
			$table->double('vervis');
			$table->double('seqglo');
			$table->integer('pp_progress');
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
		Schema::drop('users');
	}

}