"use strict";

window.onload = function(){
	$("logout").observe("click",logout);
}

function logout(){
	if(confirm("로그아웃 하시겠습니까?") == true){
		$("logout").setAttribute("href","index.html");
	}
}