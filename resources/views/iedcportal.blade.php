
<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>


  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="ZyvLTqOXi7VdxLkBuLupK8cWNcFLjmwiisIgMPdF">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
       

        <link rel="stylesheet" href="https://research.spit.ac.in/css/font-awesome.css">
        
        <link rel="stylesheet" href="https://research.spit.ac.in/css/app.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <style type="text/css">
/* .box{
    width:600px;
    margin:6% auto;
    border:1px solid #ccc;
   }
   .login{
       background-color: #cf1010;
       color: #fff;
   } */
   .fotters{
	color: #9F9F9F;
	background: #202020;
	text-align: center;
	font-size: 11px;
	padding: 20px 0;
	margin-top: 1px;
	}


  @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
* {
  margin: 0;
  padding: 0; }

a {
  color: #666;
  text-decoration: none; }
  a:hover {
    color: #4FDA8C; }

input {
  font: 16px/26px "Raleway", sans-serif; }

body {
  color: #666;
  background-color: #f1f2f2;
  font: 16px/26px "Raleway", sans-serif; }

.form-wrap {
  background-color: #fff;
  width: 400px;
  margin: 3em auto;
  box-shadow: 0px 1px 8px #BEBEBE;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  -moz-box-shadow: 0px 1px 8px #BEBEBE; }
  .form-wrap .tabs {
    overflow: hidden; }
    .form-wrap .tabs h3 {
      float: left;
      width: 50%; }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #fff; }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%; }
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase; }
    .form-wrap form .button:hover {
      background-color: #4FDA8C; }
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; }
    .form-wrap form .checkbox:checked + label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1; }
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; }
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; }
    .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }


/* .. */


  </style>
  <script>
  jQuery(document).ready(function($) {
	tab = $('.tabs h3 a');

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});
</script>

 </head>
 <body>
 <header>
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1 col-sm-2 col-xs-3">
                                <a class="navbar-brand pull-left" href="/"><img src="https://research.spit.ac.in/img/SPIT_logo.png"/></a>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-9">
                                <a class="navbar-brand pull-left" href="/"><img src="https://research.spit.ac.in/img/logo.gif"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            
                
                <nav class="navbar navbar-expand-lg navbar-dark">
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="container">
                            <ul class="navbar-nav ml-auto">

                    <li class="nav-item" id="spithome">
                    <a class="nav-link" href="https://www.spit.ac.in/" target="_blank">SPIT</a>
                                </li>

                                <li class="nav-item" id="home">
                                    <a class="nav-link" href="/">Home</a>
                                </li>

                          
                        </div>
                    </div>
                </nav>

            </header>
  <br />
  <!-- ...MAIN CoNTENT... -->
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-6">


   
  

    <div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Judje Login</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Mentor Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="" method="post" enctype="multipart/form-data">
          @csrf
					<input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
					<input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
		
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="{{route('mentor_login')}}" method="post" enctype="multipart/form-data">
          @csrf
					<input type="text" class="input" id="user_login" name="ment_log_user" autocomplete="off" placeholder="Email or Username">
					<input type="password" class="input" id="user_pass" name="ment_log_pass" autocomplete="off" placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
				<div class="help-text">
				
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
    
</div>
		<div class="col-md-6">

    <div class="form-wrap">
		<div class="tabs">
			<!-- <h3 align="center" class="signup-tab"><a class="active" href="#signup-tab-content">Judje Login</a></h3> -->
     
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="" method="post">
	
<h2 align="center">Register</h2>
<br />
<h5 align="center">
Dont have an account yet Get Registered here
</h4>
<br />
          <!-- <a href="{{route('iedc')}}"> -->
          <a href="/iedc">

          					<input type="button"  class="button" id='stdr' value="Studetent registration">

          </a>
          <h2 align="center">  </h2>
<br />
<a href="/judge_registration">
					<input type="button" class="button" value="judje registration">
</a>
				</form><!--.login-form-->
		
			</div><!--.signup-tab-content-->
</div>
		</div>
	</div>
</div>
  <!-- ...MAIN CoNTENT... -->


  <div class="main"></div>


<div class="clear"></div>

        <!-- Footer -->
        <!-- <footer class="font-small text-white mt-5"> -->
            <!-- <div class="container"> -->
                <!-- <div class="row"> -->
             
<div id="footer" class="fotters">

<p>
<a href='http://www.spit.ac.in/'>Home</a> | 
<a href='http://www.aicte-india.org/' target='_blank'>AICTE</a> | 
<a href='http://www.mu.ac.in/' target='_blank'>Mumbai University</a> | 
<a href='http://www.dtemaharashtra.gov.in/' target='_blank'>DTE</a> |
<a href='http://www.spit.ac.in/wp-content/uploads/SPITVirtualTour/SPIOT_Templates/SPIOTFL' target='_blank'>Campus Virtual Tour</a> |  
<a href='http://mail.spit.ac.in'>Webmail</a> | 
<a href='http://www.spit.ac.in/about/contact/'>Contact</a> | 
</p>
<p>
<a href='http://www.spit.ac.in/terms-conditions/'>Terms & Conditions</a> |
<a href='http://www.spit.ac.in/privacy-policy/'>Privacy Policy</a> |
<a href='http://www.spit.ac.in/refund-cancellation-policy/'>Refund/Cancellation Policy</a>
</p>
<p class="">Bharatiya Vidya Bhavans Sardar Patel Institute of Technology
Munshi Nagar, Andheri (West), Mumbai 400 058</p>
<p>(91)-(022)-26707440, 26287250</p>

<p>
<ul id="" class="cnss-social-icon " style="text-align:center;">
<li class="cn-fa-facebook cn-fa-icon " style="display:inline-block;">
<a class="" target="_blank" href="https://www.facebook.com/SPITCOLLEGE/" title="Facebook" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
</a>
</li>

<li class="cn-fa-twitter cn-fa-icon " style="display:inline-block;">
<a class="" target="_blank" href="https://twitter.com/bvbspit" title="Twitter" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
</a></li>

<li class="cn-fa-linkedin cn-fa-icon " style="display:inline-block;">
<a class="" target="_blank" href="https://www.linkedin.com/school/bhartiya-vidya-bhavans-sardar-patel-institute-of-technology-munshi-nagar-andheri-mumbai/" title="LinkedIn" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
</a>
</li></ul></p>
<!-- <div>
        
                    <div class="col-md-6">
                        <button id="scroll-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg></button>
                    </div> -->
                </div>
            </div>
        </footer>
 </body>
</html>