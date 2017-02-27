<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../index.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,600,700,800" type="text/css">
	<script src="../index.js"></script>
	<script defer src="flavorpicker.js"></script>
	<script src="jquery-3.1.1.min.js"></script>
	<title>Vapor Trails Administration</title>
</head>

<body>
	<section class="mdl-grid center-items">
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		<h3 style="text-align: center;">Flavor Editor</h3>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="flavors" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Create</button>
		</form>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="additives" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Additive Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Create</button>
		</form>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="dylansflavors" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Dylan's Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Create</button>
		</form>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="kimsflavors" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Kim's Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Create</button>
		</form>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="flavors" name="table"></input>
		<select class="mdl-button mdl-button--accent" name="remflavorname">
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Delete Flavor</button>
		</form><br>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="additives" name="table"></input>
		<select class="mdl-button mdl-button--accent" name="remflavorname">
		Choose an Additive
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
					$sql = "SELECT name FROM additives";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Delete Additive</button>
		</form><br>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="dylansflavors" name="table"></input>
		<select class="mdl-button mdl-button--accent" name="remflavorname">
		Choose Dylan's Flavor
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
					$sql = "SELECT name FROM dylansflavors";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Delete Dylan's Flavor</button>
		</form><br>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="kimsflavors" name="table"></input>
		<select class="mdl-button mdl-button--accent" name="remflavorname">
		Choose Kim's Flavor
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
					$sql = "SELECT name FROM kimsflavors";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Delete Kim's Flavor</button>
		</form>
	</section>	
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		<h3 style="text-align: center;">img editor</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
			Select New Main Image:<br><br>
			<input style="display:none;"type="text" value="vt-location" name="fname"></input>
			<input style="display:none;"type="number" value="" name="fnumber"></input>
			<input style="display:none;"type="text" value="" name="filedir"></input>
			<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
			<input type="submit" value="Upload Image" name="submit">
		</form>
		<form action="sshowimgadd.php" method="get" target="iframe">
			<div id="imgadddiv"  style="margin-left: auto; margin-right: auto; margin-top: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="imgn" name="imgnumber">
			<label class="mdl-textfield__label" for="imgn">Number of sshow images...</label>
			<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">Change</button>
		</form>
		<form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
			Select New Slide Show Image:<br><br>
			Img Number:
			<input style="display:none;"type="text" value="slide" name="fname"></input>
			<input style="display:none;"type="text" value="" name="filedir"></input>
			<input type="number" name="fnumber"></input><br><br>
			<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
			<input type="submit" value="Upload Image" name="submit">
		</form><br><br>
	<iframe name="iframe"></iframe>
	</section>
	<!--
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		<h3 style="text-align: center;">Paragraph Editor</h3>
		<select id="menu-para"class="mdl-button mdl-button--accent">
		<option onclick="paraedit('locationinfo')">Location Info</option>
		<option onclick="paraedit('aboutus')">About Us</option>
		<option onclick="paraedit('pricestuff')">Price Stuff</option>
		</select>
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
		<label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
		  <i class="material-icons">search</i>
		</label>
		<div class="mdl-textfield__expandable-holder">
		  <input class="mdl-textfield__input" type="text" id="sample6">
		  <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
		</div>
	  </div>
	</section>-->
	</section>
</body>
</html>