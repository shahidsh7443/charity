<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en"><!--<![endif]--><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Responsive NGO ( Non Profit Organization ) Template : GIVE HELP</title>
    <!--  Bootstrap Style -->
  	  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <!--  Google Font Style -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet" type="text/css">
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
  <!--===============================================================================================-->
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="css/util.css">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
  <!--===============================================================================================-->

</head>
<body onload="getLocation()">
<div class="hameid-loader-overlay">
<img src="images/load1.gif"></img></div>
<style>
.hameid-loader-overlay {
        width: 100%;
        height: 100%;
        background:rgba(255,255,255,0.8);
        z-index: 99999;
        position: fixed;
        display: none;
    }
    .hameid-loader-overlay img
    {
    position: absolute;
    z-index: 99999999;
    left: 45%;
    top: 40%;
    width: 100px;
  }
</style>

<!----------------UPLOAD Script STart-------------------------------------------->
<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
  var x = position.coords.latitude;
  var y = position.coords.longitude;
   // x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
$('.ltd').val(x);
$('.lgt').val(y);
  var now = new Date();
  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];  var day = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  // Create an array with the current month, day and time
    var date = [ months[now.getMonth()],now.getDay(),day[now.getDay()], now.getFullYear() ];

  // Create an array with the current hour, minute and second
    var time = [ now.getHours(), now.getMinutes(), now.getSeconds() ];

  // Determine AM or PM suffix based on the hour
    var suffix = ( time[0] < 12 ) ? "AM" : "PM";

  // Convert hour from military time
    time[0] = ( time[0] < 12 ) ? time[0] : time[0] - 12;

  // If hour is 0, set it to 12
    time[0] = time[0] || 12;

  // If seconds and minutes are less than 10, add a zero
    for ( var i = 1; i < 3; i++ ) {
      if ( time[i] < 10 ) {
        time[i] = "0" + time[i];
      }
    }

  // Return the formatted string
    var tmp=date.join(" ") + " -- " + time.join(":") + " " + suffix;
  $('.tms').val(tmp);
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>

<!--End-------------------------------->
<style>

  #toast, #toast1, #toast2, #toast3 {
    visibility: hidden;
    max-width: 50px;
    height: 50px;
    /*margin-left: -125px;*/
    margin: auto;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    position: fixed;
    z-index: 1;
    left: 0;right:0;
    bottom: 55%;
    font-size: 17px;
    white-space: nowrap;
}
#toast #img, #toast1 #img1, #toast2 #img2, #toast3 #img3 {
	width: 100px;
	height: 50px;

    float: left;
    padding-top: 13px;
    padding-bottom: 16px;

    box-sizing: border-box;


    background-color: #111;
    color: #fff;
}
#toast #desc, #toast1 #desc1, #toast2 #desc2, #toast3 #desc3 {


    color: #fff;

    padding: 16px;

    overflow: hidden;
	white-space: nowrap;
}

#toast.show ,#toast1.show, #toast2.show, #toast3.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
}
#toast2.show{
    visibility: visible;
    -webkit-animation: fadein1 0.5s, expand1 0.5s 0.5s,stay1 3s 1s, shrink1 0.5s 2s, fadeout1 0.5s 2.5s;
    animation: fadein1 0.5s, expand1 0.5s 0.5s,stay1 3s 1s, shrink1 0.5s 4s, fadeout1 0.5s 4.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 55%; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: : 55%; opacity: 1;}
}

@-webkit-keyframes expand {
    from {min-width: 50px}
    to {min-width: 350px}
}

@keyframes expand {
    from {min-width: 50px}
    to {min-width: 350px}
}
@-webkit-keyframes stay {
    from {min-width: 350px}
    to {min-width: 350px}
}

@keyframes stay {
    from {min-width: 350px}
    to {min-width: 350px}
}
@-webkit-keyframes shrink {
    from {min-width: 350px;}
    to {min-width: 50px;}
}

@keyframes shrink {
    from {min-width: 350px;}
    to {min-width: 50px;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 60px; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 55%; opacity: 1;}
    to {bottom: 55%; opacity: 0;}
}

/****************************toast2*************************/

@-webkit-keyframes fadein1 {
    from {bottom: 0; opacity: 0;}
    to {bottom: 55%; opacity: 1;}
}

@keyframes fadein1 {
    from {bottom: 0; opacity: 0;}
    to {bottom: : 55%; opacity: 1;}
}

@-webkit-keyframes expand1 {
    from {min-width: 50px}
    to {min-width: 500px}
}

