<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User_Group extends Eloquent implements UserInterface, RemindableInterface {

	// A group belongs to a user
	public function users() {
		return $this->belongsTo('User');
	}

	// Each group belongs to a group type
	public function groups() {
		return $this->belongsTo('Group');
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_groups';
}