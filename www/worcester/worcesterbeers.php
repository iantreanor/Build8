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
	<link rel="stylesheet" type="text/css" href="css/css.css">

</head>

<body>
<div data-role="header" data-position="fixed">
	<h1>Worcester beer and Cider Festival</h1>
    <a href="javascript:history.back()" data-role="button" data-icon="back">Back</a>
</div>





<h2>All the beers appearing at the Worcester festival</h2>
<form>
    <input id="filterTable-input" data-type="search" placeholder="Search for name, type, strength.......">
</form>

 <table id='nametable'>
  <tr>
    <th><b>Name</b></th>
    <th><b>Strength</b></th>
	<th><b>Type</b></th>
  </tr>

<tr><td>	<a href="aztecgold.php">Aztec Gold	</td><td>	4.10	%	</td><td>	Golden Ale	</td></tr>
<tr><td>	<a href="notjustjam.php">Not Just Jam	</td><td>	4.10	%	</td><td>	mild	</td></tr>
<tr><td>	<a href="stuckonblondes.php">Stuck on Blondes	</td><td>	3.90	%	</td><td>	Golden Ale	</td></tr>
<tr><td>	<a href="baddayattheoffice.php">Bad Day At The Office	</td><td>	5.00	%	</td><td>	Speciality	</td></tr>
<tr><td>	<a href="tenstoreymaltbomb.php">Ten Storey Malt Bomb	</td><td>	4.00	%	</td><td>	Speciality	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Farmers Pale	</td><td>	5.00	%	</td><td>	IPA	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Sandpiper	</td><td>	3.60	%	</td><td>	IPA	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Au	</td><td>	5.20	%	</td><td>	Strong Ale	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Iron and Steel Bitter	</td><td>	4.00	%	</td><td>	Bitter	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Kaldo	</td><td>	5.50	%	</td><td>	Strong Ale	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Cutting Ale	</td><td>	4.80	%	</td><td>	Bitter	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Silkie Stout	</td><td>	5.00	%	</td><td>	Stout	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Sheffield Porter	</td><td>	4.40	%	</td><td>	Porter	</td></tr>
<tr><td>	<a href="worcbeers/ .html">Stout 	</td><td>	3.80	%	</td><td>	Stout	</td></tr>

 
</table>
<hr>

<div data-role="footer" data-position="fixed">
<div data-role="navbar">
<?php include 'menu.php';?>
</div>
</div>

  
  </body>
</html>