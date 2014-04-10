@extends('layout')

@section('content')
	@foreach($users as $user)
		<!--In blade we can echo information by using the double curly brackets-->
		<p>{{ $user->name }}</p>
		<p>{{ $user->email }} </p>
	@endforeach
@stop