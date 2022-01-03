<!DOCTYPE html>
<?php

$conn = mysqli_connect('localhost','root','password','dbtest');
?>
<head>
    <meta charset="utf-8">
    
    <title>Social Network</title>
    <link rel = "stylesheet" href = "stylehome.css">
    <link rel = "stylesheet" href = "styleside.css">
    <script src="functions.js"></script>
</head>
<body>
    <?php
    include("side.php");
    $side = new Side();
    $side->navbar();
    ?>
    
    <div class="container">
        
        <?php $side->left();?>
        
        <div class="main-content">
            <div class="write-post-container">
                <div class="user-profile">
                <?php
                    $id = $_SESSION['userid'];
                    $sql = "select prenom,nom,pp from users where id='$id'";
                    $result = $conn->query($sql);  
                    while($row = $result->fetch_assoc()) {
                        $Prenom=$row["prenom"];
                        $Nom = $row["nom"];
                        $Photo = $row["pp"];
                    }
                    echo "<a href = 'profile.php?id=$id'>
        
                    <img src='$Photo' >
                    </a>";
                    $_SESSION['photo'] = $Photo;
                    ?>
                <!-- <a href = 'profile.php?id=$id'>
        
                    <img src="images/profile-pic.png" >
                    </a> -->
                    <?php
                    echo "<div><p>$Prenom $Nom</p><small>Public <i class='fas fa-caret-down'></i></small></div>"
                    ?>
                    
                </div>
                <div class="post-input-container">
                   <form method="post">
                    <textarea rows="3" placeholder= "what's on your mind ?" name='post'></textarea>
                    <div class="add-post-links">
                        <button type="submit" name="submit" value="Submit">SUBMIT</button><br/>
                        <?php
                        if(isset($_POST['submit']))
                        {		
                            echo "bvfzeoufhbzofh";
                            $txt = htmlspecialchars($_POST['post']);
                            $sql = "insert into post(texte,id_user) values('$txt','$id')";
                            $result = $conn->query($sql); 
                            header("Location:home.php");
    
                        }
                        ?>
                        </form>
                    </div>
                
                </div>
               
            </div>
            
                <?php
                
                function writePost($Prenompost,$Nompost,$Date_heure,$Post,$image,$profile)
                {
                    echo "<div class='post-container'>
                    <div class='user-profile'>
                <img src=$profile>
                <div>
                    <p> $Prenompost $Nompost</p>
                    <span>$Date_heure</span>
                </div>
            </div>
                
                
                <p class = 'post-text'>$Post 
                </p>
                <img src=$image class='post-img'>
                <!--<div class='post-row'>
                    <div class='activity-icons'>
                            <div><img src='images/like-blue.png' >nlikes</div>
                            <div><img src='images/comments.png' >ncom</div>
                            <div><img src='images/share.png' >nshare</div>
                            
                    </div>
                    
                </div>-->
                </div>"
                ;
                }
                 
                $sql = "select count(id) from post;";
                $result = $conn->query($sql);  
                if ($result->num_rows > 0) {
                     while($row = $result->fetch_assoc()) {
                        $count=$row["count(id)"]+1;
                    }
                }
                for($i = $count; $i>=1; $i--)
                {
                    $sql = "select * from post join users where post.id=$i;";
                    $result = $conn->query($sql); 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $texte=$row["texte"];
                            $img=$row["img"];
                            $likes=$row["likes"];
                            $prenom=$row["prenom"];
                            $nom=$row["nom"];
                            $pp=$row["pp"];
                            $dates=$row["dates"];
                        }
                    }
                    writePost($prenom,$nom,$dates,$texte,$img,$pp);
                }
                
                ?>
            
            
            
        </div>
        <?php
        $side->right();
        ?>
        
    </div>
</body>
<html>