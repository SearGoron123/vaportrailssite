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
	<section class="mdl-grid center-items">
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
	<div class="div-card_media">
	<img class="flavorimg" src="dylansflavors.jpg">
	</div>
	<div class="div-card_media">
	<img class="flavorimg" src="kimsflavors.jpg">
	</div>
	</section>
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
		  <div style="margin-left: auto; margin-right: auto; margin-top: 2vh;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
			<input class="mdl-textfield__input" onchange="buttonmaker();" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="nob">
			<label class="mdl-textfield__label" for="nob">Number of Flavors...</label>
			<span class="mdl-textfield__error">Input is not a number!</span>
		  </div><br>
		<div id="flavorchoosers" style="display:none;">
		<div id="flavorchooser" class="flavorchooser">
		<button id="menu-flavor" style="margin-bottom: 2vh; margin-left: 2vh;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent button-custom">
		Choose a Flavor
		</button>
		<ul id="flavorlist" class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="menu-flavor">	
				<?php
				$fxml=simplexml_load_file("flavors.xml") or die("No Flavors Available");
				foreach($fxml->xpath('/content/flavor') as $flavor) {
					echo '<li onclick="flavorpick('."'".$flavor->name."'".', this)" class="mdl-menu__item">'.$flavor->name."</li>";
				} 
				?>
		</ul>
		  <div id="percentdiv"  style="margin-left: auto; margin-right: auto; margin-top: 2vh; display:none;" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
			<input class="mdl-textfield__input" onchange="percentpick(this);" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="percentinput">
			<label class="mdl-textfield__label" for="percentinput">Percentage of Flavor...</label>
			<span class="mdl-textfield__error">Input is not a number!</span>
		  </div>
		  <br>
		</div>
		</div>
	</section>
	<section id="content" class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-shadow--2dp">
	<h2>VG</h2>
	<h3 id="VG">100%</h3>
	<div id="flavors">
	</div>
	</section>
	</section>
  </main>
</div>

</body>
</html>