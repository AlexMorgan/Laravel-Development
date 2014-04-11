<?php

class Answer extends Eloquent {

	// Mass Assignment
	// Define which attributes are mass assignable (for security)
	// We only want these two attributes able to be filled
	//protected $fillable = array('question_text', 'type_id', 'response_values');
	//public $timestamps = false;

	// Each question has many responses
	//public function user_questions() {
	//	return $this->hasMany('User_Question');
	//}

	// Each question belongs to a question category
	//public function categories() {
	//	return $this->belongsTo('Category');
	//}

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'answers';
	public $timestamps = false;

	
}