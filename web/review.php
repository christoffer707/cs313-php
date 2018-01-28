<html>
<head>
  <title>Order Confirmation</title>
  <link rel="stylesheet" type="text/css" href="hello.css">
  <script src="java.js"></script>
  <?php 
	$temp = $_POST["silent"]; 
    $JSON = json_decode($temp, true);
	$total = $_POST["silent2"];
	$name = $_POST["nm"];
	$address = $_POST["add"];
	$phone = $_POST["ph"];
	
</head>

	<body>
		<div id="reviewInfo">
			<table>
				<tr>
				<th colspan="2">Review Information</th>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $address; ?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $phone; ?></td>
				</tr>
				
			</table>
			<table>
				<tr><th>name</th><th>price</th><th>count</th></tr>					
				<?php
					for($i = 0; $i < count($JSON[name]); $i++)
					{
						echo "<tr>
								<td>" . $JSON[name][$i] . "</td>
								<td>" . $JSON[price][$i] . "</td>
								<td>" . $JSON[count][$i] . "</td>
							 </tr>";
					}
				?>
				<tr><th>total</th><th>:</th><th><?php echo $total; ?></th></tr>
			</table>
			<form action="confirm.php" method="post" id="buttons">
			<?php
				echo '<input type="hiddenItem" name="name" value="'. $name . '" />';
				echo '<input type="hiddenItem" name="temp" value="'. $temp . '" />';
				echo '<input type="hiddenItem" name="address" value="'. $address . '" />';
				echo '<input type="hiddenItem" name="phone" value="'. $phone . '" />';
				echo '<input type="hiddenItem" name="total" value="'. $total . '" />';
				echo '<input type="hiddenItem" name="action" id="action" value=""/>';
			?>
			<input type="submit" value="Cancel" onclick="actionValue(0)"></input>
			<input type="submit" value="Confirm" onclick="actionValue(1)"></input>
			
			</form>
		</div>
	</body>
</html>