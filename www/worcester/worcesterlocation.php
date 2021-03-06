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
	<link rel="stylesheet" type="text/css" href="css/css.css">

    <meta charset="utf-8">

  </head>
<body>
<div data-role="header" data-position="fixed">
	<h1>location</h1>
	<a href="javascript:history.back()" data-role="button" data-icon="back">Back</a>
</div>

<H1>Location</h1><p>Worcester Racecourse is a thoroughbred horse racing venue located in the city of Worcester, Worcestershire, England. 
Horse racing has taken place here since at least 1718. The beer festival has a section in the middle of the course with beers sold within a markey</p>
<iframe src="https://www.google.com/maps/d/embed?mid=1xNU8G54YvavDBABKeiZejXGMA7Q" width="340" height="280"></iframe>

<H1>Facilities</h1><p>The festival has numerous places to purchase food. Live music is payed in an adjasent markey. Toilets provided. Large outdoor area to enjoy when the sun shines</p>

<H1>Beers</h1><p>Worcester currently has 143 beers to try at the 2017 festival.</p>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>

<div data-role="footer" data-position="fixed">

<div data-role="navbar">
  <ul>
  <li><a href="../index.html" class="ui.btn-active"><img src="../img/home.png" width="60%" height="60%"></a></li>
  <li><a href="../beers.html" class="ui.btn-active"><img src="../img/beermug3.png" width="60%" height="60%"></a></li>
  <li><a href="../festival.html" class="ui.btn-active"><img src="../img/festival2.png" width="60%" height="60%"></a></li>
  <li><a href="../brewery.html" class="ui.btn-active"><img src="../img/brewery3.png" width="60%" height="60%"></a></li>
  <li><a href="../camera.html" class="ui.btn-active"><img src="../img/camera.png" width="100%" height="100%"></a></li>

</div>
</div>
  
  </body>
</html>
