@extends('master')

@section('content')

	<div class="col-md-6 col-md-offset-3">

		<div class="well" id="content">
			<legend>Please Login</legend>
			<!--This will open up the login in form and we will open it at the url 'login'-->
			{{ Form::open(array('url' => 'login')) }}
			<!--This will handle any errors that we get - if there are any errors we will return it with a class alert alert.error-->
			@if($errors->any())
			<div class="alert alert-error">
				<!--Shortcut for 'times'-->
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif
			<!-- This will be the value of the email text blank, which will be blank so we won't enter anything-->
			{{ Form::text('email', '', array('placeholder' => 'Email')) }}
			{{ Form::password('password', array('placeholder' => 'Password'))}}
			{{ Form::submit('Login', array('class' => 'btn btn-success')) }}
			{{ HTML::link('register', 'Register', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>

	</div>

</div>

@stop