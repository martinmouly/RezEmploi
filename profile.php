<!doctype html>
<head>
    <meta charset="utf-8">
    <script src="webroot/js/functions.js"></script>
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "stylehome.css">
</head>
<body>
<?php
    include("side.php");
    $side = new Side();
    $side->navbar();
    ?>
    <div class="container">
    <?php $side->left();?>
        <div class="main-content"id = "centerprofile">
            <?php
            include("Person.php");
            $nom ='Buterin ';
            $prenom = 'vitalik';
            $pp = 'images/vitalik.jpg';
            $small_description ='ethereum co-founder, met Axel Battut in july 2021';
            $more1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni";
            $experience1 = array("logo"=>'images/ethereum.png', "title"=>'Founder of ethereum', "field"=>"cryptos",'date'=>'2014 -','more'=>$more1,'date'=>'10/12/2016');
            $experience2 = array("logo"=>'images/bitcoin.png', "title"=>'bitcoin contributor', "field"=>"cryptos",'date'=>'2010-2015','more'=>$more1,'date'=>'10/12/2014');
            $profile1 = new Person(1,$nom,$prenom,$pp,$small_description,array($experience1,$experience2));
            $profile2 = new Person(2,"juknk","njkn",$pp,$small_description,array($experience1,$experience2));
            $profiles = array($profile1,$profile2);
            if (PHP_SAPI === 'cli') {
                $id = $argv[1];
                
            }
            else {
                $idSelect = $_GET['id'];
                
            }
            $perso = $profiles[$idSelect];
            //display all in the Person class
            $perso->getDescription();
            ?>  
        </div>
        <?php $side->left();?>
        
    </div>
</body>
<html>