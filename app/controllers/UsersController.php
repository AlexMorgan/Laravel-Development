<?php

class UsersController extends \BaseController {

	public function getContact()
	{
		//The users.contact syntax is equivalent to users/contact (contact.blade.php within the users directory)
		return View::make('users.contact');
	}


	public function postContact()
	{
		//We create a variable called data and store all the input from our form 
		$data = Input::all();
		//Next we create a variable called rules and store the rules that we created in an array
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required'
		);

		//We created a new variable and use Laravel's Validator::make method to create a new instance of our validator 
		//The first parameter to this method ($data) is an array of data that will be validated 
		//The second parameter ($rules) is the set of rules that will be used to validate the data which is stored in the parameter preceeding int
		$validation = Validator::make($data, $rules);

		//We run a quick if statement
		if($validation->fails())
		{
			return Redirect::to('contact')->withErrors($validation)->withInput();
		}
			//If the validation passes:
			//We create a variable called $emailcontent and store the subject and message from our contact form i
			$emailcontent = array(
				'emailname' => $data['name'],
				'emailaddress' => $data['email'],
				'subject' => $data['subject'],
				'emailmessage' => $data['message']
			);

			//We used Laravel's Mail::send method to send emails 
			//The first parameter is our contactemail.blade.php HTML that we created in our views/emails folder 
			//The second parameter is our emailcontent which we created above 
			//The third parameter is a function that will send our email
			Mail::send('emails.contactemail', $emailcontent, function($message)
			{
				//Next we specify where the email is going and what the subjext of the email is going to be
				$message->to('alexmorgan.am@gmail.com', 'TutorScout Contact Form')->subject('Contact via Our Contact Form');
			});

			return Redirect::to('/');

	}

}