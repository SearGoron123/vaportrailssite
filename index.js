var sshowimgtotal = 3;
// in the example above, assign the result
var timeoutHandle = window.setTimeout(carousel, 5000);
function carousel() {
	var sshow = document.getElementById("sshow");
	var img = parseInt(sshow.src.substr(-5,1));
	var nimg = img + 1;
	if (nimg > sshowimgtotal){
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
function flavorpick(flavor, func) {
	var bnumber = func.parentNode.id.substr(-1, 1);
	var ndivid;
	if (isNaN(bnumber)){
			ndivid = "flavor";
			nid = "flavortext";
			pid = "percentdiv";
			bid = "menu-flavor";
		}else{
			ndivid = "flavor" + bnumber;
			nid = "flavortext" + bnumber;
			pid = "percentdiv" + bnumber;
			bid = "menu-flavor" + bnumber;
		}
		document.getElementById(bid).innerHTML = flavor;
	if (document.getElementById(pid).style.display = "none"){
		document.getElementById(pid).style.display = "block";
	}
	if (!document.getElementById(ndivid)){
		var nflavordiv = document.createElement("div");
		nflavordiv.id = ndivid;
		var nflavor = document.createElement("h3");
		nflavor.id = nid;
		var txt = document.createTextNode(flavor);
		nflavor.appendChild(txt);
		nflavordiv.appendChild(nflavor);
		nflavordiv.className = "flavor";
		document.getElementById("flavors").appendChild(nflavordiv);
	}else{
		document.getElementById(nid).innerHTML = flavor;
	}
}
function percentpick(func) {
	var i;
	var inumber = func.id.substr(-1, 1);
	var ndivid;
	if (isNaN(inumber)){
			ndivid = "flavor";
			npid = "percent";
		}else{
			ndivid = "flavor" + inumber;
			npid = "percent" + inumber;
		}
	var percent = func.value;
	if (document.getElementById(ndivid) && !document.getElementById(npid)){
		var npercent = document.createElement("h4");
			npercent.id = npid;
			npercent.className = "percent";
		var txt = document.createTextNode(percent + '%');
		npercent.appendChild(txt);
		document.getElementById(ndivid).appendChild(npercent);
	} else {
		document.getElementById(npid).innerHTML = percent + '%';
	}
	var currentpercents = document.getElementsByClassName("percent");
	var flavorcount = currentpercents.length;
	var vgcounter = document.getElementById("VG");
	var percentcount = 0;
	for (i = 0; i<flavorcount; i++){
		percentcount = percentcount + parseInt(currentpercents[i].innerHTML.substr(0, 2));
	}
	var vgnumber = 100 - percentcount;
	vgcounter.innerHTML = vgnumber + '%';
	if (vgnumber < 0){ vgcounter.style.color = "red";}
}
function buttonmaker() {
	if (document.getElementById("flavorchoosers").style.display = "none"){
		document.getElementById("flavorchoosers").style.display = "block"
	}
	var i;
	var wantedbuttons = document.getElementById("nob").value;
	var button1 = document.getElementById("flavorchooser");
	var currentbuttons = document.getElementById("flavorchoosers").childElementCount;
	if (currentbuttons<wantedbuttons){
	for (i = 1; i<=wantedbuttons - 1; i++) {
		if(!document.getElementById("flavorchooser" + i)){
			var nflavorchooser = button1.cloneNode(true);
			nflavorchooser.id = "flavorchooser" + i;
			var nbutton = nflavorchooser.children[0];
			nbutton.id = "menu-flavor" + i;
			nbutton.removeAttribute("data-upgraded");
			var nflavordiv = nflavorchooser.children[1];
			var nflavorlist = nflavordiv.children[1];
			nflavorlist.id = "flavorlist" + i;
			nflavorlist.setAttribute("for", "menu-flavor" + i);
			nflavorlist.removeAttribute("data-upgraded");
			var ninputdiv = nflavorchooser.children[2];
			ninputdiv.id = "percentdiv" + i;
			var npinput = ninputdiv.children[0];
			npinput.id = "percentinput" + i;
			var nlabel = ninputdiv.children[1];
			nlabel.setAttribute("for", "percentinput" + i);
			ninputdiv.className = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom";
			ninputdiv.removeAttribute("data-upgraded");
			nflavorchooser.appendChild(nflavorlist);
			nflavorchooser.removeChild(nflavordiv);
			flavorchoosers.appendChild(nflavorchooser);
		} 
	}
	} 
	if (currentbuttons>wantedbuttons) {
		var extrabtnamt = currentbuttons - wantedbuttons;
		var extrabtstart = currentbuttons - extrabtnamt;
		var extrabtnend = currentbuttons - 1;
		for (i = extrabtstart; i<=extrabtnend; i++) {
			var remflav = document.getElementById("flavorchooser" + i);
			remflav.parentNode.removeChild(remflav);
		}
	}
	if(!(typeof(componentHandler) == 'undefined')){
      componentHandler.upgradeAllRegistered();
	}else{
		alert("componentHandler does not exist");
	}
}
function paraselect (id) {
	
	document.body.getElementById("menu-para").innerHTML = id;
	
}
function paraedit (id, input) {
	
	document.body.getElementById("menu-para").innerHTML = id;
	
}