<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,600,700,800" type="text/css">
	<script src="../index.js"></script>
	<script src="jquery-3.1.1.min.js"></script>
	<title>Vapor Trails Administration</title>
</head>

<body>
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		<h3 style="text-align: center;">Flavor Editor</h3>
		<form action="flavoradd.php" method="post">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Create</button>
		</form>
		<form action="flavorrem.php" method="post">
		<select class="mdl-button mdl-button--accent button-custom" name="remflavorname">
		Choose a Flavor
				<?php
					$servername = "192.168.0.12";
					$username = "user";
					$password = "";
					$dbname = "vaportrails";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$sql = "SELECT name FROM flavors";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
						}
					} else {
						echo "0 results";
					}

					mysqli_close($conn);
				?>
		</select>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Delete</button>
		</form>
		
	</section>	
	<iframe name="iframe"></iframe>
</body>
</html>