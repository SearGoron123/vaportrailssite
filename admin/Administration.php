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
	<div id="flavorform" class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp mdl-color--primary">
		<form action="flavoradd.php" method="post">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="Flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Flavor Name</label>
			  </div>
			  <input type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">
		</form>
	</div><br>
	<div id="flavorform" class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp mdl-color--primary">
		<form action="flavorrem.php" method="post">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" name="flavorname" type="text" id="Flavorname">
				<label class="mdl-textfield__label"for="Flavorname">Flavor Name</label>
			  </div>
			  <input type="submit" class="mdl-button mdl-button--raised mdl-js-button mdl-button--colored">
		</form>
	</div>
		<button id="menu-flavor" style="margin-bottom: 2vh; margin-left: 2vh;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
		Choose a Flavor
		</button>
		<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="menu-flavor">
				<?php
				$fxml=simplexml_load_file("../flavors.xml") or die("No Flavors Available");
				foreach($fxml->xpath('/content/flavor') as $flavor) {
					echo '<li onclick="flavorpick('."'".$flavor->name."'".')" class="mdl-menu__item">'.$flavor->name."</li>";
				} 
				?>
		</ul>
		

</body>
</html>