"use strict";
window.onload = pageLoad;

function pageLoad() {
    $("submit").onclick = checkInfo;
    $("notes").onkeyup=displayTime;
    $("enlargeText").onchange = enlargeText;
}

function checkInfo() {
    var username = $("apptID").value;
    var password = $("notes").value;

    if (apptID == "" ) {
        alert("You did not enter an appointment ID value, please enter one now.")
    }

    if (notes == "" ) {
        alert("You did not enter any notes, please enter them now.")
    }
}

function displayTime(){

	new Ajax.Request( "time.php", 
	{ 
		method: "get", 
		onSuccess: displayResult
	});
}

function displayResult(ajax){
	$("time").innerHTML = ajax.responseText;
}

function enlargeText() {
    var notes = $("notes");
    var enlargeText = $("enlargeText");

    if (enlargeText.checked){
        notes.style.fontSize="36px";
    } else {
        notes.style.fontSize="15px";
    }

}