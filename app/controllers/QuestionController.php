<?php

class QuestionController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
		{
			/************************************************************
			 * Personal Information Questions
			 * Query the question table where the type_id corresponds to 
			 * the appropriate question you wish to return
			 ***********************************************************/
			$pi0 = Question::where('type_id', '=', '43')->get();
			$pi1 = Question::where('type_id', '=', '1')->get();
			$pi2 = Question::where('type_id', '=', '2')->get();
			$pi3 = Question::where('type_id', '=', '3')->get();
			$pi4 = Question::where('type_id', '=', '4')->get();
			$pi5 = Question::where('type_id', '=', '5')->get();
			$pi6 = Question::where('type_id', '=', '6')->get();
			$pi7 = Question::where('type_id', '=', '7')->get();

			/*************************************************************
			 * Motivational Constraint Questions:  Mastery Approach
			 * Query the question table where type_id: 10 corresponds with 
			 * mastery approach questions
			 *************************************************************/
			$mapp_question1 = Question::where('type_id', '=', '8')->get();
			$mapp_question2 = Question::where('type_id', '=', '9')->get();
			$mapp_question3 = Question::where('type_id', '=', '10')->get();
			$mapp_question4 = Question::where('type_id', '=', '11')->get();
			$mapp_question5 = Question::where('type_id', '=', '12')->get();

			/*************************************************************
			 * Motivational Constraint Questions:  Performance Approach
			 * Query the question table where type_id: 15 corresponds with 
			 * performance approach questions
			 *************************************************************/
			$papp_question1 = Question::where('type_id', '=', '13')->get();
			$papp_question2 = Question::where('type_id', '=', '14')->get();
			$papp_question3 = Question::where('type_id', '=', '15')->get();
			$papp_question4 = Question::where('type_id', '=', '16')->get();
			$papp_question5 = Question::where('type_id', '=', '17')->get();

			/*************************************************************
			 * Motivational Constraint Questions:  Performance Avoidance
			 * Query the question table where type_id: 20 corresponds with 
			 * performance avoidance questions
			 *************************************************************/
			$pav_question1 = Question::where('type_id', '=', '18')->get();
			$pav_question2 = Question::where('type_id', '=', '19')->get();
			$pav_question3 = Question::where('type_id', '=', '20')->get();
			$pav_question4 = Question::where('type_id', '=', '21')->get();
			$pav_question5 = Question::where('type_id', '=', '22')->get();

			/*************************************************************
			 * Learning Style Constraint Questions:  Active vs Reflective
			 * Query the question table where type_id: 21-25 corresponds  
			 * with the five active vs. reflective questions
			 *************************************************************/
			$actref_question1 = Question::where('type_id', '=', '23')->get();
			$actref_question2 = Question::where('type_id', '=', '24')->get();
			$actref_question3 = Question::where('type_id', '=', '25')->get();
			$actref_question4 = Question::where('type_id', '=', '26')->get();
			$actref_question5 = Question::where('type_id', '=', '27')->get();

			/*************************************************************
			 * Learning Style Constraint Questions:  Sensing vs Intuitive
			 * Query the question table where type_id: 26-30 corresponds  
			 * with the five sensing vs. intuitive questions
			 *************************************************************/
			$senint_question1 = Question::where('type_id', '=', '28')->get();
			$senint_question2 = Question::where('type_id', '=', '29')->get();
			$senint_question3 = Question::where('type_id', '=', '30')->get();
			$senint_question4 = Question::where('type_id', '=', '31')->get();
			$senint_question5 = Question::where('type_id', '=', '32')->get();

			/*************************************************************
			 * Learning Style Constraint Questions:  Verbal vs Visual
			 * Query the question table where type_id: 31-35 corresponds  
			 * with the five verbal vs. visual questions
			 *************************************************************/
			$vervis_question1 = Question::where('type_id', '=', '33')->get();
			$vervis_question2 = Question::where('type_id', '=', '34')->get();
			$vervis_question3 = Question::where('type_id', '=', '35')->get();
			$vervis_question4 = Question::where('type_id', '=', '36')->get();
			$vervis_question5 = Question::where('type_id', '=', '37')->get();

			/*************************************************************
			 * Learning Style Constraint Questions:  Sequential vs Global
			 * Query the question table where type_id: 36-40 corresponds  
			 * with the five sequential vs. global questions
			 *************************************************************/
			$seqglo_question1 = Question::where('type_id', '=', '38')->get();
			$seqglo_question2 = Question::where('type_id', '=', '39')->get();
			$seqglo_question3 = Question::where('type_id', '=', '40')->get();
			$seqglo_question4 = Question::where('type_id', '=', '41')->get();
			$seqglo_question5 = Question::where('type_id', '=', '42')->get();

			return View::make('survey.match')
				->with('pi0', $pi0)
				->with('pi1', $pi1)
				->with('pi2', $pi2)
				->with('pi3', $pi3)
				->with('pi4', $pi4)
				->with('pi5', $pi5)
				->with('pi6', $pi6)
				->with('pi7', $pi7)

				->with('mapp_question1', $mapp_question1)
				->with('mapp_question2', $mapp_question2)
				->with('mapp_question3', $mapp_question3)
				->with('mapp_question4', $mapp_question4)
				->with('mapp_question5', $mapp_question5)

				->with('papp_question1', $papp_question1)
				->with('papp_question2', $papp_question2)
				->with('papp_question3', $papp_question3)
				->with('papp_question4', $papp_question4)
				->with('papp_question5', $papp_question5)

				->with('pav_question1', $pav_question1)
				->with('pav_question2', $pav_question2)
				->with('pav_question3', $pav_question3)
				->with('pav_question4', $pav_question4)
				->with('pav_question5', $pav_question5)

				->with('actref_question1', $actref_question1)
				->with('actref_question2', $actref_question2)
				->with('actref_question3', $actref_question3)
				->with('actref_question4', $actref_question4)
				->with('actref_question5', $actref_question5)

				->with('senint_question1', $senint_question1)
				->with('senint_question2', $senint_question2)
				->with('senint_question3', $senint_question3)
				->with('senint_question4', $senint_question4)
				->with('senint_question5', $senint_question5)

				->with('vervis_question1', $vervis_question1)
				->with('vervis_question2', $vervis_question2)
				->with('vervis_question3', $vervis_question3)
				->with('vervis_question4', $vervis_question4)
				->with('vervis_question5', $vervis_question5)

				->with('seqglo_question1', $seqglo_question1)
				->with('seqglo_question2', $seqglo_question2)
				->with('seqglo_question3', $seqglo_question3)
				->with('seqglo_question4', $seqglo_question4)
				->with('seqglo_question5', $seqglo_question5);
		}

	public function store()
	{
		$rules = array(

				'name' => 'required',
				'response_values1' => 'required',
				'response_values2' => 'required',
				'response_values3' => 'required',
				'response_values4' => 'required',
				'response_values5' => 'required',
				'response_values6' => 'required',
				'response_values7' => 'required',
				'response_values8' => 'required|numeric',
				'response_values9' => 'required|numeric',
				'response_values10' => 'required|numeric',
				'response_values11' => 'required|numeric',
				'response_values12' => 'required|numeric',
				'response_values13' => 'required|numeric',
				'response_values14' => 'required|numeric',
				'response_values15' => 'required|numeric',
				'response_values16' => 'required|numeric',
				'response_values17' => 'required|numeric',
				'response_values18' => 'required|numeric',
				'response_values19' => 'required|numeric',
				'response_values20' => 'required|numeric',
				'response_values21' => 'required|numeric',
				'response_values22' => 'required|numeric',
				'response_values23' => 'required|numeric',
				'response_values24' => 'required|numeric',
				'response_values25' => 'required|numeric',
				'response_values26' => 'required|numeric',
				'response_values27' => 'required|numeric',
				'response_values28' => 'required|numeric',
				'response_values29' => 'required|numeric',
				'response_values30' => 'required|numeric',
				'response_values31' => 'required|numeric',
				'response_values32' => 'required|numeric',
				'response_values33' => 'required|numeric',
				'response_values34' => 'required|numeric',
				'response_values35' => 'required|numeric',
				'response_values36' => 'required|numeric',
				'response_values37' => 'required|numeric',
				'response_values38' => 'required|numeric',
				'response_values39' => 'required|numeric',
				'response_values40' => 'required|numeric',
				'response_values41' => 'required|numeric',
				'response_values42' => 'required|numeric'
			);
			
			$validator = Validator::make(Input::all(), $rules);

			if($validator->passes())
			{
				$answer = new Answer();
				$answer->name = Input::get('name');
				$answer->response_values1 = Input::get('response_values1');
				$answer->response_values2 = Input::get('response_values2');
				$answer->response_values3 = Input::get('response_values3');
				$answer->response_values4 = Input::get('response_values4');
				$answer->response_values5 = Input::get('response_values5');
				$answer->response_values6 = Input::get('response_values6');
				$answer->response_values7 = Input::get('response_values7');
				$answer->response_values8 = Input::get('response_values8');
				$answer->response_values9 = Input::get('response_values9');
				$answer->response_values10 = Input::get('response_values10');
				$answer->response_values11 = Input::get('response_values11');
				$answer->response_values12 = Input::get('response_values12');
				$answer->response_values13 = Input::get('response_values13');
				$answer->response_values14 = Input::get('response_values14');
				$answer->response_values15 = Input::get('response_values15');
				$answer->response_values16 = Input::get('response_values16');
				$answer->response_values17 = Input::get('response_values17');
				$answer->response_values18 = Input::get('response_values18');
				$answer->response_values19 = Input::get('response_values19');
				$answer->response_values20 = Input::get('response_values20');
				$answer->response_values21 = Input::get('response_values21');
				$answer->response_values22 = Input::get('response_values22');
				$answer->response_values23 = Input::get('response_values23');
				$answer->response_values24 = Input::get('response_values24');
				$answer->response_values25 = Input::get('response_values25');
				$answer->response_values26 = Input::get('response_values26');
				$answer->response_values27 = Input::get('response_values27');
				$answer->response_values28 = Input::get('response_values28');
				$answer->response_values29 = Input::get('response_values29');
				$answer->response_values30 = Input::get('response_values30');
				$answer->response_values31 = Input::get('response_values31');
				$answer->response_values32 = Input::get('response_values32');
				$answer->response_values33 = Input::get('response_values33');
				$answer->response_values34 = Input::get('response_values34');
				$answer->response_values35 = Input::get('response_values35');
				$answer->response_values36 = Input::get('response_values36');
				$answer->response_values37 = Input::get('response_values37');
				$answer->response_values38 = Input::get('response_values38');
				$answer->response_values39 = Input::get('response_values39');
				$answer->response_values40 = Input::get('response_values40');
				$answer->response_values41 = Input::get('response_values41');
				$answer->response_values42 = Input::get('response_values42');

				$answer->save();



				return Redirect::to('results');	
			}
			else {
				return Redirect::to('survey')->withInput()->withErrors($validator);
			}
	}
}