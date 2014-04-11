<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Group extends Eloquent implements UserInterface, RemindableInterface {

	// Each group has many users
	public function user_groups() {
		return $this->hasMany('User_Group');
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'groups';
}