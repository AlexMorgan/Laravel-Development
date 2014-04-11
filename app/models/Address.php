<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Address extends Eloquent implements UserInterface, RemindableInterface {

	// Each address belongs to a user
	public function users() {
		return $this->belongsTo('User');
	}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'addresses';
}