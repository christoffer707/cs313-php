
<?
	session_start();
?>

<html>
<head>
<title>Shopping Cart</title>
<link type="text/css" rel="stylesheet" href="hello.css"/>
<script type='text/javascript' src='javascript/jquery-1.11.1.min.js'></script>
<script type='text/javascript' src='java.js'></script>
</head>
<body>
	<h1 id="viewHeader">View Cart</h1>
	<form action="confirm.php" method="POST">
	<input type="hidden" id="hiddenItem" name="hiddenItem" value="hiddenItem"/>
	<input type="submit" name="Submit" value="Confirmation"/>
	</form>

	<?php 

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$viewCart = $_POST['hiddenItem'];
			$_SESSION['hiddenItem']= $cart;
		} 
	?> 
	<strong><?php echo $_SESSION['hiddenItem'];?></strong>
	<strong><?php echo $_REQUEST['hiddenItem'];?></strong>
	 <div id="orderReview">
              <table id="table">
                <tr>
                  <td>array[0]</td>
                  <td>array[1]</td>
                  <td id="remove">Remove</td>
                  <td id="total">Total</td>
                </tr>
              </table>
            </div>

	<div id="personalInfo">
              <h3> Review Personal Info</h3>
            <input type="hidden" id="hidden1" name="silent" value=""/>
			<input type="hidden" id="hidden2" name="silent2" value=""/>
                <table>
                  <tr>
                    <td>
                      <p>First and Last Name: </p><input type="text" name="nm" size="20" id="nameInput">
                      </input>

                    
                  </tr>
                  <tr>
                    <td>
                      <p>Address: </p><input size="20" name="add" type="text" id="addressInput"/>
                      

                    </td>
                  
                  </tr>
                  <tr>
                    <td>
                      <p>Phone: </p><input size="11" name="ph" type="text" id="phoneInput" />


                    </td>
                  </tr>
                </table>
            </div>
			<input id="reset" type="reset">
            <input id="submit" type="submit">

</body>

</html>