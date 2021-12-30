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
function UpdateStatus(){

  //make an ajax call and get status value using the same 'id'
  var var1= document.getElementById("status").value;
  $.ajax({
  
          type:"GET",//or POST
          url:'profile.php',
                             //  (or whatever your url is)
          data:{'id':0},
          //can send multipledata like {data1:var1,data2:var2,data3:var3
          //can use dataType:'text/html' or 'json' if response type expected 
          success:function(responsedata){
                 // process on data
                 alert("got response as "+"'"+responsedata+"'");
  
          }
       })
  
  }
