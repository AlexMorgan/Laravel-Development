@extends('master')

<head>
	{{ HTML::style('css/users/contact.css') }}
</head>

@section('content')


<div class="container main-content">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<h1 class="contact">Contact Us:</h1>
				<p class="comment-blurb">Feel free to contact our team with any questions, ideas or comments!</p>
		</div>	
	</div>

	@if($errors->any())
	<div class="alert alert-error col-md-6 col-md-offset-3">
		<!--Shortcut for 'times'-->
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</div>
	@endif

	<div class="col-md-8 col-md-offset-2">

		<div class="well">
			<div class="row-pad">
				{{ Form::open(array('url' => 'contact')) }}
				{{ Form::label('Subject') }}
				{{ Form::text('subject', '', array('placeholder' => 'Enter a Subject', 'class' => 'subject-area')) }}
			</div>

			<div class="row-pad">
				{{ Form::label('Message') }}
				{{ Form::textarea('message', '', array('placeholder' => 'Enter a Message')) }}
			</div>

			<div class="row-pad">
				{{ Form::submit('Submit', array('class' => 'btn btn-success contact-submit')) }}
				{{ Form::close() }}
			</div>

			<!-- {{ Form::text('email', '', array('placeholder' => 'Email')) }} -->

		</div>

	</div>

</div>

@stop