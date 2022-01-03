<!doctype html>
<head>
    <meta charset="utf-8">
    <script src="webroot/js/functions.js"></script>
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "stylehome.css">
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
<?php
    $conn = mysqli_connect('localhost','root','password','dbtest');
    $side->navbar();
    ?>
    <div class="container">
    <?php $side->left();?>
        <div class="main-content"id = "centerprofile">
            <?php
            session_start();
            $id = $_SESSION['userid'];
            // echo $id;

            include("Person.php");
            $nom ='Buterin ';
            $prenom = 'vitalik';
            $pp = 'images/vitalik.jpg';
            $small_description ='ethereum co-founder, met Axel Battut in july 2021';
            $more1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni";
            $experience1 = array("logo"=>'images/ethereum.png', "title"=>'Founder of ethereum', "field"=>"cryptos",'date'=>'2014 -','more'=>$more1,'date'=>'10/12/2016','isformation'=>False);
            $experience2 = array("logo"=>'images/bitcoin.png', "title"=>'bitcoin contributor', "field"=>"cryptos",'date'=>'2010-2015','more'=>$more1,'date'=>'10/12/2014','isformation'=>True);
            $profile1 = new Person(1,$nom,$prenom,$pp,$small_description,array($experience1,$experience2),"tel : 0679887907");
            $profile2 = new Person(2,"juknk","njkn",$pp,$small_description,array($experience1,$experience2),"tel : 0679edz07 mail : ,kclz,ckl@gmail.com");
            $profiles = array($profile1,$profile2);
            // $profile1 = new Person($conn,0);
            // $profile2 = new Person($conn,1);
            $coordonnees = 'tel : 0689564390';

            
            //test d'affichage des results
            // while ($row = mysql_fetch_assoc($result)) {
            //     echo $row['id'];
            //     echo $row['nom'];
            //     echo $row['prenom'];
            //     $perso = new Person($row['id'],$row['nom'],$row['prenom'],$row['pp'],$row['small_description'],array($experience1,$experience2),$row['coordonnees']);
            // }
            $sql = "select * from users where id=$id";
            $result = $conn->query($sql);  
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                
                $perso = new Person($row['id'],$row['nom'],$row['prenom'],$row['pp'],$row['small_description'],array($experience1,$experience2),$row['coordonnees']);
                }
                
            } else {
            echo "erre";
            }


            if (PHP_SAPI === 'cli') {
                $id = $argv[1];
            }
            else {
                $idSelect = $_GET['id'];
                
            }
            // $perso = $profiles[$idSelect];
            //display all in the Person class
            $perso->getDescription();
            ?>  
        </div>
        <?php $side->right();?>
        
    </div>
</body>
<html>