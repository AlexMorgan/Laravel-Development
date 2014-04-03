@extends('master')

@section('content')

	<div class="col-md-8 col-md-offset-2">

		<div class="well" id="content">
			<legend>Please Register</legend>
			<!--This will open up the login in form and we will open it at the url 'login'-->
			{{ Form::open(array('url' => 'register')) }}
			<!--This will handle any errors that we get - if there are any errors we will return it with a class alert alert.error-->
			@if($errors->any())
			<div class="alert alert-error">
				<!--Shortcut for 'times'-->
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif
			<div class="signup">
				{{ Form::text('username', '', array('placeholder' => 'username')) }}
				<!-- This will be the value of the email text blank, which will be blank so we won't enter anything-->
				{{ Form::text('email', '', array('placeholder' => 'Email')) }}
				{{ Form::password('password', array('placeholder' => 'Password')) }}
				{{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password')) }}
			</div>
			<div class="row-pad submit">
				{{ Form::submit('Register', array('class' => 'btn btn-success')) }}
				<!-- btn class= btn-danger changes it to a red button -->
				{{ HTML::link('/', 'Cancel', array('class' => 'btn btn-danger')) }}
			</div>
			{{ Form::close() }}
		</div>

	</div>

</div>

@stop