<!DOCTYPE html>
<html>
<head>
<title>
Simple Map
</title>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="js/camera.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/css.css">

    <meta charset="utf-8">

  </head>
<body>
<div data-role="header" data-position="fixed">
	<h1>Pictures</h1>
</div>

<div data-role="content">	
       
       <label for="phonegapcamera"> Use PhoneGap to take an image </label>
       	<button id="phonegapcamera" onclick="capturePhoto();">Capture Photo</button> <br>
       
		<img style="display:none;width:200px;height:200px;" id="image" src="" />
        
	</div>

<div data-role="footer" data-position="fixed">

<div data-role="navbar">
<?php include 'menu.php';?>
</div>
</div>
  
  </body>
</html>
