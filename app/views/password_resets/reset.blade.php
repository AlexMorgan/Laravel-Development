@extends('master')
<head>
	{{ HTML::style('css/users/contact.css') }}
</head>
@section('content')

<div class="container main-content">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
			<h1 class="contact">Reset Your Password Now:</h1>
			<p class="comment-blurb">This one's on the house.</p>
	</div>	
</div>

{{ Form::open() }}
	<!-- We want to specify a hidden inoput for the token so that we can confirm that the user does own that email address  -->
	{{ Form::hidden('token', $token) }}
<div class="row">
	<div class="col-md-8 col-md-offset-3">
		<div class="row-pad">
			{{ Form::text('email', null, array('placeholder' => 'Enter your email')) }}
			{{ Form::password('password', array('placeholder' => 'Enter new password')) }}
			{{ Form::password('password_confirmation', array('placeholder' => 'Confirm password')) }}
			{{ Form::submit('Reset Password', array('class' => 'btn btn-success')) }}
		</div>

		{{ Form::close() }}

		@if(Session::has('error'))
			<p>{{ Session::get('reason') }}</p>
		@endif
	</div>
</div>

</div>

@stop