<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::style('css/bootstrap.css') }}
</head>

<body>
	<div class="row-fluid">
		<div class="span12 well">
			<h1>TutorScout</h1>
		</div>
	</div>
	<!--Each row-fluid must add up to 12-->
	<div class="row-fluid">
		<div class="span3">
			<ul class="nav nav-list well">
				<!--If user is authenticated then we will show this -->
				@if(Auth::user())
				<li class="nav-header">{{ ucwords(Auth::user()->username) }}</li>
				<li>{{ HTML::link('post', 'Add Post') }}</li>
				<li>{{ HTML::link('users', 'View Users') }}</li>
				<li>{{ HTML::link('logout', 'Logout') }} </li>
				@else
				<!--If the user has not logged in yet then they will see a simple login page -->
				<li>{{ HTML::link('login','Login') }}</li>
				@endif
			</ul>
		</div>
		<div class="span9">
			@yield('content')
		</div>
	</div>
</body>
</html>