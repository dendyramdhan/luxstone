@extends('frontend.master') 
@section('page')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="{{asset ('code/frontend_template/image/prlx.jpg')}}" alt="#"></div>
    <h1>Contact Us</h1>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('kontak') }}">Contact Us</a></li>
    </ul>
</div>

<div class="container">
    <!-- <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h3 class="contactus-title">You Have Got Questions We have Got Answers</h3>
            <p class="text-center contact-desc">make a type specimen book. It has survived not only five centuries, but
                also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
        </div>
    </div> -->
    <div class="row" style="margin:20px">
        <div class="col-sm-4">
            <div class="complaint">
                <h2 class="tf">Telp</h2>
                <div class="call-info">
                    <span style="color: rgb(34, 34, 34);"><strong>0813 5000 4556</strong></span>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="email">
                <h2 class="tf">Mail</h2>
                <div class="email-info">
                    <span style="color: rgb(34, 34, 34);"><strong>sales@luxstone.com</strong></span>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="time">
                <h2 class="tf">Time</h2>
                <div class="time-info">
                    <span style="color: rgb(34, 34, 34);"><strong>Mon – Sat: 24 Hours</strong></span>
                </div>
            </div>
        </div>
        <div class="main-form">
            <h3 class="contactus-title">Leave Message</h3>
            <div class="row">
              <form name="contactform" method="POST" action="contact-form-handler.php">
                <div class="col-sm-6">
                  <input type="text" required name="name" placeholder="Name">
                </div>
                <div class="col-sm-6 ">
                  <input type="email" required name="email" placeholder="Email">
                </div>
                <div class="col-sm-6 ">
                  <input type="text" required name="phone" placeholder="Phone Number">
                </div>
                <div class="col-sm-6 ">
                  <input type="text" required name="subject" placeholder="Subject">
                </div>
                <div class="col-xs-12 ">
                  <textarea required name="message" placeholder="Message" rows="3" cols="30"></textarea>
                </div>
                <div class="col-xs-12  text-center">
                  <div class="commun-btn">
                    <button type="submit" name="submit" class="btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>

<!--
    <div class="main-form">
        <h3 class="contactus-title">Leave Message</h3>
        <div class="row">
            <form name="contactform" method="POST" action="contact-form-handler.php">
                <div class="col-sm-6">
                    <input type="text" required name="name" placeholder="Name">
                </div>
                <div class="col-sm-6 ">
                    <input type="email" required name="email" placeholder="Email">
                </div>
                <div class="col-sm-6 ">
                    <input type="text" required name="phone" placeholder="Phone Number">
                </div>
                <div class="col-sm-6 ">
                    <input type="text" required name="subject" placeholder="Subject">
                </div>
                <div class="col-xs-12 ">
                    <textarea required name="message" placeholder="Message" rows="3" cols="30"></textarea>
                </div>
                <div class="col-xs-12  text-center">
                    <div class="commun-btn">
                        <button type="submit" name="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
-->

    <!-- <div class="content">
        <div class="col-sm-12">
            <div class="map">
                <div style="overflow:hidden;height:520px;width:100%;">
                    <div id="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.959681789743!2d106.87562681536932!3d-6.136119611868136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f562d9631623%3A0xae4119ea835171be!2sRT.6%2FRW.4%2C%20Papanggo%2C%20Tj.%20Priok%2C%20Kota%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1579854888543!5m2!1sid!2sid" width="1170" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                    
                </div>
            </div>
        </div>
    </div> -->
</div>

<!--
<div class="footer-top-cms parallax-container">
    <div class="parallax"><img src="{{asset ('code/frontend_template/image/news.jpg')}}" alt="#"></div>
    <div class="container">
        <div class="row">
            <div class="newslatter">
                <form>
                    <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
                    <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!
                    </h4>
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
-->
@endsection