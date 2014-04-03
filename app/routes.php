<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*--------------- Routes for Login Registration Page - http://l4.tutorscout.com/ ----------------*/

/*----- Route for the home page -----*/
Route::get('/', 'HomeController@getIndex');
/*----- Route for the login page -----*/
Route::get('login', 'HomeController@getLogin');
/*----- Route for the register page -----*/
Route::get('register', 'HomeController@getRegister');

Route::get('logout', 'HomeController@logout');

Route::get('team', 'HomeController@getTeam');

Route::get('about', 'HomeController@getAbout');

/*----- Route for the register|POST method page -----*/
Route::post('register', 'HomeController@postRegister');
Route::post('login', 'HomeController@postLogin');
// Route::post('/' , 'HomeController@postSignup');

/*Creates a group filter*/
Route::group(array('before' => 'auth'), function(){

	Route::get('admin', 'AdminController@getIndex');
	
});


//Website for all the files for this tutorial!
//https://github.com/fallendown/Laravel-4-login-registration/blob/master/app/routes.php




/*--------------Code from previous Tuts---------------------*/
// //First we call the 'route' class, the 'get' method of the class,
// //We pass in the root-view with the '/', and then we execute a callback function
// //That function is to return the class 'View' with the method of 'make' which calls the view
// //In this case 'hello'
// Route::get('/', function()
// {
// 	return View::make('hello');
// });


// //Here we created a view, and then we return it using line 22
// Route::get('users', function()
// {
// 	//The all method below on the user model retrieves all the rows in the users table
// 	//Then we pass the records to the view via the 'with' method 
// 	//The 'with' method accepts a key ('users') and a value ('$users') which is used to make a piece of data viewable
// 	$users = User::all();

// 	return View::make('users')->with('users',$users);
// });


// //Different Route Classes:
// 	//Route::post - posts information
// 	//Route::put - updates information
// 	//Route::destroy - deletes information




