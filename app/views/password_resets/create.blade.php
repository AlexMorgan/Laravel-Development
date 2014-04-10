@extends('master')

	<head>
		{{ HTML::style('css/users/contact.css') }}
	</head>

@section('content')

<div class="container main-content">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
				<h1 class="contact">Reset Your Password:</h1>
				<p class="comment-blurb">No Worries! We all forget our passwords sometimes.</p>
		</div>	
	</div>

	<div class="row">
		<div class="col-md-3 col-md-offset-5">
			<!-- Within our Form::open() method we must specify where the form is going to post to. (RESTful method) -->
			{{ Form::open(array('route'=>'password_resets.store')) }}
			{{ Form::text('email', null, array('required' => 'true', 'placeholder' => 'Enter your email')) }}
			{{ Form::submit('Reset', array('class' => 'btn btn-success')) }}
			{{ Form::close() }}
		</div>
	</div>
<!-- If an error occures, laravel will flash an error variable as well as a reason for it -->
	@if(Session::has('error'))
		<p>{{ Session::get('reason') }}</p>
	@elseif (Session::get('success'))
		<p>Please Check Your</p>
	@endif

</div>

@stop