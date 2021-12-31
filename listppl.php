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
    <p id = "ui"></p>
    <?php
    
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
            $profile1 = new Person(0,$nom,$prenom,$pp,$small_description,array($experience1,$experience2));
            $profile2 = new Person(1,"juknk","njkn",$pp,$small_description,array($experience1,$experience2));
            $profile3 = new Person(2,"Obama","Barack",$pp,$small_description,array($experience1,$experience2));
            $profile4 = new Person(3,"Pierre","Gueveneux",$pp,$small_description,array($experience1,$experience2));
            $profile4 = new Person(4,"Michele","Obama",$pp,$small_description,array($experience1,$experience2));
            
            $profiles = array($profile1,$profile2,$profile3,$profile4);
            $keyword = $_POST['keyword'];
            
            echo $keyword;
            $result = array();
            foreach($profiles as $perso ){
                print_r( $perso->get_info());
                if(in_array($keyword, $perso->get_info())){
                array_push($result,$perso);
                }
            }
            function dispOneresult($perso)
            {echo "<div class='info-profile'>
                
                <img src={$perso->get_pp()} >
                
                <div>
                    <h4>{$perso->get_prenom()} {$perso->get_nom()}</h4>
                    <p>{$perso->get_small_description()}</p>
                    <div>
                        <button id='contact' onclick='goChat()'> Contacter</button>
                        

                    <button>Ajouter en ami</button>

                    </div>
                    

                </div>

                
                
                
            </div>";}
            foreach($result as $perso){
                dispOneresult($perso);
            }
            ?>
            
            
        </div>
        
        <?php $side->right();?>
        
    </div>
</body>
<html>