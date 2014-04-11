<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/*
	|public function showWelcome()
	|{
	|	return View::make('hello');
	|}
	*/

	public function getIndex()
		{
            return View::make('home.index');
        }

    public function postNewContact()
        {
            $data = Input::all();

            $rules = array('email' => 'required|unique:contacts|email');

            $validation = Validator::make($data, $rules);

            if($validation->passes())
            {   
                $newContact = new Contact();
                $newContact->email = $data['email'];
                $newContact->save();

                return Redirect::to('/');

            } else {
                return Redirect::to('/')->withInput()->withErrors($validation);
            }

        }

    public function getTeam()
        {
            return View::make('home.team');
        }


    public function getAbout()
        {
            return View::make('home.about');
        }


   	/*This is the controller that we created for the login page from the routes.php page*/
	public function getLogin()
    	{
    		return View::make('home.login');
    	}

    public function postLogin()
        {
            $input = Input::all();

            $rules = array('email' => 'required', 'password' => 'required');

            $v = Validator::make($input, $rules);

            if($v->fails())
                {

                    //We are redirecting our user to the /login page and returning the validation messages 
                    return Redirect::to('login')->withErrors($v)->withInput();

                } else {
                    //Creating the variable credentials to makes sure that the email entered matches the email entered when 
                    //user registered for TutorScout ($input)
                    $credentials = array('email' => $input['email'], 'password' => $input['password']);

                    if(Auth::attempt($credentials))
                        {

                            return Redirect::to('survey');

                        } else {
                            //If the login attempt has incorrect values that don't match credentials we wil redirect our 
                            return Redirect::to('login');
                        }
                }

        }


    public function getRegister()
    	{
    		return View::make('home.register');
    	}

    public function postRegister()
    	{
    		/*Here we are going to grab all the input and put it into a variable called $input*/
    		$input = Input::all();
    		/*Here we are making the username, email and passwords required as well as make the email and username unique!*/
    		$rules = array(
                'username' => 'required|unique:users', 
                'email' => 'required|unique:users|email', 
                'password' => 'required|min:6', 
                'password_confirmation' => 'required|same:password'
                );

    		$v = Validator::make($input, $rules);

    		if($v->passes())
    		{
    			$password = $input['password'];
    			/*This will hash our passwords when we make them*/
    			$password = Hash::make($password);

    			/*Creates a new user object*/
    			$user = new User();
    			$user->username = $input['username'];
    			$user->email = $input['email'];
    			$user->password = $password;
    			$user->save();


                //This will send the user an email which we created in our views/emails/welcome.blade.php fileS 
                Mail::send('emails.welcome', $input, function($message)
                {
                    $message->to(Input::get('email'), 'username')->subject('Welcome!');
                });


    			/*This will redirect our users to the login - IF it passes*/
    			return Redirect::to('login');

    		} else {
    			/*Otherwise it will redirect the user back to the Register page - IF it doesn't pass`
    			When it redirects back to the register page it will keep input from previous trial as well as return the errors from our Validator '$v'*/
    			return Redirect::to('register')->withInput()->withErrors($v);
    		}
    	}


    // public function postSignup()
    //     {
    //         $input = Input::all();

    //         $signuprules = array(
    //             'email' => 'required|unique:users|email'

    //             $v = Validator::make($input, $signuprules)
    //             );
    //     }


    public function logout()
        {
            Auth::logout();
            return Redirect::to('/');
        }



    public function getResults()
        {
            $results = Answer::all();

            // Mastery Approach Calculations - Survey Questions 8-12
            $mapp1 = DB::table('answers')->sum('response_values8');
            $mapp2 = DB::table('answers')->sum('response_values9');
            $mapp3 = DB::table('answers')->sum('response_values10');
            $mapp4 = DB::table('answers')->sum('response_values11');
            $mapp5 = DB::table('answers')->sum('response_values12');

            // Performance Approach Calculations - Survey Questions 13-17
            $papp1 = DB::table('answers')->sum('response_values13');
            $papp2 = DB::table('answers')->sum('response_values14');
            $papp3 = DB::table('answers')->sum('response_values15');
            $papp4 = DB::table('answers')->sum('response_values16');
            $papp5 = DB::table('answers')->sum('response_values17');

            // Performance Avoidance Calculations - Survey Questions 18-22
            $pav1 = DB::table('answers')->sum('response_values18');
            $pav2 = DB::table('answers')->sum('response_values19');
            $pav3 = DB::table('answers')->sum('response_values20');
            $pav4 = DB::table('answers')->sum('response_values21');
            $pav5 = DB::table('answers')->sum('response_values22');

            // Active vs. Reflective Calculations - Survey Questions 23-27
            $actref1 = DB::table('answers')->sum('response_values23');
            $actref2 = DB::table('answers')->sum('response_values24');
            $actref3 = DB::table('answers')->sum('response_values25');
            $actref4 = DB::table('answers')->sum('response_values26');
            $actref5 = DB::table('answers')->sum('response_values27');

            // Sensing vs. Intuitive Calculations - Survey Questions 28-32
            $senint1 = DB::table('answers')->sum('response_values28');
            $senint2 = DB::table('answers')->sum('response_values29');
            $senint3 = DB::table('answers')->sum('response_values30');
            $senint4 = DB::table('answers')->sum('response_values31');
            $senint5 = DB::table('answers')->sum('response_values32');

            // Verbal vs. Visual Calculations - Survey Questions 33-37
            $vervis1 = DB::table('answers')->sum('response_values33');
            $vervis2 = DB::table('answers')->sum('response_values34');
            $vervis3 = DB::table('answers')->sum('response_values35');
            $vervis4 = DB::table('answers')->sum('response_values36');
            $vervis5 = DB::table('answers')->sum('response_values37');

            // Sequential vs. Global Calculations - Survey Questions 38 - 42
            $seqglo1 = DB::table('answers')->sum('response_values38');
            $seqglo2 = DB::table('answers')->sum('response_values39');
            $seqglo3 = DB::table('answers')->sum('response_values40');
            $seqglo4 = DB::table('answers')->sum('response_values41');
            $seqglo5 = DB::table('answers')->sum('response_values42');

            $tutor1 = Tutor::where('id', '=', '1')->get();
            $tutor2 = Tutor::where('id', '=', '2')->get();
            $tutor3 = Tutor::where('id', '=', '3')->get();

            //$tutor1mapp   = DB::table('tutors')->where('mapp', '')->pluck('mapp');

            $tutor1mapp     = Tutor::where('id', '=', '1')->pluck('mapp');
            $tutor1papp     = Tutor::where('id', '=', '1')->pluck('papp');
            $tutor1pav      = Tutor::where('id', '=', '1')->pluck('pav');
            $tutor1actref   = Tutor::where('id', '=', '1')->pluck('actref');
            $tutor1senint   = Tutor::where('id', '=', '1')->pluck('senint');
            $tutor1vervis   = Tutor::where('id', '=', '1')->pluck('vervis');
            $tutor1seqglo   = Tutor::where('id', '=', '1')->pluck('seqglo');

            $tutor2mapp     = Tutor::where('id', '=', '2')->pluck('mapp');
            $tutor2papp     = Tutor::where('id', '=', '2')->pluck('papp');
            $tutor2pav      = Tutor::where('id', '=', '2')->pluck('pav');
            $tutor2actref   = Tutor::where('id', '=', '2')->pluck('actref');
            $tutor2senint   = Tutor::where('id', '=', '2')->pluck('senint');
            $tutor2vervis   = Tutor::where('id', '=', '2')->pluck('vervis');
            $tutor2seqglo   = Tutor::where('id', '=', '2')->pluck('seqglo');

            $tutor3mapp     = Tutor::where('id', '=', '3')->pluck('mapp');
            $tutor3papp     = Tutor::where('id', '=', '3')->pluck('papp');
            $tutor3pav      = Tutor::where('id', '=', '3')->pluck('pav');
            $tutor3actref   = Tutor::where('id', '=', '3')->pluck('actref');
            $tutor3senint   = Tutor::where('id', '=', '3')->pluck('senint');
            $tutor3vervis   = Tutor::where('id', '=', '3')->pluck('vervis');
            $tutor3seqglo   = Tutor::where('id', '=', '3')->pluck('seqglo');

            return View::make('survey.results')
                ->with('results', $results)
                ->with('mapp1', $mapp1)
                ->with('mapp2', $mapp2)
                ->with('mapp3', $mapp3)
                ->with('mapp4', $mapp4)
                ->with('mapp5', $mapp5)

                ->with('papp1', $papp1)
                ->with('papp2', $papp2)
                ->with('papp3', $papp3)
                ->with('papp4', $papp4)
                ->with('papp5', $papp5)

                ->with('pav1', $pav1)
                ->with('pav2', $pav2)
                ->with('pav3', $pav3)
                ->with('pav4', $pav4)
                ->with('pav5', $pav5)

                ->with('actref1', $actref1)
                ->with('actref2', $actref2)
                ->with('actref3', $actref3)
                ->with('actref4', $actref4)
                ->with('actref5', $actref5)

                ->with('senint1', $senint1)
                ->with('senint2', $senint2)
                ->with('senint3', $senint3)
                ->with('senint4', $senint4)
                ->with('senint5', $senint5)

                ->with('vervis1', $vervis1)
                ->with('vervis2', $vervis2)
                ->with('vervis3', $vervis3)
                ->with('vervis4', $vervis4)
                ->with('vervis5', $vervis5)

                ->with('seqglo1', $seqglo1)
                ->with('seqglo2', $seqglo2)
                ->with('seqglo3', $seqglo3)
                ->with('seqglo4', $seqglo4)
                ->with('seqglo5', $seqglo5)

                ->with('tutor1', $tutor1)
                ->with('tutor2', $tutor2)
                ->with('tutor3', $tutor3)

                ->with('tutor1mapp', $tutor1mapp)
                ->with('tutor1papp', $tutor1papp)
                ->with('tutor1pav', $tutor1pav)
                ->with('tutor1actref', $tutor1actref)
                ->with('tutor1senint', $tutor1senint)
                ->with('tutor1vervis', $tutor1vervis)
                ->with('tutor1seqglo', $tutor1seqglo)

                ->with('tutor2mapp', $tutor2mapp)
                ->with('tutor2papp', $tutor2papp)
                ->with('tutor2pav', $tutor2pav)
                ->with('tutor2actref', $tutor2actref)
                ->with('tutor2senint', $tutor2senint)
                ->with('tutor2vervis', $tutor2vervis)
                ->with('tutor2seqglo', $tutor2seqglo)

                ->with('tutor3mapp', $tutor3mapp)
                ->with('tutor3papp', $tutor3papp)
                ->with('tutor3pav', $tutor3pav)
                ->with('tutor3actref', $tutor3actref)
                ->with('tutor3senint', $tutor3senint)
                ->with('tutor3vervis', $tutor3vervis)
                ->with('tutor3seqglo', $tutor3seqglo);
        }

}