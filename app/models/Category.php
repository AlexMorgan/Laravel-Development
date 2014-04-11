<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Category extends Eloquent implements UserInterface, RemindableInterface {

	// Each category has many questions
	public function questions() {
		return $this->hasMany('Question');
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';
}