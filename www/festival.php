<!DOCTYPE html>
<html>
<head>
<title>
Beer festival app
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/css.css">

</head>
<body>

<div data-role="header" data-position="fixed">
	<h1>Choose your Festivals!</h1>
	<a href="javascript:history.back()" data-role="button" data-icon="back">Back</a>
</div>


  <h2>2017 Festivals</h2>
  <h2>Which festival are you attending?</h2>
  <br>

  <div class="festlogo">
<a href="birmingham/birminghamhome.php"><img src="img/birminghambeerfest.png" width="20%" height="20%"></a>
<a href="worcester/worcesterhome.php"><img src="img/wbeerfest.png" width="14%" height="14%"></a>
<a href="london/londonhome.php"><img src="img/londonbeerfest.png" width="26%" height="26%"></a>
<a href="bromsgrove/bromsgrovehome.php"><img src="img/bromsbeerfest.png" width="60%" height="60%"></a>
</div>

<div data-role="footer" data-position="fixed" data-id="myfooter">
<div data-role="navbar">
<?php include 'menu.php';?>

</div>
</div>

</body>
</html>