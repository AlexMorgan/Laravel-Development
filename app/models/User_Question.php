<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User_Question extends Eloquent implements UserInterface, RemindableInterface {

	// A response belongs to a user
	public function users() {
		return $this->belongsTo('User');
	}

	// A response belongs to a question
	public function questions() {
		return $this->belongsTo('Question');
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_questions';
}