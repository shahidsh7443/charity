<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body onload="getLocation()">
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
$.getJSON("https://jsonip.com?callback=?", function(data) {
			var ip=data.ip;
			$('.ipa').val(ip);
		});
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
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body" onload="getLocation()">
	<form action="upload.php" method="post" enctype="multipart/form-data" >
	<input type="file" name="file" class="upl" accept="audio/*,video/*,image/*"/>
	<input type="text" name="address" class="addr" placeholder="Enter your Address"/>
	<input type="hidden" name="latitude" class="ltd"/>
	<input type="hidden" name="longitude" class="lgt"/>
		<input type="hidden" name="ipadd" class="ipa"/>
		<input type="hidden" name="stamp" class="tms"/>
	<button type="submit" name="btn-upload" class="btn btn-success">Upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
</body>
</html>
