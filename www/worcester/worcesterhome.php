<!DOCTYPE html>
<html>
<head>
<title>
Beers
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/css.css">

</head>
<body>
<div data-role="header" data-position="fixed">
	<h1>Worcester beer and Cider Festival</h1>
	<a href="javascript:history.back()" data-role="button" data-icon="back">Back</a>
</div>

<div class="worlogo">
<img src="../img/worcbeerfest.png" height="50%" width="80%";>
</div>

<ul data-role="listview">  
<li><a href="worcesterbeers.php" class="ui-btn ui-icon-home ui-btn-icon-left">BEERS</a><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
<li><a href="brewery.php" class="ui-btn ui-icon-eye ui-btn-icon-left">BREWERYS</a><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
<li><a href="worcesterlocation.php" class="ui-btn ui-icon-location ui-btn-icon-left">LOCATION MAP</a><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
<li><a href="weather.php" class="ui-btn ui-icon-cloud ui-btn-icon-left">WEATHER FORCAST</a><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
<li><a href="camera.php" class="ui-btn ui-icon-camera ui-btn-icon-left">CAMERA</a><span class="ui-icon ui-icon-arrowthick-1-n"></span></li>
</ul>

<div data-role="footer" data-position="fixed">
<div data-role="navbar">
<?php include 'menu.php';?>

</div>
</div>

  
  </body>
</html>
