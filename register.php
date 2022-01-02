<!DOCTYPE html>
 
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
<?php
$conn = mysqli_connect('localhost','root','password','dbtest');
if(isset($_POST['submit']))
{		
    $username = $_POST['user'];
    $pwd = $_POST['pass'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    $insert = mysqli_query($conn,"INSERT INTO `users`(`pseudo`, `pwd`,`prenom`,`nom`) VALUES ('$username','$pwd','$prenom','$nom')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }

}
?>
<div class="border-box">
<h2>New account</h2>
<input type="text" name="user" placeholder="Enter Username" id="uname"><br/>

<input type="text" name="prenom" placeholder="Enter Prenom" id="prenom"><br/>

<input type="text" name="nom" placeholder="Enter Nom" id="nom"><br/>
 
<input type="password" name="pass" placeholder="Enter Password" id="upass"><br/>


 
<button type="submit" value="Submit" name="submit">Register</button>

<a href="index.php">Already have an account? Sign in!</a>
</div>
 
</form>
</div>
 
</body>
</html>