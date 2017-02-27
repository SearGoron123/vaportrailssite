<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script defer src="script/flavorpicker.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,600,700,800" type="text/css">
	<title>Vapor Trails Flavor Creator</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent mdl-color--primary">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Flavor Creator</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html">Home</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
	<section class="mdl-grid center-items">
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp mdl-color--accent">
	<h3>Dylan's Flavors</h3>	
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
					echo '<li>'.$row["name"]."</li>";
				}
			} else {
				echo "0 results";
			}
			mysqli_close($conn);
		?>
	<h3>Kim's Flavors</h3>	
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
					echo '<li>'.$row["name"]."</li>";
				}
			} else {
				echo "0 results";
			}
			mysqli_close($conn);
		?>
	</section>
	<section id="content" style="padding-bottom: 75vh;" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		  <div id="nicamountdiv"  style="margin-left: auto; margin-right: auto; margin-top: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom mdl-color--grey">
			<input class="mdl-textfield__input" style="color: white; text-align:center" onchange="nicamount();" maxlength="3" max="100" min="0" type="number" pattern="?[0-9]*(\.[0-9]+)?" id="nicamountinput">
			<label class="mdl-textfield__label" style="color: white; text-align:center" for="nicamountinput">Amount of Nicotine...</label>
			<span class="mdl-textfield__error">Input is invalid!</span>
		  </div>
		  <div style="margin-left: auto; margin-right: auto; margin-top: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom mdl-color--accent">
			<input class="mdl-textfield__input" style="color: white; text-align:center" maxlength="2" max="10" min="0" onchange="buttonmaker();" type="number" pattern="?[0-9]*(\.[0-9]+)?" id="nob">
			<label class="mdl-textfield__label" style="color: white; text-align:center" for="nob">Number of Flavors...</label>
			<span class="mdl-textfield__error">Input has to be between 0 & 10</span>
		  </div><br>
		<div id="flavorchoosers" style="display:none;">
		<div id="flavorchooser">
		<button id="menu-flavor" style="margin-bottom: 2vh; margin-left: 2vh;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary button-custom">
		Choose a Flavor
		</button>
		<ul id="flavorlist" class="mdl-menu mdl-js-menu mdl-js-ripple-effect customlist" for="menu-flavor">	
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
							echo '<li onclick="flavorpick('."'".$row["name"]."'".', this)" class="mdl-menu__item">'.$row["name"]."</li>";
						}
					} else {
						echo "0 results";
					}

					mysqli_close($conn);
				?>
		</ul>
		  <div id="percentdiv"  style="margin-left: auto; margin-right: auto; margin-top: 2vh; display:none;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom mdl-color--accent">
			<input class="mdl-textfield__input" style="color: white; text-align:center" onchange="percentpick(this);" max="10" type="number" pattern="?[0-9]*(\.[0-9]+)?" id="percentinput">
			<label class="mdl-textfield__label" style="color: white; text-align:center" maxlength="3" max="100" min="0" for="percentinput">Percentage of Flavor...</label>
			<span class="mdl-textfield__error">Input has to be between 0 & 100</span>
		  </div>
		  <br>
		</div>
		</div>
		  <div style="margin-left: auto; margin-right: auto; margin-top: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom mdl-color--primary">
			<input class="mdl-textfield__input" style="color: white; text-align:center" onchange="buttonmakera();" maxlength="2" max="10" min="0" type="number" pattern="?[0-9]*(\.[0-9]+)?" id="noba">
			<label class="mdl-textfield__label" style="color: white; text-align:center" for="noba">Number of Additives...</label>
			<span class="mdl-textfield__error">Input has to be between 0 & 10</span>
		  </div><br>
		<div id="additivechoosers" style="display:none;">
		<div id="additivechooser">
		<button id="menu-additive" style="margin-bottom: 2vh; margin-left: 2vh;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent button-custom">
		Choose an Additive
		</button>
		<ul id="additivelist" class="mdl-menu mdl-js-menu mdl-js-ripple-effect customlist" for="menu-additive">	
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
							echo '<li onclick="additivepick('."'".$row["name"]."'".', this)" class="mdl-menu__item">'.$row["name"]."</li>";
						}
					} else {
						echo "0 results";
					}

					mysqli_close($conn);
				?>
		</ul>
		  <div id="percentdiva"  style="margin-left: auto; margin-right: auto; margin-top: 2vh; display:none;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary textfield-custom">
			<input class="mdl-textfield__input" style="color: white; text-align:center" onchange="percentpicka(this);" maxlength="3" max="100" min="0" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="percentinputa">
			<label class="mdl-textfield__label" style="color: white; text-align:center" for="percentinputa">Percentage of Additive...</label>
			<span class="mdl-textfield__error">Input has to be between 0 & 100</span>
		  </div>
		  <br>
		</div>
		</div>
	</section>
	<section id="printstuff" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp mdl-color--primary">
	<div id="flavorscreen">
	<h2>VG</h2>
	<h3 id="VG">100%</h3>
	<div id="flavors">
	</div>
	<div id="additives">
	</div>
	</div>
		  <div style="margin-left: auto; margin-right: auto; margin-top: 2vh; opacity: 1.0;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom mdl-color--accent">
			<input class="mdl-textfield__input" style="color: white; text-align:center" onchange="namechange()" type="text" id="nname">
			<label class="mdl-textfield__label" style="color: white; text-align:center" for="nname">New Flavor Name...</label>
		  </div><br>
		<button id="print" onclick="printscreen()"  style="margin-left: auto; margin-right: auto; margin-top: 2vh;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent button-custom">
		Print
		</button>
	</section>
	</section>
  </main>
</div>

</body>
</html>