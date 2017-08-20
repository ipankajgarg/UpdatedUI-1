 
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

<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<meta name="theme-color" content="#ffffff">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
  <link rel="canonical" href="http://www.halanx.com/"/>
  <meta name="robots" content="en_GB"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Halanx"/>
  <meta property="og:url" content="http://halanx.com"/>
  <meta property="og:site_name" content="Halanx">
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:description" content="Get groceries and meals delivered from your favourite store and restaurant in as little as an hour"/>
  <meta name="twitter:title" content="Halanx">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="store.css">
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

	<div class="row">
		<div class="col-md-12">
		  <div class="row row_4">Grow your Business</div>
	      <div class="row_2">1. Get more customers with less staff</div>
	      <div class="row_3">Our app and site will put your products in front of whole city.</div>
	      <div class="row_2">2. Do what you care about</div>
	      <div class="row_3">We will take care of customers and logistics before,during and after delivery.</div>
	    </div>
	</div>
</div>

<div class="container-fluid bg2" name="toTop" id="toPos">
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
		  <div class="row_6">1.Signup</div>
		      <div class="row_5">Give us your contact info</div>
		      <div class="row_6">2.We'll contact you</div>
		      <div class="row_5">Our Sales team will get back to you quickly and we'll collect any more info we need to get you listed</div>
		      <div class="row_6">3.Start getting orders this week</div>
		      <div class="row_5">Once you're listed, you'll start receiving orders from our customers</div>
        </div>

        <div class="col-md-4 col-md-offset-1">
        	<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
        		<fieldset>
          		<div class=" row new">Apply Today!</div>

          		<div class="row">
          		<div class="col-md-12">
            	<div class="form-group">
              	<label for="name">Store Name</label>
                <input type="text" name="storename" placeholder="Enter the Store Name"   class="form-control" id="storename"/>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
              	<div class="form-group">
                <label for="lastname">Store Address</label>
                <input type="text" name="storeaddress" placeholder="Enter the Store Address"  class="form-control" id="storeaddress"/>
              	</div>
              	</div>
              	</div>

              	<div class="row">
              	<div class="col-md-6">
	                <div class="form-group">
	                <label for="name">First Name</label>
	                <input type="text" name="firstname" placeholder="Enter first name"  class="form-control" id="firstname"/>
	                </div>
	            </div>

	            <div class="col-md-6">
                <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" name="lastname" placeholder="Enter lastname" required class="form-control" id="password" />
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label for="name">Mobile Number</label>
                <input type="text" name="mobilenumber" placeholder="Enter the contact number"   class="form-control" id="mobilenumber" />
                </div>
                </div>
                 

                
                <div class="col-md-6">
                <div class="form-group">
                <label for="name">Email Id</label>
                <input type="text" name="email" placeholder="Enter email"   class="form-control" id="email" />
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Enter password"   class="form-control" id="password" />
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-8 col-md-offset-4">
                <div class="form-group">
                <input type="submit" value="Continue" id="submit"   class="btn btn-danger b1"/>
                </div>
                </div>
                </div>
                </fieldset>
                <span class="text text1"><?php if(isset($response["user"])) {echo $response["user"];}   ?></span>
            </form>
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
<script>
 $(function(){
    var navbar = $('.navbar');
    $(window).scroll(function(){
        if($(window).scrollTop() <= 40){
          navbar.css('box-shadow', 'none');
        } else {
          navbar.css('box-shadow', '0px 4px 20px rgba(0, 0, 0, 0.3)'); 
        }
    });  
})
$(function(){

  // name your elements here
  var stickyElement   = '.panel-affix',   // the element you want to make sticky
    bottomElement   = '#fake-footer'; // the bottom element where you want the sticky element to stop (usually the footer) 

  // make sure the element exists on the page before trying to initalize
  if($( stickyElement ).length){
    $( stickyElement ).each(function(){

      // let's save some messy code in clean variables
      // when should we start affixing? (the amount of pixels to the top from the element)
      var fromTop = $( this ).offset().top, 
        // where is the bottom of the element?
        fromBottom = $( document ).height()-($( this ).offset().top + $( this ).outerHeight()),
        // where should we stop? (the amount of pixels from the top where the bottom element is)
        // also add the outer height mismatch to the height of the element to account for padding and borders
        stopOn = $( document ).height()-( $( bottomElement ).offset().top)+($( this ).outerHeight() - $( this ).height()); 

      // if the element doesn't need to get sticky, then skip it so it won't mess up your layout
      if( (fromBottom-stopOn) > 200 ){
        // let's put a sticky width on the element and assign it to the top
        $( this ).css('width', $( this ).width()).css('top', 0).css('position', '');
        // assign the affix to the element
        $( this ).affix({
          offset: { 
            // make it stick where the top pixel of the element is
            top: fromTop - 80,  
            // make it stop where the top pixel of the bottom element is
            bottom: stopOn
          }
        // when the affix get's called then make sure the position is the default (fixed) and it's at the top
        }).on('affix.bs.affix', function(){ $( this ).css('top', '80px').css('position', ''); });
      }
      // trigger the scroll event so it always activates 
      $( window ).trigger('scroll'); 
    }); 
  }

});

//Offset scrollspy height to highlight li elements at good window height
$('body').scrollspy({
  offset: 80
});

//Smooth Scrolling For Internal Page Links
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
    $('html,body').animate({
      scrollTop: target.offset().top
    }, 1000);
    return false;
    }
  }
  });
});



 </script>

</html>