<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
	<script src="index.js"></script>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,600,700,800" type="text/css">
	<title>Vapor Trails Flavor Picker</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent mdl-color--primary">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Flavor Picker</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html">Home</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content">
		<input type="number" value="2" onchange="buttonmaker()">Number of Flavors to Combine</input>
		<div id="flavorchoosers">
		<div id="flavorchooser">
		<button id="menu-flavor" style="margin-bottom: 2vh; margin-left: 2vh; display:none;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
		Choose a Flavor
		</button>
		<ul id="flavorlist" class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="menu-flavor">	
				<?php
				$fxml=simplexml_load_file("flavors.xml") or die("No Flavors Available");
				foreach($fxml->xpath('/content/flavor') as $flavor) {
					echo '<li onclick="flavorpick('."'".$flavor->name."'".')" class="mdl-menu__item">'.$flavor->name."</li>";
				} 
				?>
		</ul>
		</div>
		</div>
  </main>
</div>

</body>
</html>