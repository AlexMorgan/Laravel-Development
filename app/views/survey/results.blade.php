@extends('master')

@section('content')

	<div class="col-md-8 col-md-offset-2">

		<div class="well" id="content">
			<ol>
			<legend>
					@foreach ($results as $user1)
						<li>Results for:  {{ $user1->name }} (Student)</li>
					@endforeach
			</legend>

			<!--This will open up the login in form and we will open it at the url 'login'-->
			{{ Form::open(array('url' => 'results')) }}


			<!--This will handle any errors that we get - if there are any errors we will return it with a class alert alert.error-->
				@if($errors->any())
					<div class="alert alert-error">
						<!--Shortcut for 'times'-->
						<a href="#" class="close" data-dismiss="alert">&times;</a>
							{{ implode('', $errors->all('<li class="error">:message</li>')) }}
					</div>
				@endif

				<!--PHP script to perform algorithm calculations on motivational and learning style constraints-->
				<?php
					$mapp_sum_total = (($mapp1) + ($mapp2) + ($mapp3) + ($mapp4) + ($mapp5)) / 5;
					$papp_sum_total = (($papp1) + ($papp2) + ($papp3) + ($papp4) + ($papp5)) / 5;
					$pav_sum_total 	= (($pav1)  + ($pav2)  + ($pav3)  + ($pav4)  + ($pav5))  / 5;

					$actref_sum_total 	= ($actref1) + ($actref2) + ($actref3) + ($actref4) +  ($actref5);
					$senint_sum_total 	= ($senint1) + ($senint2) + ($senint3) + ($senint4) +  ($senint5);
					$vervis_sum_total 	= ($vervis1) + ($vervis2) + ($vervis3) + ($vervis4) +  ($vervis5);
					$seqglo_sum_total 	= ($seqglo1) + ($seqglo2) + ($seqglo3) + ($seqglo4) +  ($seqglo5);

					$tutor1compatibility = (abs($tutor1mapp   - $mapp_sum_total)) 	+
										   (abs($tutor1papp   - $papp_sum_total)) 	+ 	
										   (abs($tutor1pav 	  - $pav_sum_total))   	+ 
										   (abs($tutor1actref - $actref_sum_total)) + 
										   (abs($tutor1senint - $senint_sum_total)) +
										   (abs($tutor1vervis - $vervis_sum_total)) +
										   (abs($tutor1seqglo - $seqglo_sum_total)); 

					$tutor2compatibility = (abs($tutor2mapp   - $mapp_sum_total))  	+ 
										   (abs($tutor2papp   - $papp_sum_total)) 	+ 
										   (abs($tutor2pav    - $pav_sum_total))   	+ 
										   (abs($tutor2actref - $actref_sum_total)) + 
										   (abs($tutor2senint - $senint_sum_total)) +
										   (abs($tutor2vervis - $vervis_sum_total)) +
										   (abs($tutor2seqglo - $seqglo_sum_total)); 

					$tutor3compatibility = (abs($tutor3mapp   - $mapp_sum_total)) 	+ 
										   (abs($tutor3papp   - $papp_sum_total)) 	+ 	
										   (abs($tutor3pav    - $pav_sum_total))   	+ 
										   (abs($tutor3actref - $actref_sum_total)) + 
										   (abs($tutor3senint - $senint_sum_total)) +
										   (abs($tutor3vervis - $vervis_sum_total)) +
										   (abs($tutor3seqglo - $seqglo_sum_total)); 

					$tutor1percent = 100 - (($tutor1compatibility / 52) * 100) 
				?>

