<?php
define("WEBROOT",dirname(__FILE__));
define("ROOT",dirname(WEBROOT));
define('DS',DIRECTORY_SEPARATOR);
define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));


include 'db_con.php';

$conn = OpenCon();
CloseCon($conn);

?>
<!DOCTYPE html>
<?php

?>
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="exemple.css">
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
                    <img src="images/profile-pic.png">
                    <?php
                    $Prenom = "Axel";
                    $Nom = "Battut";

                    echo "<div><p>$Prenom $Nom</p><small>Public <i class='fas fa-caret-down'></i></small></div>"
                    ?>
                    
                </div>
                <div class="post-input-container">
                    <textarea rows="3" placeholder= "what's on your mind ?"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="images/live-video.png" >Live video</a>
                        <a href="#"><img src="images/photo.png" >photo/video</a>
                        <a href="#"><img src="images/feeling.png" >feeling</a>
                    </div>
                
                </div>
               
            </div>
            
                <?php
                $Prenomspost = array("Prenompost","Barack ","Prenom");
                $Nomspost = array("Nompost","Obama",'Nom');
                $Date_heures = array("10/10/2021","10/10/2021","10/10/2021");
                $profiles = array('images/profile-pic.png','images/Obama.jpg','images/profile-pic.png');
                $images = array('images/feed-image-1.png','images/Axel.jpg','images/tupac.jpg');
                $Posts = array('WoWOWOWOWOWOWOWOWOWOW il se passe quoi ici ?????? <span>@DonaldTrump</span> 
                <a href="#">#incroyable</a> <a href="#">#AllezParis</a>','Fuck <span>@AxelBattut</span> et sa clique
                <a href="#">#fuckyoubro</a> <a href="#">#Codepromoksdevincipourvoscommandesstackinsats</a>','Tupac me manque
                <a href="#">#CaliforniaLove</a> <a href="#">#Westcoastbro</a> ');
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
                <div class='post-row'>
                    <div class='activity-icons'>
                            <div><img src='images/like-blue.png' >nlikes</div>
                            <div><img src='images/comments.png' >ncom</div>
                            <div><img src='images/share.png' >nshare</div>
                            
                    </div>
                    
                </div>
                </div>"
                ;
                }
                for($i = 0; $i<count($Prenomspost); $i++)
                {
                    
                    writePost($Prenomspost[$i],$Nomspost[$i],$Date_heures[$i],$Posts[$i],$images[$i],$profiles[$i]);
                }
                
                ?>
            
            
            
        </div>
        <?php
        $side->right();
        ?>
        
    </div>
</body>
<html>