@keyframes expand1 {
    from {min-width: 50px}
    to {min-width: 500px}
}
@-webkit-keyframes stay1 {
    from {min-width: 500px}
    to {min-width: 500px}
}

@keyframes stay1 {
    from {min-width: 500px}
    to {min-width: 500px}
}
@-webkit-keyframes shrink1 {
    from {min-width: 500px;}
    to {min-width: 50px;}
}

@keyframes shrink1 {
    from {min-width: 500px;}
    to {min-width: 50px;}
}

@-webkit-keyframes fadeout1 {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 60px; opacity: 0;}
}

@keyframes fadeout1 {
    from {bottom: 55%; opacity: 1;}
    to {bottom: 55%; opacity: 0;}
}


/*******************end*************************************/


#loading{
display:none;
position: absolute;
left: 40%;
margin-top: -5px;
z-index: 555;

}
@media only screen and (max-width:480px)
{
  #loading
  {
    position: absolute;
    z-index: 77;
    right: 15%;
    margin-top: 50px;
  }
  #toast, #toast1, #toast2, #toast3
  {
      visibility: hidden;
    top: 80%;
    font-size: 10px;
  }
  #toast #img, #toast1 #img1, #toast2 #img2, #toast3 #img3 {
      padding-top: 13px;
      padding-bottom: 16px;
  }
  #toast.show ,#toast1.show, #toast2.show, #toast3.show {
      visibility: visible;
      -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
  }
  #toast #desc, #toast1 #desc1, #toast2 #desc2, #toast3 #desc3 {
    padding-top: 13px;
    padding-bottom: 16px;
  }
  @-webkit-keyframes fadein {
      from {top: 0; opacity: 0;}
      to {top: 80%; opacity: 1;}
  }

  @keyframes fadein {
      from {top: 0; opacity: 0;}
      to {top : 80%; opacity: 1;}
  }

  @-webkit-keyframes expand {
      from {min-width: 50px}
      to {min-width: 350px}
  }

  @keyframes expand {
      from {min-width: 50px}
      to {min-width: 350px}
  }
  @-webkit-keyframes stay {
      from {min-width: 350px}
      to {min-width: 350px}
  }

  @keyframes stay {
      from {min-width: 350px}
      to {min-width: 350px}
  }
  @-webkit-keyframes shrink {
      from {min-width: 350px;}
      to {min-width: 50px;}
  }

  @keyframes shrink {
      from {min-width: 350px;}
      to {min-width: 50px;}
  }

  @-webkit-keyframes fadeout {
      from {bottom: 30px; opacity: 1;}
      to {bottom: 60px; opacity: 0;}
  }

  @keyframes fadeout {
      from {top: 80%; opacity: 1;}
      to {top: 95%; opacity: 0;}
  }
  .upbtn
  {
    margin-top: 25px;
  }
 .hameid-loader-overlay img
    {
    position: absolute;
    z-index: 99999999;
    left: 35%;
    top: 40%;
    width: 100px;
  }

}
</style>





  <script type="text/javascript">

  $('.validate-form .input100').each(function(){
      $(this).focus(function(){
         hideValidate(this);
     });
  });

  function showValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).addClass('alert-validate');
  }

  function hideValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).removeClass('alert-validate');
  }

	function _validate(){
		var name = $('.validate-input input[name="name"]');
		var email = $('.validate-input input[name="email"]');
		var message = $('.validate-input textarea[name="message"]');
		var contact = $('.validate-input input[name="Contact"]');
		var issue = $('.input100-select select[name="Issue"]');

			var check = true;
			if($(name).val().trim() == ''){
					showValidate(name);
					check=false;
			}


			if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
					showValidate(email);
					check=false;
			}
			if($(contact).val().match(/^[7-9]\d{9}$/) == null) {
					showValidate(contact);
					check=false;
			}

			if($(message).val().trim() == ''){
					showValidate(message);
					check=false;
			}
			return check;
	}

	$( document ).ready(function() {







	$("#charity").submit(function(e){
	e.preventDefault();
	var check = _validate();
  var name = $("#nm").val();
	var email = $("#em").val();
	var contact = $("#cnt").val();
	var issue = $("#iss").val();
	var message = $("#msg").val();

	if(!check)
	{
	if(name=="" || email=="" || contact=="" || issue=="" || message=="")
	{
		$(".container-contact100-form-btn").closest("div").append("<span class='error' style='color:red;font-weight:600;display:inline-block;font-size:17px;position:  absolute;margin-top: -30px;margin-left: -5px;'>Please fill all the fields</span>");
		return;
	}
return;
}
	var form_data = new FormData(this);
	//$(this).serialize(),
	$.ajax({
	                url: 'http://projects.razorbee.com/arrisventures/mail.php',
	                type: 'post',
	                dataType : 'json',
	                           contentType: false,
	                           cache: false,
	                           processData:false,
	                data: form_data,
	                success: function(  ){
	              $(".container-contact100-form-btn").closest("div").append("<span class='error' style='color:green;font-weight:600;display:inline-block;font-size:17px;position:  absolute;margin-top: -30px;margin-left: -5px;'>Message sent successfully</span>");
                     $('#charity')[0].reset();
                 },
	                error: function( aa ){
	                 $(".container-contact100-form-btn").closest("div").append("<span class='error' style='color:red;font-weight:600;display:inline-block;font-size:17px;position:  absolute;margin-top: -30px;margin-left: -5px;'>Unable to send message</span>");

                  }
	            });


	});
  $("#uploadfrm").submit(function(e){
	e.preventDefault();
  var file = $(".upl").text();
  var add = $(".addr").val();
  if(file == "" && add == "" )
  {
    var x = document.getElementById("toast2");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    return;
  }
  else if(file == "")
  {
    var y = document.getElementById("toast1");
  y.className = "show";
  setTimeout(function(){ y.className = y.className.replace("show", ""); }, 5000);
    return;
  }
  else if(add == "")
  {
    var z = document.getElementById("toast3");
  z.className = "show";
  setTimeout(function(){ z.className = z.className.replace("show", ""); }, 5000);
    return;
  }
     $(".hameid-loader-overlay").show();
//  $("#loading").show();
	var form_data = new FormData(this);
	//$(this).serialize(),
	$.ajax({
	                url: 'upload.php',
	                type: 'post',
	                dataType : 'json',
	                           contentType: false,
	                           cache: false,
	                           processData:false,
	                data: form_data,
	                success: function( data ){
	              $(".hameid-loader-overlay").fadeOut(500);
                var x = document.getElementById("toast");
           x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
                $('#uploadfrm')[0].reset();
                              $('.sfl span').text("");
                 },
	                error: function( data ){
                  //$("#loading").hide();
                  $(".hameid-loader-overlay").hide();
                    var x = document.getElementById("toast");
               x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
                    $('#uploadfrm')[0].reset();
                                  $('.sfl span').text("");
                  }
	            });


	});
	});
	</script>
     <div id="pre-div" style="display: none;">
        <div id="loader" style="display: none;">
        </div>
    </div>
    <!--/. End Preloader -->

    <div id="home" class="navbar navbar-default move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" class="navbar-brand-logo " alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#home">HOME <i class="fa fa-bars"></i>
                            <span>Introduction</span>

                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="#about">ABOUT <i class="fa fa-bars"></i>
                            <span>Who We Are?</span>

                        </a>

                    </li>



                    <li class="dropdown">
                        <a href="#impact">IMPACT  <i class="fa fa-bars"></i>
                            <span>What We Done ?</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="#recent-events">EVENTS<i class="fa fa-bars"></i>
                            <span>Recent Events</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="#contact">CONTACT <i class="fa fa-bars"></i>
                            <span>Reach us Here</span>
                        </a>

                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--./ NAV BAR END -->
    <div class="header-sec-bar">
        <span>
            <i class="fa fa-envelope-o "></i>support@yourdomain.com
            <i class="fa fa-phone "></i>+61-123-456-789
            <i class="fa fa-globe"></i>www.yourdomain.com

        </span>

    </div>
    <!--./ HEADER SECTION BAR END -->
    <div id="main-head">

        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-12">


                    <h2>RAISE FUNDS</h2>
                    <h5>We have raised fund of  </h5>
                    <span><strong><i class="fa fa-dollar"></i>3,10,345 </strong></span>
                    <h5>but for this year we require</h5>
                    <span><strong><i class="fa fa-dollar"></i>3,90,000 </strong></span>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Donation Amount">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-style-1 btn-lg ">DONATE NOW</button>
                        </div>

                    </form>


                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item">

                                <img src="assets/img/slider/h1.jpg" alt="">
                            </div>
                            <div class="item active left">
                                <img src="assets/img/slider/h2.jpg" alt="">
                            </div>
                            <div class="item next left">
                                <img src="assets/img/slider/h3.jpg" alt="">
                            </div>
                        </div>
                        <!--INDICATORS-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-slider" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-slider" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-slider" data-slide-to="2" class=""></li>
                        </ol>
                        <!--PREVIUS-NEXT BUTTONS-->
                        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                            <i class="fa fa-angle-left fa-2x control-icon main-color"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-example" data-slide="next">
                            <i class="fa fa-angle-right fa-2x control-icon main-color"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--./ MAIN HEADER SECTION END -->
    <div id="about">
        <div class="container">
            <div class="row text-center" data-scroll-reveal="enter from the bottom after .3s" data-scroll-reveal-id="1" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2>ABOUT GIVE HELP </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="row pad-low">
                <div class="col-lg-4 col-md-4 hover-color" data-scroll-reveal="enter from the left after .6s" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-desktop fa-5x  icon-round "></i>

                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Child Care Center</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-scroll-reveal="enter from the bottom after .9s" data-scroll-reveal-id="3" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-paperclip fa-5x  icon-round"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Educate Children</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-scroll-reveal="enter from the right after .6s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-recycle fa-5x  icon-round  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Physical Growth</h3>
                            <p>
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                                Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc.
                            </p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--./ ABOUT SECTION END -->
    <div id="budget">
      <div id="toast"><div id="img">Thank you</div><div id="desc">File Uploaded successfully</div></div>
      <div id="toast1"><div id="img1">Info:</div><div id="desc1">Please choose a file to upload</div></div>
      <div id="toast2"><div id="img2">Info:</div><div id="desc2">Please Choose a file to upload and enter Address</div></div>
      <div id="toast3"><div id="img3">Info:</div><div id="desc3">Please enter your address</div></div>
  <!--<img id="loading" src="images/loadd.gif" />-->
