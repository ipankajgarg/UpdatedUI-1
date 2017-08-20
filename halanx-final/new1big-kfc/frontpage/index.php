<?php


session_start();
 
$user['mobilenumber']= $_SESSION['mobilenumber'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
<script src="libs/angular.min.js"></script>
<script src="js/module.js"></script>
<script src="js/factory.js"></script>
<script src="js/controller.js"></script>
<style>
body{
  background:#ffffff;
}
.navbar-bg{
  font-family:"Sans",Verdana,"sans-serif";
  font-weight:bold;
  font-size:2.5em;
  color:#e50000;
  margin-top:5px;
}
#header {
  background: #ffffff;
  border-bottom: 1px rgba(0, 0, 0, 0.07) solid;
  z-index: 99;
  &.--not-top {
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
  }
}
* {
  transition-duration: 0.2s;
}
 
#top-shadow {
position: fixed;
top: 0;
left: 20px;
width: 100%;
height: 60px;
z-index: 999;
-webkit-box-shadow: 0 8px 8px rgba(211, 211, 211, 0.8);
-moz-box-shadow: 0 8px 8px rgba(211, 211, 211, 0.8);
box-shadow: 0 8px 8px rgba(211, 211, 211, 0.8);
display: none;
}

.navbar.affix{  
top:0; 
width:100%;
}

 
.navbar{    
z-index:1000;  
}
.img-responsive{
  margin-top:-8px;
}
#content{
    margin-top: 100px;
}
#content ul{
/*    display: flex;*/
    padding: 0px;
    margin: 0px;
    text-align: center;
}
#content .image{
    width: 100%;
    height:100%;
}
#content a{
    text-transform: none;
}
#content .storename{
  font-family:"Sans",Verdana,"sans-serif";
  font-size:20px;
  color:#000000;
  text-decoration:none;
}
#content .storename a{
  color:#000000;
  text-decoration:none;
}
#content ul li{
    display: inline-block;
    width: 30%;
    background-color:#f6f6f6;
    border: 1px solid #d3d3d3;
    margin: 0px 20px;
    padding: 20px;
    border-radius: 20px;
}
#content .block{
    display: block;
}
 
.new{
  font-family:"Sans",Verdana,"sans-serif";
  font-size:20px;
  color:#000000;
  font-weight:bold;
  margin-bottom:15px;
  text-align:center;
  

}
.bg3{
  margin-top:30px;
}
.row_11{
  font-family: "Sans",Verdana,'sans-serif';
  font-size:1.5em;
   
}
.row_13{
  background:#000000;
  margin-top:0px;

 }

 .social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
 .row_12{
  background-color: #000000;
  color:#ffffff;
  font-size:1.5em;
   
  font-family:"Sans",Verdana,"sans-serif";
  text-align: center;
  padding-bottom:10px;
  margin-top:0px;
}
.col-md-2 a{
  color:#000000;

}
.col-md-2 a:hover{
  text-decoration:none;
  color:#ff0000;

}
.new1{
  width:50%;
   
}
@media(max-width:420px){
  #content .new1{
    width:100%;
  }
   .new1{
    background:#c0392b;
    
  }
}

/*content media query*/
@media(max-width:640px){
    #content ul li{
       margin: 0px 15px;
    }

    #content .image img{
      height:90px;
      width:100px;
    }
}
@media(max-width:420px){
    #content ul li{
        width: 45%;
        margin-top:10px;
        margin-left:2px;
    }
    #content ul li .storename{
        font-size: 15px;
        font-family:"Sans",Verdana,"sans-serif";
        color:#000000;
    }
    #content .image img{
     height:90px;
     width:100px;
    }
}
</style>
</head>
<body ng-app = "myapp" ng-controller="myctrl" data-spy="scroll" data-target="#myScrollspy">
 

      <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img src="https://s3-us-west-2.amazonaws.com/halanx-web/logo.png" class="img-responsive img-circle" width="50" height="50"> </a>
            <a class="navbar-brand navbar-bg" ><a href="../../../index.html">Halanx</a></a>
        </div>
        <!-- menu items -->
   
</nav>

      
  
  <div id="content" name="toTop" id="toPos">
  <div class="container-fluid" name="toTop" id="toPos">
      <div class="row">
      <div class="col-sm-12">
             <div class="storelist">
             <hr class="new1">
             <h1 class="new">Food</h1>
             <hr class="new1">
          <ul>
             
              <li ng-repeat= "store in stores" ng-click="select(store)">
                 <div class="image">
                    <a href="../food.html"> <img ng-src="{{store.StoreLogo}}" alt="" width="250" height="150"></a>
                 </div>
                  <a href="../food.html" class="storename">{{store.StoreName}}</a>
              </li>
             
          </ul>
         
      </div> 
      <div class="storelist">
              <hr class="new1">
              <h1 class="new">Grocery</h2>
              <hr class="new1">
          <ul>
             
              <li ng-repeat= "store in grocery" ng-click="select(store)">
                 <div class="image">
                    <a href="../main.html"> <img ng-src="{{store.StoreLogo}}" alt="" width="250" height="150"></a>
                 </div>
                  <a href="../main.html" class="storename">{{store.StoreName}}</a>
              </li>
             
          </ul>
      </div>
      </div>
        </div>
  </div>

  </div>
 </div>   

   <div class="container-fluid bg3">
  <div class="row row_11">
    <div class="col-md-2 col-xs-12 text-center"><a href="aboutus.html">About Us</a></div>
    <div class="col-md-2 col-xs-12 text-center"><a href="#">Careers</a></div>
    <div class="col-md-2 col-xs-12 text-center"><a href="#">Blog</a></div>
    <div class="col-md-2 col-xs-12 text-center"><a href="privacy.html">Privacy</a></div>
    <div class="col-md-2 col-xs-12 text-center"><a href="contactus.html">Contact Us</a></div>
    <div class="col-md-2 col-xs-12 text-center"><a href="terms.html">Terms</a></div>
  </div>

  <div class="row row_13">
    <div class="text-center center-block">
         <a href="https://www.facebook.com/halanxtech"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
       <a href="https://www.twitter.com/halanxtech"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
       <a href="https://www.instagram.com/halanxtech"><i id="social-gp" class="fa fa-instagram fa-3x social"></i></a>

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
      navbar.css('box-shadow', '0px 10px 20px rgba(0, 0, 0, 0.4)'); 
    }
});  
})
$(function(){


var stickyElement   = '.panel-affix',    
bottomElement   = '#fake-footer';  

if($( stickyElement ).length){
$( stickyElement ).each(function(){

   
  var fromTop = $( this ).offset().top, 
    
    fromBottom = $( document ).height()-($( this ).offset().top + $( this ).outerHeight()),
    
    stopOn = $( document ).height()-( $( bottomElement ).offset().top)+($( this ).outerHeight() - $( this ).height()); 

   
  if( (fromBottom-stopOn) > 200 ){
     
    $( this ).css('width', $( this ).width()).css('top', 0).css('position', '');
     
    $( this ).affix({
      offset: { 
        
        top: fromTop - 80,  
         
        bottom: stopOn
      }
    
    }).on('affix.bs.affix', function(){ $( this ).css('top', '80px').css('position', ''); });
  }
  
  $( window ).trigger('scroll'); 
}); 
}

});


$('body').scrollspy({
offset: 80
});


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
<script>
 localStorage.setItem('mobilenumber',"<?php echo $_SESSION['mobilenumber'];?>");
 </script>
</html>