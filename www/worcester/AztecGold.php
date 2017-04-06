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
	<script type="text/javascript" src="js/starjs.js"></script>
	<link href="css/rating_simple.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/rating_simple.js"></script>
</head>
<body>

<div data-role="header" data-position="fixed">
	<h1>Aztec Gold</h1>
	<a href="javascript:history.back()" data-role="button" data-icon="back">Back</a>
</div>


<h2>2017 Worcester Festivals</h2>

<h3>Aztec Gold</h3>
<h3>4.10%</h3>

<img src="img/aztecgold.png" align="left">
<br><br><br>
<p>Single hopped pale ale shwocasing the Azacca hop from USA. Plenty of citrus and tropical fruit flavours. Refreshing bitter finish.
</p>

<input name="my_input" value="3" id="rating_simple" type="hidden">

    <hr>
    <script language="javascript" type="text/javascript">
$(function() {
$("#rating_simple").webwidget_rating_simple({
rating_star_length: '5',
rating_initial_value: '',
rating_function_name: '',
directory: 'Jquery-simple-rating-system-with-small-stars_files/'
});
});
</script>

<div data-role="footer" data-position="fixed">
<div data-role="navbar">
  <ul>
  <li><a href="index.html" class="ui.btn-active"><img src="img/home.png" width="100%" height="100%"></a></li>
  <li><a href="beers.html" class="ui.btn-active"><img src="img/beermug3.png" width="100%" height="100%"></a></li>
  <li><a href="festival.html" class="ui.btn-active"><img src="img/festival2.png" width="100%" height="100%"></a></li>
  <li><a href="brewery.html" class="ui.btn-active"><img src="img/brewery3.png" width="100%" height="100%"></a></li>
  <li><a href="camera.html" class="ui.btn-active"><img src="img/camera.png" width="100%" height="100%"></a></li>

</div>
</div>

</body>
</html>