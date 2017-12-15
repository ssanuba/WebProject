
window.onload = function() {

    $("time").observe("click",timer);
    $("id").observe("click",id_check);
    $("confirms").observe("click",complete);
    $("mail").readOnly= true;
    $("creat").disabled= true;
    ajax();
};

function id_check(){
  alert("사용가능 아이디 입니다.");
}
var p=60;
var t=true;
function timer(){
      var id =  setInterval(stop, 1000);
      var counter= $("counter");
      $("mail").readOnly= false;
      var id2 = setTimeout(text, 6000);
      p=60;
      t=true;
      alert("메일이 발송되었습니다.");
      $("creat").disabled= true;
      $("time").value="메일 재전송";
      function stop(){
        if (p == 55) {
            clearInterval(id);
            clearTimeout(id2);
        }
        else if(t==false){
            clearInterval(id);
            clearTimeout(id2);
        }
        else {
          p--; 
          counter.innerHTML="남은시간 :" +p;
        }
      }
}
function text(){
    var counter= $("counter");
    $("mail").readOnly= true;
    counter.innerHTML ="시간초과되었습니다.";    
}
function complete(){
    var counter= $("counter");
    t=false;
    $("mail").readOnly= true;
    $("creat").disabled= false; 
    counter.innerHTML ="인증완료되었습니다.";    

     
}

function ajax(){
  var url ='xml.php'; 
  var values =new Array("default","soft","engi","phar","scien",
                "global","press","econ","design","sports");
  new Ajax.Request(url, {
    method: 'get',
    onSuccess: function(ajax) {
    var dept = ajax.responseXML.getElementsByTagName("title");
    for (var i = 0; i < dept.length; i++) {
    var option = $(document.createElement("option"));
    option.innerHTML = dept[i].firstChild.nodeValue;
    option.value = values[i];
    $("col").appendChild(option);
    }
    
  }
});

}









