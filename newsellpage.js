window.onload = function(){
	document.getElementById("logout").onclick= logout;
}

function logout(){
	if(confirm("로그아웃 하시겠습니까?") == true){
		document.getElementById("logout").setAttribute("href","index.html");
	}
}