<!--Normalized Algorithm Calculations-->
 
  <!--

  $mapp_sum_total = ( ($mapp1 / 4) + ($mapp2 / 4) + ($mapp3 / 4) + ($mapp4 / 4) + ($mapp5 / 4) / 5);
  $papp_sum_total = ( ($papp1 / 4) + ($papp2 / 4) + ($papp3 / 4) + ($papp4 / 4) + ($papp5 / 4) / 5);
  $pav_sum_total 	= ( ($pav1  / 4) + ($pav2  / 4) + ($pav3  / 4) + ($pav4  / 4) + ($pav5  / 4) / 5);
 
  $actref_sum_total 	= ( ($actref1 / 10) + ($actref2 / 10) + ($actref3 / 10) + ($actref4 / 10) +  ($actref5 / 10));
  $senint_sum_total 	= ( ($senint1 / 10) + ($senint2 / 10) + ($senint3 / 10) + ($senint4 / 10) +  ($senint5 / 10));
  $vervis_sum_total 	= ( ($vervis1 / 10) + ($vervis2 / 10) + ($vervis3 / 10) + ($vervis4 / 10) +  ($vervis5 / 10));
  $seqglo_sum_total 	= ( ($seqglo1 / 10) + ($seqglo2 / 10) + ($seqglo3 / 10) + ($seqglo4 / 10) +  ($seqglo5 / 10));
	
	-->
 
				<!--Ordered list that echos motivational and learning style constraint scores-->
				<ul>
					<li>Mastery Approach Score:  		{{ $mapp_sum_total }}</li><br>
					<li>Performance Approach Score:  	{{ $papp_sum_total }}</li><br>
					<li>Performance Avoidance Score:  	{{ $pav_sum_total  }}</li><br>

					<li>Active vs. Reflective Score:  	{{ $actref_sum_total }}</li><br>
					<li>Sensing vs. Intuitive Score:  	{{ $senint_sum_total }}</li><br>
					<li>Verbal vs. Visual Score:  		{{ $vervis_sum_total }}</li><br>
					<li>Sequential vs. Global Score:  	{{ $seqglo_sum_total }}</li><br>
				</ul>

				<legend>
						@foreach ($tutor1 as $tutor1legend)
							<li>Results for:  {{ $tutor1legend->name }} (Tutor)</li>
						@endforeach
				</legend>

				<ul>
					@foreach ($tutor1 as $tutor1score)
						<li>Tutor's Compatibility:  		{{ round($tutor1percent) }}%</li><br>
						<li>Mastery Approach Score:  		{{ $tutor1score->mapp }}</li><br>
						<li>Performance Approach Score:  	{{ $tutor1score->papp }}</li><br>
						<li>Performance Avoidance Score:  	{{ $tutor1score->pav }}</li><br>

						<li>Active vs. Reflective Score:  	{{ $tutor1score->actref }}</li><br>
						<li>Sensing vs. Intuitive Score:  	{{ $tutor1score->senint }}</li><br>
						<li>Verbal vs. Visual Score:  		{{ $tutor1score->vervis }}</li><br>
						<li>Sequential vs. Global Score:  	{{ $tutor1score->seqglo }}</li><br>
					@endforeach
			 	</ul>

			 	<legend>
						@foreach ($tutor2 as $tutor2legend)
							<li>Results for:  {{ $tutor2legend->name }} (Tutor)</li>
						@endforeach
				</legend>

				<ul>
					@foreach ($tutor2 as $tutor2score)
						<li>Tutor's Compatibility:  		{{ round($tutor2compatibility) }}%</li><br>
						<li>Mastery Approach Score:  		{{ $tutor2score->mapp }}</li><br>
						<li>Performance Approach Score:  	{{ $tutor2score->papp }}</li><br>
						<li>Performance Avoidance Score:  	{{ $tutor2score->pav }}</li><br>

						<li>Active vs. Reflective Score:  	{{ $tutor2score->actref }}</li><br>
						<li>Sensing vs. Intuitive Score:  	{{ $tutor2score->senint }}</li><br>
						<li>Verbal vs. Visual Score:  		{{ $tutor2score->vervis }}</li><br>
						<li>Sequential vs. Global Score:  	{{ $tutor2score->seqglo }}</li><br>
					@endforeach
			 	</ul>

			 	<legend>
						@foreach ($tutor3 as $tutor3legend)
							<li>Results for:  {{ $tutor3legend->name }} (Tutor)</li>
						@endforeach
				</legend>

				<ul>
					@foreach ($tutor3 as $tutor3score)
						<li>Tutor's Compatibility:  		{{ round($tutor3compatibility) }}%</li><br>
						<li>Mastery Approach Score:  		{{ $tutor3score->mapp }}</li><br>
						<li>Performance Approach Score:  	{{ $tutor3score->papp }}</li><br>
						<li>Performance Avoidance Score:  	{{ $tutor3score->pav }}</li><br>

						<li>Active vs. Reflective Score:  	{{ $tutor3score->actref }}</li><br>
						<li>Sensing vs. Intuitive Score:  	{{ $tutor3score->senint }}</li><br>
						<li>Verbal vs. Visual Score:  		{{ $tutor3score->vervis }}</li><br>
						<li>Sequential vs. Global Score:  	{{ $tutor3score->seqglo }}</li><br>
					@endforeach
			 	</ul>

			</ol>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop


					<!--<small>
						<li> {{ $user1->response_values1 }} </li><br>
						<li> {{ $user1->response_values2 }} </li><br>
						<li> {{ $user1->response_values3 }} </li><br>
						<li> {{ $user1->response_values4 }} </li><br>
						<li> {{ $user1->response_values5 }} </li><br>
						<li> {{ $user1->response_values6 }} </li><br>
						<li> {{ $user1->response_values7 }} </li><br>
						<li> {{ $user1->response_values8 }} </li><br>
						<li> {{ $user1->response_values9 }} </li><br>
						<li> {{ $user1->response_values10 }} </li><br>
						<li> {{ $user1->response_values11 }} </li><br>
						<li> {{ $user1->response_values12 }} </li><br>
						<li> {{ $user1->response_values13 }} </li><br>
						<li> {{ $user1->response_values14 }} </li><br>
						<li> {{ $user1->response_values15 }} </li><br>
						<li> {{ $user1->response_values16 }} </li><br>
						<li> {{ $user1->response_values17 }} </li><br>
						<li> {{ $user1->response_values18 }} </li><br>
						<li> {{ $user1->response_values19 }} </li><br>
						<li> {{ $user1->response_values20 }} </li><br>
						<li> {{ $user1->response_values21 }} </li><br>
						<li> {{ $user1->response_values22 }} </li><br>
						<li> {{ $user1->response_values23 }} </li><br>
						<li> {{ $user1->response_values24 }} </li><br>
						<li> {{ $user1->response_values25 }} </li><br>
						<li> {{ $user1->response_values26 }} </li><br>
						<li> {{ $user1->response_values27 }} </li><br>
						<li> {{ $user1->response_values28 }} </li><br>
						<li> {{ $user1->response_values29 }} </li><br>
						<li> {{ $user1->response_values30 }} </li><br>
						<li> {{ $user1->response_values31 }} </li><br>
						<li> {{ $user1->response_values32 }} </li><br>
						<li> {{ $user1->response_values33 }} </li><br>
						<li> {{ $user1->response_values34 }} </li><br>
						<li> {{ $user1->response_values35 }} </li><br>
						<li> {{ $user1->response_values36 }} </li><br>
						<li> {{ $user1->response_values37 }} </li><br>
						<li> {{ $user1->response_values38 }} </li><br>
						<li> {{ $user1->response_values39 }} </li><br>
						<li> {{ $user1->response_values40 }} </li><br>
						<li> {{ $user1->response_values41 }} </li><br>
						<li> {{ $user1->response_values42 }} </li><br>
					</small>-->
				