<div class="container-fluid">
<h2 class="text-center" style="padding-bottom:25px;color:#333333">Upload Files</h2>
  <div class="row text-center">
    <div class="col-sm-12">
      <form id="uploadfrm" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-4 sfl">
      <input type="file" name="file" id="file-7" class="inputfile inputfile-6" style="width: 0.1px;height: 0.1px;opacity: 0;overflow: hidden;position: absolute;z-index: -1;" accept="image/*,video/*,audio/*,.pdf,.xls,.ppt"/>
  		<label for="file-7"><span class="upl"></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file</strong></label>
</div>
<div class="col-sm-3">
      <input type="text" name="address" class="addr" placeholder="Enter your Address" style="padding-left:10px;width: 325px;padding: 15px;height:  45px;border-radius:  5px;">
</div>
</div>
      <input type="hidden" name="latitude" class="ltd" value="12.9428269">
      <input type="hidden" name="longitude" class="lgt" value="77.6091807">
        <input type="hidden" name="ipadd" class="ipa" value="103.16.69.21">
        <input type="hidden" name="stamp" class="tms" value="April 3 Wednesday 2018 -- 10:50:59 PM">
      </div>
    </div>
    <div class="row text-center" style="margin-top: 15px;">
      <div class="col-sm-12">
      <button type="submit" name="btn-upload" class="btn btn-style-2 upbtn" style="width:  125px;font-size:  16px;font-family:  Poppins-Regular, sans-serif;color:white;">Upload</button>
      </form>
      <h5 class="text-center" style="color:white;margin-top:10px;">[Supported Files/Formats(PDF,XLS,Images,Audio,Video)]</h5></div>
    </div>
    </div>
  </div>
    <!--./ BUDGET SECTION END -->
    <div id="impact">
        <div class="container-contact100">
      		<div class="wrap-contact100">
      			<form class="contact100-form validate-form" id="charity" method="post">
      				<span class="contact100-form-title">
      					Help
      				</span>
      <div class="row">
      	<div class="col-lg-6 col-xs-12">
      					<div class="wrap-input100 validate-input" data-validate="Name Required">
      						<span class="label-input100">Name</span>
      						<input class="input100" type="text" name="name" id="nm" maxlength="20" placeholder="Enter your Name">
                   	<input class="input100" type="hidden" name="subject" id="sbj" value="Request for help">
      							<input class="input100" type="hidden" name="to" id="too" value="shahidrazorbee@gmail.com">
      						<span class="focus-input100"></span>
      					</div>
      				</div>
      <div class="col-lg-6 col-xs-12">
      				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
      					<span class="label-input100">Email</span>
      					<input class="input100" type="text" name="email" id="em" maxlength="50" placeholder="Enter your email addess">
      					<span class="focus-input100"></span>
      				</div>
      			</div>
      <div class="col-lg-6 col-xs-12">
      				<div class="wrap-input100 input100-select" data-validate="Please select an Issue">
      					<span class="label-input100">Issue</span>
      					<div>
      						<select class="selection-2 select2-hidden-accessible" name="Issue" id="iss" tabindex="-1" aria-hidden="true">
      							<option disabled="disabled" selected="selected" value="">Choose issue</option>
      							<option value="House">House</option>
      							<option value="Education">Education</option>
      							<option value="Others">Others</option>
      						</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 115px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-iss-container" style="display:  none;"><span class="select2-selection__rendered" id="select2-iss-container" title="Choose issue">Choose issue</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
      					</div>
      					<span class="focus-input100"></span>
      				</div>
      </div>
      <div class="col-lg-6 col-xs-12">
      				<div class="wrap-input100 validate-input" data-validate="Enter Valid Mobile Number">
      					<span class="label-input100">Contact Number</span>
      					<input class="input100" type="text" name="Contact" id="cnt" maxlength="10" placeholder="Enter your Contact Number">
      					<span class="focus-input100"></span>
      				</div>
      			</div>
      <!--				<div class="wrap-input100 input100-select">
      					<span class="label-input100">Budget</span>
      					<div>
      						<select class="selection-2" name="budget">
      							<option>Select Budget</option>
      							<option>1500 $</option>
      							<option>2000 $</option>
      							<option>2500 $</option>
      						</select>
      					</div>
      					<span class="focus-input100"></span>
      				</div>
      </div>-->
      <div class="col-lg-12 col-xs-12">
      				<div class="wrap-input100 validate-input" data-validate="Message is required">
      					<span class="label-input100">Message</span>
      					<textarea class="input100" name="message" id="msg" placeholder="Your message here..."></textarea>
      					<span class="focus-input100"></span>
      				</div>
      </div>
      </div>
      				<div class="container-contact100-form-btn">
      					<div class="wrap-contact100-form-btn">
      						<div class="contact100-form-bgbtn"></div>
      						<button class="contact100-form-btn" id="submit_button">
      							<span>
      								Submit
      								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      							</span>
      						</button>
      					</div>
      				</div>
      			</form>
      		</div>
      	</div>

        	<div id="dropDownSelect1"></div>
    </div>
    <!--./ IMPACT SECTION END -->
    <div class="reviews-section">

            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 ">
                        <h2>DONATOR REVIEWS</h2>
                        <div id="reviews" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#reviews" data-slide-to="0" class=""></li>
                                <li data-target="#reviews" data-slide-to="1" class="active"></li>
                                <li data-target="#reviews" data-slide-to="2" class=""></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item">
                                    <div class="container center">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                            <h4><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. <i class="fa fa-quote-right"></i></h4>

                                            <h5 class="pull-right"><strong class="c-black">Lorem Dolor</strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="container center">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                            <h4><i class="fa fa-quote-left"></i>Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. <i class="fa fa-quote-right"></i></h4>

                                            <h5 class="pull-right"><strong class="c-black">Faucibus luctus</strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="container center">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                            <h4><i class="fa fa-quote-left"></i>Sed ultricies, libero ut  fringilla, ante elit luctus lorem, a egestas dui metus a arcu condimentum. <i class="fa fa-quote-right"></i></h4>

                                            <h5 class="pull-right"><strong class="c-black">Sed ultricies</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!--./ REVIEWS SECTION END -->
     <div id="vedio-sec">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <h3>How We Work ? Checkout Vedio.</h3>

                    <p data-scroll-reveal="enter from the left after 0.1s" data-scroll-reveal-id="5" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nulla pretium lectus vel<b> justo iaculis </b>blandit. Nulla facilisi.
                       In hac habitasse platea dictumst. Fusce risus leo, convallis vitae bibendum in, vestibulum a tellus.
                    </p>


                    <ul>
                        <li data-scroll-reveal="enter from the left after 0.5s" data-scroll-reveal-id="6" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                            <b>Lorem ipsum </b>dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>

                        <li data-scroll-reveal="enter from the left after 0.9s" data-scroll-reveal-id="7" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">Lorem ipsum dolor <b>sit amet, consectetur </b>adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li data-scroll-reveal="enter from the left after 1.3s" data-scroll-reveal-id="8" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                            <b>Nulla lorem ipsum </b>sit amet, consectetur adipiscing elit.
                        </li>

                    </ul>



                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the right after .7s" data-scroll-reveal-id="9" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">

                    <iframe src="http://player.vimeo.com/video/18312392" class="vedio-style"></iframe>
                </div>

            </div>

        </div>
    </div>
    <!--./ VEDIO SECTION END -->
    <div id="recent-events">
        <div class="container">
            <div class="row text-center" data-scroll-reveal="enter from the bottom after .5s" data-scroll-reveal-id="10" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2>RECENT EVENTS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="row pad-low " data-scroll-reveal="enter from the top after .7s" data-scroll-reveal-id="11" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/1.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/1.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/2.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/2.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/3.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/3.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/4.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/4.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/5.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/5.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/6.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/6.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/7.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/7.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/portfolio/small/8.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-events-inner">
                                <h3><a href="#">Consecte Adipis </a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie</p>
                                <a class="preview" href="assets/img/portfolio/big/8.jpg"><i class="fa fa-eye"></i>View Event held 27 Jun 2014</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--./ EVENT SECTION END -->
    <section id="contact">
        <div class="container">


                <div class="row text-center" data-scroll-reveal="enter from the bottom after .5s" data-scroll-reveal-id="12" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h2>CONTACT US</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <br>
                    </div>

                </div>
             <div class="row ">
                  <div class="col-lg-6  col-md-6  col-sm-6 cont-div">
                    <form>
                        <div class="form-group" data-scroll-reveal="enter from the left after .6s" data-scroll-reveal-id="13" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                            <input type="text" class="form-control" required="required" placeholder="Your Name">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .7s" data-scroll-reveal-id="14" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                            <input type="text" class="form-control" required="required" placeholder="Your Email">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .8s" data-scroll-reveal-id="15" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                            <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .9s" data-scroll-reveal-id="16" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                            <button type="submit" class="btn btn-style-2 ">Submit Request</button>
                        </div>

                    </form>
                </div>
                      <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" data-scroll-reveal="enter from the right after .8s" data-scroll-reveal-id="17" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <h3><strong>OUR LOCATION </strong></h3>
                    <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p><strong>ADDRESS :</strong> 2234/908, Newyork City , USA - 002309</p>
                    <br>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control " autocomplete="off" placeholder="Enter your email" required="">
                            <span class="input-group-btn">
                                <button class="btn  btn-primary " type="button">Subdcribe!</button>
                            </span>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--./ Contact End -->
    <div id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4" id="about-ftr">
                    <h3><span>A Small Introduction</span></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Praesent suscipit sem vel ipsum elementum venenatis.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             Praesent suscipit sem vel ipsum elementum venenatis.
                      Praesent suscipit sem vel ipsum elementum venenatis.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><span>Latest Donations</span></h3>
                    <div id="blog-footer-div">
                        <div class="media">
                            <div class="pull-left">
                                <img src="assets/img/user2.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading">JHON DEO TEAMA</span>
                                <small class="muted">$ 5000 in Cash</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="assets/img/user.gif" class="img-thumbnail" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading">JUSTIN DECOSTA</span>
                                <small class="muted">$ 4000 by Cheque</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h3><span>Quick Donation</span></h3>
                    <div>
                        234/90, Newyork Street , USA
                    <br>
                        Call: +61-123-456-789
                        <br>
                        E-mail: support@yourdomin.com

                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-style-2 ">DONATE FOR A CHILD</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="footser-end">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    2014 All Rights Reserved |  by <a href="http://www.binarytheme.com/" target="_blank" style="color: #fff"> binarytheme.com</a>

                </div>
            </div>

        </div>
    </div>
    <!--./ footer-end End -->
      <div class="move-me">


    <a href="#home" class="scrollup"><i class="fa fa-chevron-up"></i></a>
          </div>
     <!--END SCROLLUP LINK SECTION-->
   <!--===============================================================================================-->
   	<script src="vendor/select2/select2.min.js"></script>
   	<script>
   		$(".selection-2").select2({
   			minimumResultsForSearch: 20,
   			dropdownParent: $('#dropDownSelect1')
   		});
   	</script>
   <!--===============================================================================================-->
   <!--===============================================================================================-->
   	<script src="js/main.js"></script>

   	<!-- Global site tag (gtag.js) - Google Analytics -->
   <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-23581568-13');
   </script>
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    	<script src="js/custom-file-input.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  knob Scripts -->
    <script src="assets/js/jquery.knob.js"></script>
     <!--  SCROLL REVEAL Scripts -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
    <script>

    </script>


</body></html>
