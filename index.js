// in the example above, assign the result
var timeoutHandle = window.setTimeout(carousel, 5000);
var sshowimgtotal = 3;
function carousel() {
	var sshow = document.getElementById("sshow");
	var img = parseInt(sshow.src.substr(-5,1));
	var nimg = img + 1;
	if (nimg > 3){
		nimg = 1;
	}
	sshow.src = "sshow/slide" + nimg + ".jpg";
	// in your click function, call clearTimeout
	window.clearTimeout(timeoutHandle);
	// then call setTimeout again to reset the timer
	timeoutHandle = window.setTimeout(carousel, 5000);
}
function sshowctrl(cmd){
	var sshow = document.getElementById("sshow");
	var img = parseInt(sshow.src.substr(-5,1));
	if (cmd == "next"){
		var nimg = img + 1;
	}else if (cmd == "prev"){
		var nimg = img - 1;
	}
	if (nimg > sshowimgtotal){
		nimg = 1;
	}
	if (nimg < 1){
		nimg = sshowimgtotal;
	}
	sshow.src = "sshow/slide" + nimg + ".jpg";
	// in your click function, call clearTimeout
	window.clearTimeout(timeoutHandle);
	// then call setTimeout again to reset the timer
	timeoutHandle = window.setTimeout(carousel, 5000);
}
function flavorpick(flavor) {
	
	document.getElementById("menu-flavor").innerHTML = flavor;
	
}
function buttonmaker() {
	
	var button1 = document.getElementById("flavorchoosers");
``	var nbutton = button1.cloneNode(true);
	var currentbuttons = document.getElementById("flavorchoosers").childElementCount;
	
}