<?php

?>



<!doctype html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <?php
    include("side.php");
    $side = new Side();
    $side->ethPourPierroHead();
    ?>
    <script src="functions.js" type="text/JavaScript"></script>
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "messageries.css">
    
</head>
<body>
<button class='sendEthButton btn'>click here 2 times ser </button>

<script src='js/main.js?v=009'></script>
<script src='js/web3-modal.js?v=001'></script>"
    <p id = "ui"></p>
    <?php
    
    $side->navbar();
    ?>
    <div class="container">
    <div class = "contacts">
    <h4>Conversation</h4>
    <form method="post">
    <?php
    include("Person.php");
    $prenom = "Prenom";$nom = "Nom";
    $p = array();
    function dispContact($perso){
        echo "<button class='online-list'>
        <div class='online'>
            <img src={$perso->pp} >
        </div>
        <p>$perso->prenom $perso->nom </p>
    </button>";
    }
    
    for ($u=0;$u<20;$u++)
    {
       
        array_push($p,new Person($u,$nom.$u,$prenom.$u, 'images/member-2.png',"",NULL));
        dispContact($p[$u]);
    }

    ?>
    
        
        
       
    
    </form>
        </div>
        
    
        <!-- <?php $side->left();?> -->
        <div class="chat">
            <?php
            
            include("Message.php");
            $nom ='Buterin ';
            $prenom = 'vitalik';
            $pp = 'images/vitalik.jpg';
            $small_description ='ethereum co-founder, met Axel Battut in july 2021';
            $more1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electroni";
            $experience1 = array("logo"=>'images/ethereum.png', "title"=>'Founder of ethereum', "field"=>"cryptos",'date'=>'2014 -','more'=>$more1,'date'=>'10/12/2016');
            $experience2 = array("logo"=>'images/bitcoin.png', "title"=>'bitcoin contributor', "field"=>"cryptos",'date'=>'2010-2015','more'=>$more1,'date'=>'10/12/2014');
            $me = new Person(1,$nom,$prenom,$pp,$small_description,array($experience1,$experience2));
            $other =$me = new Person(2,"user","other","images/axel.jpg",$small_description,array($experience1,$experience2));
            $time1 = date('d-m-Y', strtotime('-1 week'));
            $message1 = new Message(0,$me,$other,"message 1 de moi ",$time1,'me');
            $time2 = date('d-m-Y', strtotime('-1 week + 1  day'));
            $message2 = new Message(1,$me,$other,"message 2 de l'autre ",$time2,'other');
            $messages = array($message1,$message2)
            ?>
			
            
			
				
                <?php
                // function getMessage($message)
           ?>
           <div class="chat-header">
				<div class="profile">
					<div class="left">
						<img src="img/arrow2.png" class="arrow">
						<img src="img/pp.png" class="pp">
						<h2>Elias</h2>
						<span>online</span>
					</div>
					<div class="right">
						<img src="img/video2.png" class="icon">
						<img src="img/phone.png" class="icon">
						<img src="img/more2.png" class="icon">
					</div>
				</div>
			</div>
            <div class="chat-box">
                <?php
                function getOneMessage($message)
                {echo "{$message->get_side()[0]}>
					
						<p>
                        {$message->get_content()}
                        
						</p>
						<div class='check'>
							<span>{$message->get_time()}</span>
                        {$message->get_side()[1]}
						
				";}
                foreach($messages as $msg)
                {getOneMessage($msg);}
                 

                ?>
                
			</div>
				
			<div class="chat-footer">
				<img src="images/emo.png" class="emo">
				<textarea placeholder="Type a message"></textarea>
				<div class="icons">
					<img src="images/attach file.png">
					<img src="images/camera.png">
				</div>
				<img src="images/mic.png" class="mic">
			</div>
		</div>
        
        <!-- <?php
        $side->right();
        ?> -->
        
    
</body>
<html>