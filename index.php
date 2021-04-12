<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
</head>
<body>
	<h1>Personal Info</h1>
	<?php
		//indexed
		$colors  = array("green","yellow","red","magenta");

		$user = array(
			"fname" => "John",
			"lname" =>  "Doe",
			"age"  => 18,
			"is_single" => true,
			"address" => array(
				"barangay" => "Lapasan",
				"city"  => "Cagayan de Oro",
				"zip" => 9000
			),
			"favorite_colors" => array("green","violet")
		);
	?>
	<p><b>Name: </b>  <?php echo $user["fname"]  . " " . $user["lname"]; ?> </p>
	<p><b>Age: </b> <?php  echo $user["age"]; ?></p>
	<?php if($user["is_single"]): ?>
	<p><b>Single</b></p>
	<?php endif;?>
	<h3>Address</h3>
	<p><b>Barangay: </b> <?php echo $user["address"]["barangay"]; ?></p>
	<p><b>City: </b> <?php echo $user["address"]["city"]; ?></p>
	<p><b>Zip: </b> <?php echo $user["address"]["zip"] ?></p>
</body>
</html>