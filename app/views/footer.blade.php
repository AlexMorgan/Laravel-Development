<!DOCTYPE HTML>
<html>
	<body>

	@section('footer')
		<footer class="main-footer">
		  <div class="row">
		    <div class="col-sm-5">
		      <!-- <img src="img/ts-logo.png" class="ts-logo" alt="logo"> -->
		      <p>Tutor Scout creates a teaching environment with students in search of qualified tutors to complete elementary, middle school, HS, or college and a pool of successful professionals. This tutoring service offers [philanthropic] opportunities to professionals and students to foster symbiotic relationships across academic and professional fields where you can both give and receive instruction.</p>
		    </div>
		    <div class="col-sm-1 col-sm-offset-1">
		    	{{ HTML::link('/', 'Home', array('class' => 'ftr-item')) }}
		    </div>
		    <div class="col-sm-1">
		    	{{ HTML::link('about', 'About', array('class' => 'ftr-item')) }}
		    </div>
		    <div class="col-sm-1">
		    	{{ HTML::link('contact', 'Contact', array('class' => 'ftr-item')) }}
		    </div>
		    <div class="col-sm-1">
		    	{{ HTML::link('register', 'Signup', array('class' => 'ftr-item')) }}
		    </div>
		    <div class="col-sm-1">
		    	{{ HTML::link('faq', 'FAQs', array('class' => 'ftr-item')) }}
		    </div>
		  </div>
		</footer>
	@show

	</body>
</html>
