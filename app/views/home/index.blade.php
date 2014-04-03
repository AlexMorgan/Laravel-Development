@extends('master')

@section('content')

    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <div id="slogan">
          <h1 class="slogan">Find Tutors. Find Mentors. Find Success.</h1>
        </div>
      </div>
    </div><!-- End Jumbtron -->

    <!-- Main Content -->
    <div class="container">
     
      <div class="row ft">
        <div class="col-sm-6">
          <div class="ft-icon img-rounded hidden-xs">
            <!-- <div class="glyphicon glyphicon-star">
            </div> -->
          </div>
        </div>
        <div class="col-sm-6 ft-copy">
          <h2>Find tutors specific to you in your area</h2>
          <p>
            Students will be matched with tutors based off their preferences from their local area to ensure 100% productivity.
          </p>
        </div>
      </div>

      <div class="row ft">
        <div class="col-sm-6 ft-copy">
          <h2>Give Time to Get Time</h2>
          <p>
            TutorScout allows users to give lessons on our website in exchange for lessons from other users, free of charge.
          </p>
        </div>
        <div class="col-sm-6">
          <div id="ft-icon2" class="ft-icon img-rounded hidden-xs"></div>
        </div>
      </div>

      <div class="row ft">
        <div class="col-sm-6">
          <div id="ft-icon3" class="ft-icon img-rounded hidden-xs"></div>
        </div>
        <div class="col-sm-6 ft-copy">
          <h2>Choose From a Variety of Subjects</h2>
          <p>
            TutorScout offers a variety of subjects for users to choose from. We will constantly be adding new subjects as well.
          </p>
        </div>
      </div>
      <hr>

      <!-- Panel -->
      <div class="panel panel-default hidden-xs">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-1">
            <p class="panel-txt">Enter your email to get updates on TutorScout activity</p>
          </div>
          <div class="col-sm-4">
            <form>
              <label class="sr-only">Enter Email</label> <!-- For screen-readers -->
              <input type="email" class="form-control email-txt" id="inputEmail" placeholder="Enter email">
              <button class="btn  btn-submit" type="submit">
                <span class="glyphicon glyphicon-arrow-right"></span>
              </button>
            </form>
          </div>
        </div>
      </div><!-- End Panel -->
      <hr>

    @include('footer')

    </div> <!-- End Main Content -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



@stop