<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<meta charset="uts-8"/>
</head>
<body>
	
<?php 

	$page_title='Trip cost calculator';
	include('header.html');

 ?>
<!-- create a form -->

<h2>Please enter the form:</h2>
<form action="handle_form.php" method="post">
	<p><label>Distance in miles:</label><input name="distance" type="text"></input></p>
	<p><label>Avg. cost per gallon:</label>
			<input name="gallon_price" type="radio" value="3.00">3.00</input>
			<input name="gallon_price" type="radio" value="4.00">4.00</input>
			<input name="gallon_price" type="radio" value="5.00">5.00</input>
	</p>
	<p><label>Fuel effeciency:</label>
		<select name="effeciency">
			<option value="10">Terrible</option>
			<option value="20">Decent</option>
			<option value="30">Very Good</option>
			<option value="40">Outstanding</option>
			
		</select>

	</p>
	<p><input type="submit" name="submit" value="calculate" /></p>



</form>
	
	<?php 

		include('footer.html');

	 ?>
</body>
</html>
