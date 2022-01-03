<!DOCTYPE html>
<?php
include "Person.php";
session_start();
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
<h2>Login </h2>

<input type="text" name="user" placeholder="Enter Username" id="uname"><br/>
 
<input type="password" name="pass" placeholder="Enter Password" id="upass"><br/>
 
<button type="submit" name="submit" value="Submit">Login</button><br/>
<a href="register.php">No account? Register here</a>
<?php
if(isset($_POST['submit']))
{		
    $username = $_POST['user'];
    $pwd = $_POST['pass'];
    $sql = "select id from users where pseudo='$username' and pwd='$pwd'";
    $result = $conn->query($sql);  
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"];
          $id=$row["id"];
        }
      } else {
        echo "0 results";
      }
    if($id==null)
    {
        echo("Utilisateur/Mot de passe incorrect");
    }
    else
    {    
        $_SESSION['userid'] = $id;
        echo("login successful");
        header("Location:home.php");
    }

}
?>

</div>

 
</form>
</div>
 
</body>
</html>