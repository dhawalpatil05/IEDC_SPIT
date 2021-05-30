

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="dWbESgNQf2KMYaAO5otzXp0bJDLNR1axvj4DRrjp">

        <link rel="icon" href="https://research.spit.ac.in/img/SPIT_logo.png" type="image/icon type">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="https://research.spit.ac.in/css/font-awesome.css">
        
        <link rel="stylesheet" href="https://research.spit.ac.in/css/app.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <title>SPIT R & D</title>
        <script src="https://research.spit.ac.in/js/app.js" defer></script>

        <style type="text/css">
        .fotters{
	color: #9F9F9F;
	background: #202020;
	text-align: center;
	font-size: 11px;
	padding: 20px 0;
	margin-top: 1px;
	}
    </style>


    </head>
    <body>

        <div id="wrapper" class="home-page">
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

                                <li class="nav-item" id="iedc">
                                    <a class="nav-link" href="/iedcportal">IEDC</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/login">Admin</a>
                                        <a class="dropdown-item" href="/loginacc">Accountant</a>
                                    </div>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                </nav>

            </header>

        </div> 

        
<div class="main mt-4 mb-2">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

             

                    <h2 class="page-title">Judge Registration Form</h2>
                    <hr>

                    <div class="card">
                        <div class="card-header"></div>
                            <form  action="{{route('insert')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="_token" value="dWbESgNQf2KMYaAO5otzXp0bJDLNR1axvj4DRrjp">                                
                                

                  



                                
                                <p class="menu m-4">Judge</p>
                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label>FullName
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Idea_Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Institute Name
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Idea_Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Expertise
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Idea_Title">
                                        </div>
                                       
                            </div>
                                    

                                </div>
                                <div class="container"><hr></div>
          
                                <div class="row ml-5 mr-5">
                                    <div class="col-md-6 col-sm-2">
                                        <div class="form-group">
                                            <label>User_name
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Idea_Title">
                                        </div>
                                      
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Password
                                                <span class="redstar">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Idea_Title">
                                        </div>
                 




                                
                               
                                    </div>

                                    

                                  
                                </div>

                                <!-- Sanction and Submit Button -->
                        </div>
                                    
                                    <div align="center">


                                    <div class="container mb-4 mt-4">
                                        <button class="bttn">Cancel</button>
                                        <input type="submit" class="bttn" >
                                    </div>
</div>
                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="clear"></div>

       
             
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
<div>
        
                    <div class="col-md-6">
                        <button id="scroll-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg></button>
                    </div>
                </div>
            </div>
        </footer>
        
        <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
        </script>

        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="https://research.spit.ac.in/js/custom.js"></script>


    </body>
</html>
