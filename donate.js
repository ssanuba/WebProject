"use strict"

window.onload = function(){
	timer();
	$("logout").observe("click",logout);
}

function timer(){
	setInterval(myfunction, 200);
	function myfunction(){
	var colorCode = "#" + Math.round(Math.random() * 0xffffff).toString(16);
	document.getElementById("blink").style.color = colorCode;
	}
}
function logout(){
	if(confirm("로그아웃 하시겠습니까?") == true){
		$("logout").setAttribute("href","index.html");
	}
}