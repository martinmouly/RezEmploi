function goChat() {
    console.log("test")
    document.location.href='messagerie.html';
}
function getProfile(){
    document.location.href='profile.html';
}
function updatetxt(text){
  
  document.getElementById('full').innerHTML = "<?php $o=$_SESSION[text] ;echo $o; ?>" ; 
}
function foo (txt) {
  $.ajax({
    type: "POST", //request type
    success:function(txt){
      getAll(txt);
   }
 });
}
