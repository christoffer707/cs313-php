<?php 

 // starting the session
 //session_start();


 //if (isset($_POST['Submit'])) { 
 //$_SESSION['hiddenItem'] = $_POST['hiddenItem'];
 require "/Product.php";
 $db = get_db();

 
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
	<h1 id="shoppingh1">EDUCATE US</h1>
	<div class="gallery">
	  <a target="_blank" href="touchthinklearn-abc.jpg">
		<img src="touchthinklearn-abc.jpg" alt="WhiteRedFidget" width="300" height="200"/>
	  </a>
	  <div class="desc">ABCBook</div>
	  
		
		 
	</div>

	<?php
	
	$statement = $db->prepare("SELECT * FROM public.Products");
	$statement->execute();

		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
           {
              echo '<div class="gallery"><a target="_blank" href="touchthinklearn-abc.jpg"><img src="touchthinklearn-abc.jpg" alt="ABCBook" width="300" height="200"/></a><div class="desc"><p id="prodname">'.$row['Product_name'].'</p><p id="descript">'.$row['Product_description'].'</p><p id="price">'.$row['Product_price'].'</p><p id="prodnum">'.$row['Product_id'].'</p>;<input type="submit" value="Add to Cart" onClick="addToCart('.$row['Product_name'].', '.$row['Product_price'].';"/></div>';
					
           }
	?>

</body>

</html>

