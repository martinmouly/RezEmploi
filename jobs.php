<?php

?>



<!doctype html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <script src="functions.js" type="text/JavaScript"></script>
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "stylejobs.css">
    
</head>
<body>
    <p id = "ui"></p>
    <?php
    include("side.php");
    $side = new Side();
    $side->navbar();
    ?>
    <div class="container">
    <?php $side->left();?>
        <div class="job-ads">
            
            <?php
            $_SESSION['txtJob']="";
            include("Annonce.php");
            $job_title = "job title";
            $compagny = "Avalanche";
            $logo = "images/avalanche.png";
            $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
            $annonce1 = new Annonce(1,$job_title,$compagny,$logo,$text);
            
            echo "<div class='listannonces'>";
            
                 for($u =0;$u<10;$u+=1){
                     
                    $annonce1->printOneAd();
                    echo "</button>";
                 }
            echo "</div>";
            
            $txt =$_SESSION['txtJob'];
            echo $txt;
            echo 
            "<div class='full-ad-job' id ='full'>
              $txt
            <div>";

            
                ?>
                </div></div>
                
            
            

        

                <?php $side->left();?>
        
    </div>
</body>
<html>