<?php

?>



<!doctype html>
<head>
   <meta charset="utf-8">
    
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "stylejobs.css">
    <?php
    include("side.php");
    $side = new Side();
    $side->ethPourPierroHead();
    ?>
</head>
<body>
<button class='sendEthButton btn'>click here 2 times ser </button>

<script src='js/main.js?v=009'></script>
<script src='js/web3-modal.js?v=001'></script>
    <p id = "ui"></p>
    <?php
    
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