function goChat() {
    console.log("test")
    document.location.href='messagerie.html';
}
function getProfile(){
    document.location.href='profile.html';
}
function getAll(txt){
  document.getElementsByClassName("full-ad-job").innerHTML = txt;
}