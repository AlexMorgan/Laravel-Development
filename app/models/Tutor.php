<?php

class Tutor extends Eloquent {

	// Mass Assignment
	// Define which attributes are mass assignable (for security)
	// We only want these two attributes able to be filled
	protected $fillable = array('name', 'mapp', 'papp', 'pav', 'actref', 'senint', 'vervis', 'seqglo');
	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tutors';	
}