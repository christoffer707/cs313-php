<?php 

 // starting the session
 session_start();


 if (isset($_POST['Submit'])) { 
 $_SESSION['hiddenItem'] = $_POST['hiddenItem'];
 
 
 } 
?> 

<html>
<head>
<title>Ponder 03</title>
<link type="text/css" rel="stylesheet" href="hello.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src='java.js'></script>
</head>
<body>
	<form action="cart.php" method="POST">
	<input type="hidden" id="hiddenItem" name="hiddenItem" value=""/>
	<input type="submit" name="Submit" value="View Cart"/>
	</form>
	<h1 id="shoppingh1">Fidget Spinners</h1>
	<div class="gallery">
	  <a target="_blank" href="WhiteRedFidget.jpg">
		<img src="WhiteRedFidget.jpg" alt="WhiteRedFidget" width="300" height="200"/>
	  </a>
	  <div class="desc">White and red fidget spinner</div>
		<input type="submit" value="Add to Cart" onClick="addToCart('White and Red Fidget', 4.99);"/>
		
	</div>

	<div class="gallery">
	  <a target="_blank" href="vibe_fidget_spinner_blue_1.jpg">
		<img src="vibe_fidget_spinner_blue_1.jpg" alt="BlueFidget" width="300" height="200">
	  </a>
	  <div class="desc">Blue Fidget </div>
	  <input type="submit" name="Submit" value="Add to Cart" onClick="addToCart('Blue Fidget', 2.99);"/>
	</div>

	<div class="gallery">
	  <a target="_blank" href="psychedelic.png">
		<img src="psychedelic.png" alt="Psychedelic" width="300" height="200">
	  </a>
	  <div class="desc">Psychedelic Fidget</div>
	  <input type="submit" name="Submit" value="Add to Cart" onClick="addToCart('Psychedelic Fidget', 7.99);"/>
	</div>

	<div class="gallery">
		<a target="_blank" href="fidget-spinner-red-min_800x.jpg">
		<img src="fidget-spinner-red-min_800x.jpg" alt="Red" width="300" height="200">
		</a>
		<div class="desc">Red Fidget</div>
		<input type="submit" name="Submit" value="Add to Cart" onClick="addToCart('Red Fidget', 2.99);"/>
	</div>

</body>

</html>