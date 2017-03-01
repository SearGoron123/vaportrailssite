<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../index.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,600,700,800" type="text/css">
	<script src="../script/index.js"></script>
	<script src="../script/flavorpicker.js"></script>
	<script src="jquery-3.1.1.min.js"></script>
	<title>Vapor Trails Administration</title>
</head>

<body>
	<section class="mdl-grid center-items">
	<section style="text-align: left;" id="content" class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		<h3 style="text-align: center;">Flavor Editor</h3>
		<div style="margin-left: 2vw;">
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="flavors" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary" style="margin-bottom: 2vh;margin-top:2vh;">
				<input class="mdl-textfield__input" style="text-align:center; color:white;" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label" style="text-align:center; color:white;" for="Flavorname">Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Create</button>
		</form>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="additives" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary" style="margin-bottom: 2vh;margin-top:2vh;">
				<input class="mdl-textfield__input" style="text-align:center; color:white;" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label" style="text-align:center; color:white;" for="Flavorname">Additive Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Create</button>
		</form>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="dylansflavors" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary" style="margin-bottom: 2vh;margin-top:2vh;">
				<input class="mdl-textfield__input" style="text-align:center; color:white;" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label" style="text-align:center; color:white;" for="Flavorname">Dylan's Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Create</button>
		</form>
		<form action="flavoradd.php" method="post">
			  <input style="display:none;"type="text" value="kimsflavors" name="table"></input>
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary" style="margin-bottom: 2vh;margin-top:2vh;">
				<input class="mdl-textfield__input" style="text-align:center; color:white;" name="flavorname" type="text" id="flavorname">
				<label class="mdl-textfield__label" style="text-align:center; color:white;" for="Flavorname">Kim's Flavor Name</label>
			  </div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Create</button>
		</form>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="flavors" name="table"></input>
		<select class="mdl-button mdl-button--raised mdl-button--primary button-custom" name="remflavorname" style="margin-bottom: 2vh;margin-top:2vh;">
				<option selected disabled>Choose a Flavor</option>
				<?php
					$servername = "localhost";
					$username = "vaporadmin";
					$password = "0?R2%)I3r_kL";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Delete Flavor</button>
		</form>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="additives" name="table"></input>
		<select class="mdl-button mdl-button--raised mdl-button--primary button-custom" name="remflavorname" style="margin-bottom: 2vh;margin-top:2vh;">
				<option selected disabled>Choose an Additive</option>
				<?php
					$servername = "localhost";
					$username = "vaporadmin";
					$password = "0?R2%)I3r_kL";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Delete Additive</button>
		</form>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="dylansflavors" name="table"></input>
		<select class="mdl-button mdl-button--raised mdl-button--primary button-custom" name="remflavorname" style="margin-bottom: 2vh;margin-top:2vh;">
				<option selected disabled>Choose a Flavor</option>
				<?php
					$servername = "localhost";
					$username = "vaporadmin";
					$password = "0?R2%)I3r_kL";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Delete Dylan's Flavor</button>
		</form>
		<form action="flavorrem.php" method="post">
		<input style="display:none;"type="text" value="kimsflavors" name="table"></input>
		<select class="mdl-button mdl-button--raised mdl-button--primary button-custom" name="remflavorname" style="margin-bottom: 2vh;margin-top:2vh;">
				<option selected disabled>Choose a Flavor</option>
				<?php
					$servername = "localhost";
					$username = "vaporadmin";
					$password = "0?R2%)I3r_kL";
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
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Delete Kim's Flavor</button>
		</form>
		</div>
	</section>	
	<section style="text-align: left;"id="content" class="mdl-card mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		<h3 style="text-align: center;">Image Editor</h3>
		<div style="text-align: left;margin-left: 2vw;">
		<form style="margin-bottom: 2vh;margin-top:2vh;" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
			Select New Background Image:<br><br>
			<input style="display:none;"type="text" value="background" name="fname"></input>
			<input style="display:none;"type="number" step="0.01" value="" name="fnumber"></input>
			<input style="display:none;"type="text" value="media/" name="filedir"></input>
			
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored" style="margin-bottom: 2vh;margin-top:2vh;" type="file" name="fileToUpload" id="fileToUpload">
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent" type="submit" value="Upload Image" name="submit">
			
		</form>
		<form style="margin-bottom: 2vh;margin-top:2vh;" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
			Select New Banner Image:<br><br>
			<input style="display:none;"type="text" value="vt" name="fname"></input>
			<input style="display:none;"type="number" step="0.01" value="" name="fnumber"></input>
			<input style="display:none;"type="text" value="media/" name="filedir"></input>
			
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored" style="margin-bottom: 2vh;margin-top:2vh;" type="file" name="fileToUpload" id="fileToUpload">
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent" type="submit" value="Upload Image" name="submit">
			
		</form>
		<form style="margin-bottom: 2vh;margin-top:2vh;" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
			Select New Location Image:<br><br>
			<input style="display:none;"type="text" value="vt-location" name="fname"></input>
			<input style="display:none;"type="number" step="0.01" value="" name="fnumber"></input>
			<input style="display:none;"type="text" value="media/" name="filedir"></input>
			
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored" style="margin-bottom: 2vh;margin-top:2vh;" type="file" name="fileToUpload" id="fileToUpload">
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent" type="submit" value="Upload Image" name="submit">
			
		</form>
		<form style="margin-bottom: 2vh;margin-top:2vh;" action="sshowimgadd.php" method="get" target="iframe">
			Change Number of Slide Show Images:<br>
			<div id="imgadddiv"  style="margin-top: 2vh; margin-bottom: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary">
			<input class="mdl-textfield__input" style="text-align:center; color:white;" type="number" step="0.01" id="imgnumber" name="imgnumber">
			<label class="mdl-textfield__label" style="text-align:center; color:white;" for="imgnumber">Number of Slide Show images...</label>
			<div class="mdl-textfield__error">Input is not valid!</div>
			</div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Change</button>
		</form>
		<form style="margin-bottom: 2vh;margin-top:2vh;" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
			Select New Slide Show Image:<br>
			
			<input style="display:none;"type="text" value="slide" name="fname"></input>
			<input style="display:none;"type="text" value="sshow/" name="filedir"></input>
			<div id="imgadddiv" style="margin-bottom: 2vh;margin-top:2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary">
			<input class="mdl-textfield__input" style="text-align:center; color:white;" type="number" step="0.01" id="fn" name="fnumber">
			<label class="mdl-textfield__label" style="text-align:center; color:white;" for="fn">Image number...</label>
			<div class="mdl-textfield__error">Input is not valid!</div>
			</div>
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent" style="margin-bottom: 2vh;margin-top:2vh;" type="file" name="fileToUpload" id="fileToUpload">
			<input class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored" type="submit" value="Upload Image" name="submit">
		</form>
		<form style="margin-bottom: 2vh;margin-top:2vh;" action="sshowtimer.php" method="get" target="iframe">
			Change Slide Show Time:<br>
			<div id="imgadddiv"  style="margin-top: 2vh; margin-bottom: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary">
			<input class="mdl-textfield__input" style="text-align:center; color:white;" type="number" step="0.01" maxlength="4" max="15" min="0" id="ntimer" name="ntimer">
			<label class="mdl-textfield__label" style="text-align:center; color:white;" for="ntimer">Slide Show Time in Seconds...</label>
			<div class="mdl-textfield__error">Input should be between 0 and 15 seconds</div>
			</div>
			  <button type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--accent">Change</button>
		</form>
	<iframe name="iframe"></iframe>
	</div>
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