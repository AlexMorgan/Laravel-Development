@extends('master')

@section('content')

<head>
	{{ HTML::style('css/home/team.css') }}
</head>

	<div class="container main-content">

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<h1 class="meet">Meet the Team:</h1>
			</div>	
		</div>

		<div class="row pic-row">
			<div class="col-md-3">
				<img class="profpic" src="../img/SoE.jpg" alt='Alex Morgan'>
				<h3>Alex Morgan</h3>
				<p>The UI/UX Guru</p>
			</div>

			<div class="col-md-3 col-md-offset-1">
				<img class="profpic" src="../img/pham.jpg" alt='Anthony Pham'>
				<h3>Anthony Pham</h3>
				<p>Matching Algorithm Ninja</p>
			</div>

			<div class="col-md-3 col-md-offset-1">
				<img class="profpic" src="../img/yantz.jpg" alt='Chris Yantz'>
				<h3>Chris Yantz</h3>
				<p>Dev Sensei</p>
			</div>
		</div>

	</div>


@stop