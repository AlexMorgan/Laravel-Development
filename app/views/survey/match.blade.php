@extends('master')

@section('content')

	<div class="col-md-8 col-md-offset-2">

		<div class="well" id="content">
			<legend>Take Compatibility Test Now!</legend>

			<!--This will open up the login in form and we will open it at the url 'login'-->
			{{ Form::open(array('url' => 'survey')) }}


			<!--This will handle any errors that we get - if there are any errors we will return it with a class alert alert.error-->
			@if($errors->any())
			<div class="alert alert-error">
				<!--Shortcut for 'times'-->
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif

			<!--Personal Information Questions 1-7-->
			<h4>Personal Information Questions</h4>

		<ol>

			@foreach ($pi0 as $name)
			<li>
				<h4>{{ $name->question_text }} </h4>
			<div class="form-group">
				{{ Form::text('name', '', array('placeholder' => 'Name')) }} <br> 
			</div>
			</li>
			@endforeach
			
			<!--Question 1:  Gender-->
			@foreach ($pi1 as $gender)
			<li>
				<h4>{{ $gender->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values1', 'M') }} Male  <br>
				{{ Form::radio('response_values1', 'F') }} Female <br> 
			</div>
			</li>
			@endforeach

			<!--Question 2:  Date of Birth-->
			@foreach ($pi2 as $dob)
			<li>
				<h4>{{ $dob->question_text }} </h4>
			<div class="form-group">
				{{ Form::text('response_values2', '', array('placeholder' => 'MM/DD/YYYY')) }} <br> 
			</div>
			</li>
			@endforeach

			<!--Question 3:  Ethnicity-->
			@foreach ($pi3 as $ethnicity) 
			<li>
				<h4>{{ $ethnicity->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values3', 'White') 		}} White <br> 
				{{ Form::radio('response_values3', 'Hispanic') 		}} Hispanic or Latino <br>
				{{ Form::radio('response_values3', 'Black') 		}} Black or African American <br>
				{{ Form::radio('response_values3', 'Native') 		}} Native American or American Indian <br>
				{{ Form::radio('response_values3', 'Asian') 		}} Asian / Pacific Islander <br>
				{{ Form::radio('response_values3', 'Other') 		}} Other <br> 
			</div>
			</li>
			@endforeach

			<!--Question 4:  Anticipated Graduation Date-->
			@foreach ($pi4 as $grad) 
			<li>
				<h4>{{ $grad->question_text }} </h4>
			<div class="form-group">
				{{ Form::text('response_values4', '', array('placeholder' => 'MM/DD/YYYY')) }} <br> 
			</div>
			</li>
			@endforeach

			<!--Question 5:  Zip Code-->
			@foreach ($pi5 as $zip) 
			<li>
				<h4>{{ $zip->question_text }} </h4>
			<div class="form-group">
				{{ Form::text('response_values5', '', array('placeholder' => 'Zip Code')) }} <br> 
			</div>
			</li>
			@endforeach

			<!--Question 6:  Online Capabilities-->
			@foreach ($pi6 as $online)
			<li>
				<h4>{{ $online->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values6', 'Yes') }} Yes <br>
				{{ Form::radio('response_values6', 'No') 	}} No <br> 
			</div>
			</li>
			@endforeach

			<!--Question 7:  Maximum Travel Distance-->
			@foreach ($pi7 as $distance) 
			<li>
				<h4>{{ $distance->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values7', '10') 	}} 10 Miles <br>  
				{{ Form::radio('response_values7', '25') 	}} 25 Miles <br>
				{{ Form::radio('response_values7', '50') 	}} 50 Miles <br> 
				{{ Form::radio('response_values7', '75+') 	}} 75+ Miles <br> 
			</div>
			</li>
			@endforeach

			<!--Motivational Constraint Questions:  Mastery Approach 8-12-->
			<h4>Motivational Constraint Questions</h4>

			@foreach ($mapp_question1 as $mapp_motivation1)
			<li> 
				<h4>{{ $mapp_motivation1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values8', '1') }} 1  
				{{ Form::radio('response_values8', '2') }} 2  
				{{ Form::radio('response_values8', '3') }} 3  
				{{ Form::radio('response_values8', '4') }} 4  
				{{ Form::radio('response_values8', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($mapp_question2 as $mapp_motivation2) 
			<li>
				<h4>{{ $mapp_motivation2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values9', '1') }} 1  
				{{ Form::radio('response_values9', '2') }} 2  
				{{ Form::radio('response_values9', '3') }} 3  
				{{ Form::radio('response_values9', '4') }} 4  
				{{ Form::radio('response_values9', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($mapp_question3 as $mapp_motivation3) 
			<li>
				<h4>{{ $mapp_motivation3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values10', '1') }} 1  
				{{ Form::radio('response_values10', '2') }} 2  
				{{ Form::radio('response_values10', '3') }} 3  
				{{ Form::radio('response_values10', '4') }} 4  
				{{ Form::radio('response_values10', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($mapp_question4 as $mapp_motivation4) 
			<li>
				<h4>{{ $mapp_motivation4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values11', '1') }} 1  
				{{ Form::radio('response_values11', '2') }} 2  
				{{ Form::radio('response_values11', '3') }} 3  
				{{ Form::radio('response_values11', '4') }} 4  
				{{ Form::radio('response_values11', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($mapp_question5 as $mapp_motivation5) 
			<li>
				<h4>{{ $mapp_motivation5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values12', '1') }} 1  
				{{ Form::radio('response_values12', '2') }} 2  
				{{ Form::radio('response_values12', '3') }} 3  
				{{ Form::radio('response_values12', '4') }} 4  
				{{ Form::radio('response_values12', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			<!--Motivational Constraint Questions:  Performance Approach 12-17-->

			@foreach ($papp_question1 as $papp_motivation1) 
			<li>
				<h4>{{ $papp_motivation1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values13', '1') }} 1  
				{{ Form::radio('response_values13', '2') }} 2  
				{{ Form::radio('response_values13', '3') }} 3  
				{{ Form::radio('response_values13', '4') }} 4  
				{{ Form::radio('response_values13', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($papp_question2 as $papp_motivation2) 
			<li>
				<h4>{{ $papp_motivation2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values14', '1') }} 1  
				{{ Form::radio('response_values14', '2') }} 2  
				{{ Form::radio('response_values14', '3') }} 3  
				{{ Form::radio('response_values14', '4') }} 4  
				{{ Form::radio('response_values14', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($papp_question3 as $papp_motivation3) 
			<li>
				<h4>{{ $papp_motivation3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values15', '1') }} 1  
				{{ Form::radio('response_values15', '2') }} 2  
				{{ Form::radio('response_values15', '3') }} 3  
				{{ Form::radio('response_values15', '4') }} 4  
				{{ Form::radio('response_values15', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($papp_question4 as $papp_motivation4) 
			<li>	
				<h4>{{ $papp_motivation4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values16', '1') }} 1  
				{{ Form::radio('response_values16', '2') }} 2  
				{{ Form::radio('response_values16', '3') }} 3  
				{{ Form::radio('response_values16', '4') }} 4  
				{{ Form::radio('response_values16', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($papp_question5 as $papp_motivation5) 
			<li>
				<h4>{{ $papp_motivation5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values17', '1') }} 1  
				{{ Form::radio('response_values17', '2') }} 2  
				{{ Form::radio('response_values17', '3') }} 3  
				{{ Form::radio('response_values17', '4') }} 4  
				{{ Form::radio('response_values17', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			<!--Motivational Constraint Questions:  Performance Avoidance 17-22-->

			@foreach ($pav_question1 as $pav_motivation1)
			<li> 
				<h4>{{ $pav_motivation1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values18', '1') }} 1  
				{{ Form::radio('response_values18', '2') }} 2  
				{{ Form::radio('response_values18', '3') }} 3  
				{{ Form::radio('response_values18', '4') }} 4  
				{{ Form::radio('response_values18', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($pav_question2 as $pav_motivation2) 
			<li>
				<h4>{{ $pav_motivation2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values19', '1') }} 1  
				{{ Form::radio('response_values19', '2') }} 2  
				{{ Form::radio('response_values19', '3') }} 3  
				{{ Form::radio('response_values19', '4') }} 4  
				{{ Form::radio('response_values19', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($pav_question3 as $pav_motivation3) 
			<li>
				<h4>{{ $pav_motivation3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values20', '1') }} 1  
				{{ Form::radio('response_values20', '2') }} 2  
				{{ Form::radio('response_values20', '3') }} 3  
				{{ Form::radio('response_values20', '4') }} 4  
				{{ Form::radio('response_values20', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($pav_question4 as $pav_motivation4) 
			<li>
				<h4>{{ $pav_motivation4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values21', '1') }} 1  
				{{ Form::radio('response_values21', '2') }} 2  
				{{ Form::radio('response_values21', '3') }} 3  
				{{ Form::radio('response_values21', '4') }} 4  
				{{ Form::radio('response_values21', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			@foreach ($pav_question5 as $pav_motivation5) 
			<li>
				<h4>{{ $pav_motivation5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values22', '1') }} 1  
				{{ Form::radio('response_values22', '2') }} 2  
				{{ Form::radio('response_values22', '3') }} 3  
				{{ Form::radio('response_values22', '4') }} 4  
				{{ Form::radio('response_values22', '5') }} 5 <br> 
			</div>
			</li>
			@endforeach

			<!--Learning Style Constraint Questions:  Active vs. Reflective 23-27-->
			<h4>Learning Style Constraint Questions</h4>

			@foreach ($actref_question1 as $actref1) 
			<li>
				<h4>{{ $actref1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values23', '1') }} Try it out <br>
				{{ Form::radio('response_values23', '-1') }} Think it through <br> 
			</div>
			</li>
			@endforeach

			@foreach ($actref_question2 as $actref2) 
			<li>
				<h4>{{ $actref2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values24', '1') }} Discuss it with someone else <br>
				{{ Form::radio('response_values24', '-1') }} Think to myself <br> 
			</div>
			</li>
			@endforeach

			@foreach ($actref_question3 as $actref3) 
			<li>
				<h4>{{ $actref3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values25', '1') }} Work in groups <br>
				{{ Form::radio('response_values25', '-1') }} Work individually <br> 
			</div>
			</li>
			@endforeach

			@foreach ($actref_question4 as $actref4)
			<li>
				<h4>{{ $actref4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values26', '1') }} Make new friends in classes I've taken <br>
				{{ Form::radio('response_values26', '-1') }} Avoid people I don't know in classes I've taken <br>
			</div>
			</li>
			@endforeach

			@foreach ($actref_question5 as $actref5)
			<li> 
				<h4>{{ $actref5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values27', '1') }} Immediately start working on it <br>
				{{ Form::radio('response_values27', '-1') }} Try to understand it first <br>
			</div>
			</li>
			@endforeach

			<!--Learning Style Constraint Questions:  Sensing vs. Intuitive 28-32-->

			@foreach ($senint_question1 as $senint1) 
			<li>
				<h4>{{ $senint1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values28', '1') }} Realist <br>
				{{ Form::radio('response_values28', '-1') }} Dreamer <br> 
			</div>
			</li>
			@endforeach

			@foreach ($senint_question2 as $senint2) 
			<li>
				<h4>{{ $senint2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values29', '1') }} I can apply to real world problems <br>
				{{ Form::radio('response_values29', '-1') }} Are based off of ideas and theories <br> 
			</div>
			</li>
			@endforeach

			@foreach ($senint_question3 as $senint3) 
			<li>
				<h4>{{ $senint3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values30', '1') }} Very careful <br>
				{{ Form::radio('response_values30', '-1') }} A fast worker/problem solver <br> 
			</div>
			</li>
			@endforeach

			@foreach ($senint_question4 as $senint4) 
			<li>
				<h4>{{ $senint4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values31', '1') }} Easy to memorize facts <br>
				{{ Form::radio('response_values31', '-1') }} Difficult to memorize facts <br> 
			</div>
			</li>
			@endforeach

			@foreach ($senint_question5 as $senint5) 
			<li>
				<h4>{{ $senint5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values32', '1') }} Facts <br>
				{{ Form::radio('response_values32', '-1') }} Concepts <br> 
			</div>
			</li>
			@endforeach

			<!--Learning Style Constraint Questions:  Verbal vs. Visual 33-37-->

			@foreach ($vervis_question1 as $vervis1) 
			<li>
				<h4>{{ $vervis1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values33', '1') }} Observing diagrams and pictures <br>
				{{ Form::radio('response_values33', '-1') }} Reading written text <br> 
			</div>
			</li>
			@endforeach

			@foreach ($vervis_question2 as $vervis2) 
			<li>
				<h4>{{ $vervis2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values34', '1') }} Outlining a section of a textbook in my own words <br>
				{{ Form::radio('response_values34', '1') }} Color coding my notes <br> 
			</div>
			</li>
			@endforeach

			@foreach ($vervis_question3 as $vervis3) 
			<li>
				<h4>{{ $vervis3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values35', '1') }} Explaining things <br>
				{{ Form::radio('response_values35', '-1') }} Drawing figures on the board <br> 
			</div>
			</li>
			@endforeach

			@foreach ($vervis_question4 as $vervis4)
			<li> 
				<h4>{{ $vervis4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values36', '1') }} Written or verbal information <br>
				{{ Form::radio('response_values36', '-1') }} Pictures, graphs, and diagrams <br> 
			</div>
			</li>
			@endforeach

			@foreach ($vervis_question5 as $vervis5) 
			<li>
				<h4>{{ $vervis5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values37', '1') }} Conversation took place <br>
				{{ Form::radio('response_values37', '-1') }} What they looked like <br> 
			</div>
			</li>
			@endforeach

			<!--Learning Style Constraint Questions:  Sequential vs. Global 38-42-->

			@foreach ($seqglo_question1 as $seqglo1) 
			<li>
				<h4>{{ $seqglo1->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values38', '1') }} Easy <br>
				{{ Form::radio('response_values38', '-1') }} Hard <br> 
			</div>
			</li>
			@endforeach

			@foreach ($seqglo_question2 as $seqglo2)
			<li> 
				<h4>{{ $seqglo2->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values39', '1') }} In consecutive steps, one step at a time <br>
				{{ Form::radio('response_values39', '-1') }} By jumping to the end result <br> 
			</div>
			</li>
			@endforeach

			@foreach ($seqglo_question3 as $seqglo3) 
			<li>
				<h4>{{ $seqglo3->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values40', '1') }} Focus on the details and miss the big picture <br>
				{{ Form::radio('response_values40', '-1') }} Understand the big picture before exploring the details <br> 
			</div>
			</li>
			@endforeach

			@foreach ($seqglo_question4 as $seqglo4) 
			<li>
				<h4>{{ $seqglo4->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values41', '1') }} I tend to work on it from start to finish in logical order <br>
				{{ Form::radio('response_values41', '-1') }} I tend to work on different parts no matter the order <br> 
			</div>
			</li>
			@endforeach

			@foreach ($seqglo_question5 as $seqglo5) 
			<li>
				<h4>{{ $seqglo5->question_text }} </h4>
			<div class="form-group">
				{{ Form::radio('response_values42', '1') }} Teach one topic in its entirety for each class period <br>
				{{ Form::radio('response_values42', '-1') }} Jump from topic to topic for each class period <br> 
			</div>
			</li>
			@endforeach
		</ol>

			{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
			<!-- btn class= btn-danger changes it to a red button -->
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop