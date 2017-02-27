
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
		var length = currentpercents[i].innerHTML.length
		percentcount = percentcount + parseInt(currentpercents[i].innerHTML.substr(0, length));
	}
	var vgnumber = 100 - percentcount;
	vgcounter.innerHTML = vgnumber + '%';
	if (vgnumber < 0){ vgcounter.style.color = "red";}
	if (vgnumber >= 0){ vgcounter.style.color = "black";}
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
			ninputdiv.className = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--accent textfield-custom";
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
function additivepick(additive, func) {
	var bnumber = func.parentNode.id.substr(-1, 1);
	var ndivid;
	if (isNaN(bnumber)){
			ndivid = "additive";
			nid = "additivetext";
			pid = "percentdiva";
			bid = "menu-additive";
		}else{
			ndivid = "additive" + bnumber;
			nid = "additivetext" + bnumber;
			pid = "percentdiva" + bnumber;
			bid = "menu-additive" + bnumber;
		}
		document.getElementById(bid).innerHTML = additive;
	if (document.getElementById(pid).style.display = "none"){
		document.getElementById(pid).style.display = "block";
	}
	if (!document.getElementById(ndivid)){
		var nadditivediv = document.createElement("div");
		nadditivediv.id = ndivid;
		var nadditive = document.createElement("h3");
		nadditive.id = nid;
		var txt = document.createTextNode(additive);
		nadditive.appendChild(txt);
		nadditivediv.appendChild(nadditive);
		nadditivediv.className = "additive";
		document.getElementById("additives").appendChild(nadditivediv);
	}else{
		document.getElementById(nid).innerHTML = additive;
	}
}
function percentpicka(func) {
	var i;
	var inumber = func.id.substr(-1, 1);
	var ndivid;
	if (isNaN(inumber)){
			ndivid = "additive";
			npid = "percenta";
		}else{
			ndivid = "additive" + inumber;
			npid = "percenta" + inumber;
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
	var additivecount = currentpercents.length;
	var vgcounter = document.getElementById("VG");
	var percentcount = 0;
	for (i = 0; i<additivecount; i++){
		var length = currentpercents[i].innerHTML.length
		percentcount = percentcount + parseInt(currentpercents[i].innerHTML.substr(0, length));
	}
	var vgnumber = 100 - percentcount;
	vgcounter.innerHTML = vgnumber + '%';
	if (vgnumber < 0){ vgcounter.style.color = "red";}
	if (vgnumber >= 0){ vgcounter.style.color = "black";}
}
function nicamount(){
	var elem = document.getElementById("nicamountinput");
	if (document.body.contains(document.getElementById("nicamount"))){
		document.getElementById("nicamount").innerHTML = elem.value + "mg Nicotine";
	}else{
		var nicelem = document.createElement("h3");
		nicelem.id = "nicamount";
		var nictext = document.createTextNode(elem.value + "mg Nicotine");
		nicelem.appendChild(nictext);
		document.getElementById("flavors").appendChild(nicelem);
	}
}
function buttonmakera() {
	if (document.getElementById("additivechoosers").style.display != "block"){
		document.getElementById("additivechoosers").style.display = "block"
	}
	var i;
	var wantedbuttons = document.getElementById("noba").value;
	var button1 = document.getElementById("additivechooser");
	var currentbuttons = document.getElementById("additivechoosers").childElementCount;
	if (currentbuttons<wantedbuttons){
	for (i = 1; i<=wantedbuttons - 1; i++) {
		if(!document.getElementById("additivechooser" + i)){
			var nadditivechooser = button1.cloneNode(true);
			nadditivechooser.id = "additivechooser" + i;
			var nbutton = nadditivechooser.children[0];
			nbutton.id = "menu-additive" + i;
			nbutton.removeAttribute("data-upgraded");
			var nadditivediv = nadditivechooser.children[1];
			var nadditivelist = nadditivediv.children[1];
			nadditivelist.id = "additivelist" + i;
			nadditivelist.setAttribute("for", "menu-additive" + i);
			nadditivelist.removeAttribute("data-upgraded");
			var ninputdiv = nadditivechooser.children[2];
			ninputdiv.id = "percentdiva" + i;
			var npinput = ninputdiv.children[0];
			npinput.id = "percentinputa" + i;
			var nlabel = ninputdiv.children[1];
			nlabel.setAttribute("for", "percentinputa" + i);
			ninputdiv.className = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-color--primary textfield-custom";
			ninputdiv.removeAttribute("data-upgraded");
			nadditivechooser.appendChild(nadditivelist);
			nadditivechooser.removeChild(nadditivediv);
			additivechoosers.appendChild(nadditivechooser);
		} 
	}
	} 
	if (currentbuttons>wantedbuttons) {
		var extrabtnamt = currentbuttons - wantedbuttons;
		var extrabtstart = currentbuttons - extrabtnamt;
		var extrabtnend = currentbuttons - 1;
		for (i = extrabtstart; i<=extrabtnend; i++) {
			var remflav = document.getElementById("additivechooser" + i);
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
function namechange () {
	var name = document.getElementById("nname").value;
	if (!document.getElementById("flavname"))
	{
	var ntext = document.createTextNode("Name: " + name);
	var elem = document.createElement("h3");
	elem.id = "flavname";
	elem.appendChild(ntext);
	document.getElementById("flavorscreen").appendChild(elem);
	}else{
		document.getElementById("flavname").innerHTML = "Name: " + name;
	}
}
function printscreen(){
     var printContents = document.getElementById("flavorscreen").innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

    location.reload();
}