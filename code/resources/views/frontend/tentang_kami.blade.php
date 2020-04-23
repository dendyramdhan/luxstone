@extends('frontend.master')
@section('page')

<!-- tambahan file main_banner -->
<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="{{asset ('code/frontend_template/image/prlx.jpg')}}" alt="#"></div>
    <h1 class="category-title">About Us</h1>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('tentang_kami') }}">About Us</a></li>
    </ul>
</div>

<div class="container">
  <div class="row team">
    <div class="col-md-offset-2 col-md-8">
      <h3 class="team-title">Our Creative Team</h3>
      <p class="text-center team-desc">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised shing</p>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6 team1 ">
      <div class="img-block"> <img alt="#" src="{{asset ('code/frontend_template/image/team1.jpg')}}" class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name">Joeby Ragpa</h3>
        <div class="deg">CEO Founder </div>
        <p>make a type specimen book. It has survived not only five centuries, but also the leap</p>
        <div class="social-holder">
          <ul class="social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6 team2 ">
      <div class="img-block"> <img alt="#" src="{{asset ('code/frontend_template/image/team2.jpg')}}" class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name">Joeby Ragpa</h3>
        <div class="deg">CEO Founder </div>
        <p>make a type specimen book. It has survived not only five centuries, but also the leap</p>
        <div class="social-holder">
          <ul class="social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6 team3 ">
      <div class="img-block"> <img alt="#" src="{{asset ('code/frontend_template/image/team3.jpg')}}" class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name">Joeby Ragpa</h3>
        <div class="deg">CEO Founder </div>
        <p>make a type specimen book. It has survived not only five centuries, but also the leap</p>
        <div class="social-holder">
          <ul class="social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-3  col-xs-6 team4 ">
      <div class="img-block"> <img alt="#" src="{{asset ('code/frontend_template/image/team4.jpg')}}" class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name">Joeby Ragpa</h3>
        <div class="deg">CEO Founder </div>
        <p>make a type specimen book. It has survived not only five centuries, but also the leap</p>
        <div class="social-holder">
          <ul class="social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>

  <div class="row about">
    <div class="col-md-offset-2 col-md-8">
      <h3 class="about-title">About Us</h3>
      <p class="text-center about-desc">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised shing</p>
    </div>

    <div class="skill">
      <div class="col-md-4">
        <ul>
          <li>
            <div id="progress1">
              <h4>78% Production Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress2">
              <h4>90% Publishing Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress3">
              <h4> 76% Marketing Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress4">
              <h4>98% Business Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress5">
              <h4>62% Photography</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-md-4 mission">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-target="#Vision" data-toggle="tab">Our Vision</a></li>
        <li><a data-target="#Mission" data-toggle="tab">Our Mission</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="Vision">
          <h4>Specimen book Make a type . It has survived not only five centuries, but also the leap into electronic</h4>
          <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset make a type specimen book. </p>
          <p>Enturies, but also the leap into make a type specimen book. It has survived not only five c</p>
        </div>
        <div class="tab-pane" id="Mission">
          <h4>Make a type specimen book. It has survived not only five centuries, but also the leap into electronic</h4>
          <p>make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset </p>
          <p>make a type specimen book. It has survived not only five centuries, but also the leap into </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 who-we-are">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Wo We Are</a> </h4>
          </div>
          <div id="collapseOne" class="acordi-disc panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"> make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially<br>
            make a type specimen book. It has survived not only five centuries, but also the leap into </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title"> <a class="collapsed accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Wo We Are  Made</a> </h4>
          </div>
          <div id="collapseTwo" class="acordi-disc panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">Typesettin gmake a type specimen book. It has survived <br>
            not only five centuries, but also the leap into electronic , remaining essentially <br>
            make a type specimen book. It has survived not only five centuries, but also the leap into </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Our Business</a> </h4>
          </div>
          <div id="collapseThree" class="acordi-disc panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">Specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially <br>
            make a type specimen book. It has survived not<br>
            only five centuries, but also the leap into </div>
        </div>
      </div>
    </div>

  </div>
  <!-- <div class="row ">
    <div class="col-md-offset-2 col-md-8 purchase" >
      <h3 class="purchase-title">Are you Ready for Theme Purchase</h3>
      <button class="btn btn-primary">Purchase Theme</button>
    </div>
  </div> -->
</div>
<!-- Footer block Start  -->
<div class="footer-top-cms parallax-container">
  <div class="parallax"><img src="{{asset ('code/frontend_template/image/background3.jpg')}}" alt="#"></div>
  <div class="container">
    <div class="row">
      <div class="newslatter">
        <form>
          <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
          <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!</h4>
          <div class="input-group">
            <input type="text" class=" form-control" placeholder="Your-email@website.com">
            <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="footer-social">
        <ul>
          <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script src="{{asset ('code/frontend_template/javascript/DioProgress.js')}}"></script>
<!-- Footer block End  -->
<script type="text/javascript">
$("#progress1").appendSimpleProgressBar();
$("#progress1").slow({
    width: "78"
});

$("#progress2").appendSimpleProgressBar();
$("#progress2").slow({
    width: "92"
});

$("#progress3").appendSimpleProgressBar();
$("#progress3").slow({
    width: "76"
});

$("#progress4").appendSimpleProgressBar();
$("#progress4").slow({
    width: "98"
});

$("#progress5").appendSimpleProgressBar();
$("#progress5").slow({
    width: "62"
});
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="{{asset ('code/js/jQuery.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset ('code/js/bootstrap.js')}}"></script>
@stop