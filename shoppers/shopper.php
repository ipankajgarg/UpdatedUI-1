 
<!DOCTYPE html>
<html>
<head>
   <title>Halanx</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" >
   <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
  <title>Halanx</title>
  <meta name="robots" content="index,follow">
  <meta name="description" content="Get groceries and meals delivered from your favourite store and restaurant in as little as an hour.">
  <meta name="keywords" content="groceries,foods,meals">

<link rel="icon" type="image/png" sizes="16x16" href="logo.png">
<meta name="theme-color" content="#ffffff">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
  <link rel="canonical" href="http://www.halanx.com/"/>
  <meta name="robots" content="en_GB"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Halanx-Everyone's Personal Shopper"/>
  <meta property="og:url" content="http://halanx.com"/>
  <meta property="og:site_name" content="Halanx">
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content="Get groceries and meals delivered from your favourite restaurant and store in as little as an hour"/>
  <meta name="twitter:title" content="Halanx">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="shopper.css">
 </head>
 <body data-spy="scroll" data-target="#myScrollspy">

 <nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="https://s3-us-west-2.amazonaws.com/halanx-web/logo.png" class="img-responsive img-circle" width="50" height="50"> </a>
            <a class="navbar-brand navbar-bg" href="../index.html">Halanx</a>
        </div>
        <!-- menu items -->
         
    </div>
</nav>

<div class="container-fluid bg1" name="toTop" id="toPos">
	<div class="shadow"></div>
    	 <div class="col-md-5 col-md-offset-1">
    	   	  <div class="row_1">Earn Money On Your Own Schedule</div>
		      <div class="row_2">1. Get Activated</div>
		      <div class="row_3">Provide us your info and we'll do a background check.</div>
		      <div class="row_2">2. Get Ready</div>
		      <div class="row_3">Learn the basics of shopping through our app.</div>
		      <div class="row_2">3. Get Paid</div>
		      <div class="row_3">Turn on the app,accept some orders and earn money.</div>
		  </div>
		  

		  <div class="col-md-4 col-md-offset-1 col">
		    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
       		 <fieldset>
          		<legend class="new">Sign Up</legend>

          <div class="row">
          	<div class="col-md-6">
            <div class="form-group">
              <label for="name">First Name</label>
                <input type="text" name="firstname" placeholder="Enter First Name"   class="form-control" id="firstname"/>
              </div>
              </div>

              <div class="col-md-6">
              <div class="form-group">
                <label for="lastname">Last Name</label>
                  <input type="text" name="lastname" placeholder="Enter Last Name"  class="form-control" id="lastname"/>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Email</label>
                    <input type="text" name="email" placeholder="Enter Email"  class="form-control" id="email"/>
                 </div>
                 </div>
                 </div>

                 <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" required class="form-control" id="password" />
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Mobile Number</label>
                      <input type="text" name="mobilenumber" placeholder="Enter mobile number"   class="form-control" id="mobilenumber" />
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">City</label>
                      <input type="text" name="city" placeholder="Enter your city"   class="form-control" id="city" />
                    </div>
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">

                        <input type="submit" value="Sign Up" id="submit"   class="btn btn-danger b1"/>
                    </div>
                    </div>
                </fieldset>
            </form>
             <span class="text text1"><?php if(isset($response["user"])) {echo $response["user"];}   ?></span>
		</div>
        </div>
        </div>


 <div class="container-fluid bg3">
 <div class="row row_11">
   <div class="col-md-2   text-center"><a href="../aboutus.html">About Us</a></div>
   <div class="col-md-2  text-center"><a href="#">Careers</a></div>
   <div class="col-md-2  text-center"><a href="#">Blog</a></div>
   <div class="col-md-2  text-center"><a href="../contactus.html">Contact Us</a></div>
   <div class="col-md-2  text-center"><a href="../privacy.html">Privacy</a></div>
   <div class="col-md-2 text-center"><a href="../terms.html">Terms</a></div>
 </div>

 <div class="row row_13">
   <div class="text-center center-block">
        <a href="https://www.facebook.com/halanxtech"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
      <a href="https://www.twitter.com/halanxtech"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
      <a href="https://www.instagram.com/halanxtech"><i id="social-gp" class="fa fa-instagram fa-3x social"></i></a>

   </div>
 </div>

 <div class="row row_12">
   <span class="glyphicon glyphicon-copyright-mark"> Halanx 2017 </span>
 </div>
</div>


 </body>
 </html>