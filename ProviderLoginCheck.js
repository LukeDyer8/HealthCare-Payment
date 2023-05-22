"use strict";
window.onload = pageLoad;

function pageLoad() {
    document.getElementById("submit").onclick = checkInfo;
}

function checkInfo() {
    var username = document.getElementById("docUsername").value;
    var password = document.getElementById("docPass").value;

    if (username == "" ) {
        alert("You did not enter a username value, please enter one now.")
    }

    if (password == "" ) {
        alert("You did not enter a password value, please enter one now.")
    }

    if (username != "admin" ) {
        alert("Incorrect username. Try again.")
    }
    if (password != "admin" ) {
        alert("Incorrect password. Try again.")
    }
}