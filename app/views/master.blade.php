<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Creating a variable for the title of the page-->
    <title></title>
    <!--{{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}-->
    {{ HTML::style('css/my-styles.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
</head>

<body>
    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <!-- Dropdown Button -->
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>    

        <!-- TutorScout Logo -->
        <div class="main-logo">{{ HTML::link('/', 'TutorScout', array('class' => 'navbar-brand')) }}</div>

        <!-- Navbar featurettes -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right ">
            <li> {{ HTML::link('/', 'Home', array('class' => 'active')) }} </li>
            <li class="dropdown">
              <a data-toggle="dropdown" data-target="#">About<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>{{HTML::link('about', 'About TutorScout')}}</li>
                  <li>{{HTML::link('team', 'About the Team')}}</li>
                  <li class="divider"></li>
                  <li><a href="#">Plans &amp; Pricing</a></li>
                </ul>
            </li>
            @if(Auth::user())
              <li> {{ HTML::link('logout', 'Logout') }} </li>
            @else
              <li> {{ HTML::link('login', 'Login') }} </li>
            @endif
          </ul>
        </div>
      </div>
    </div><!-- End Navbar -->

	<!--Each row-fluid must add up to 12-->
	@yield('content')

</body>
</html> 

		<!--
    <div class="span3">
			<ul class="nav nav-list well">
				******If user is authenticated then we will show this******
				@if(Auth::user())
				<li class="nav-header">{{ ucwords(Auth::user()->username) }}</li>
				<li>{{ HTML::link('post', 'Add Post') }}</li>
				<li>{{ HTML::link('users', 'View Users') }}</li>
				<li>{{ HTML::link('logout', 'Logout') }} </li>
				@else
				******If the user has not logged in yet then they will see a simple login page******
				<li>{{ HTML::link('login','Login') }}</li>
				@endif
			</ul>
		</div>
    -->