<!DOCTYPE html>
<?php
// connect to db
$conn = mysqli_connect('localhost','root','password','dbtest');

//check connection
if(!$conn){
    echo 'Connection error ';
}
?> 
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Registration form example</title>
 
<link rel="stylesheet" type="text/css" href="login.css">
 
</head>
 
<body>
 
<div id="container">
<form method="post" id="flogin">
 
<div class="border-box">
<h2>Login Form</h2>
<input type="text" name="user" placeholder="Enter Username" id="uname"><br/>
 
<input type="password" name="pass" placeholder="Enter Password" id="upass"><br/>
 
<button type="submit" name="submit" value="Submit">Login</button>
<?php
if(isset($_POST['submit']))
{		
    $username = $_POST['user'];
    $pwd = $_POST['pass'];

    $insert = mysqli_query($conn,"select id from users where pseudo='$username' and pwd='$pwd'");
    $result = mysqli_fetch_array($insert,MYSQLI_ASSOC);
    print_r($result);
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Log in successful.";
    }

}
?>
<a href="register.php">No account? Register here</a>
</div>

 
</form>
</div>
 
</body>
</html>