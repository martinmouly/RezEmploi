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
            $annonce1 = new Annonce(0,$job_title,$compagny,$logo,$text);
            $annonce2 = new Annonce(1,$job_title,$compagny,$logo,$text);
            $annonce3 = new Annonce(2,$job_title,$compagny,"images/bitcoin.png",$text);
            $annonce4 = new Annonce(3,$job_title,$compagny,$logo,$text);
            $annonce5 = new Annonce(4,$job_title,$compagny,$logo,$text);
            $annonce6 = new Annonce(5,$job_title,$compagny,$logo,$text);
            $annonce7 = new Annonce(6,$job_title,$compagny,$logo,$text);
            $annonces =array($annonce1,$annonce2,$annonce3,$annonce4,$annonce5,$annonce6,$annonce7);
            
            echo "<form class='listannonces'method='post'>";
            
                 foreach($annonces as $an){
                     
                    $an->printOneAd();
                    echo "</button>";
                 }
            echo "</form>";
            
            
            ?>
            <div class='full-ad-job' id ='full'>
              <?php
              for($i = 0; $i<count($annonces); $i++)
              {
                  if(isset($_POST["b{$i}"])) {
                      echo $annonces[$i]->printDescription();
                  }
               }
              ?>
            <div>

            
                
                </div></div>
                
            
            

        

                <?php $side->left();?>
        
    </div>
</body>
<html>