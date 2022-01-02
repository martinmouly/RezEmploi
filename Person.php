
<?php
class Person {
                public $id;
                public $prenom;
                public $nom;
                public $pp ;
                public $small_description ;
                public $listexp;

                // function __construct($id,$conn){
                  
                  
                function __construct(...$args){
                    if(count($args)==1)
                  {
                    $this->id = $args[0];
                  $sql = "SELECT * FROM user where id = {$this->id}";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  foreach(array_keys($row) as $key){
                    $this->{$key} = $key;
                  }
                  $experience1 = array("logo"=>'images/ethereum.png', "title"=>'Founder of ethereum', "field"=>"cryptos",'date'=>'2014 -','more'=>$more1,'date'=>'10/12/2016');
                  $experience2 = array("logo"=>'images/bitcoin.png', "title"=>'bitcoin contributor', "field"=>"cryptos",'date'=>'2010-2015','more'=>$more1,'date'=>'10/12/2014');
                  $this->listexp = array($experience1,$experience2);
                }
                  else{
                    $this->id =$args[0];
                    $this->prenom =$args[1];
                    $this->nom = $args[2];
                    $this->pp =$args[3];
                    $this->small_description = $args[4];
                    
                    $this->listexp=$args[5];
                  }
                }
                function Listexp(){
                  $sql = "SELECT * FROM experence where id = {$this->id}";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  $exps = array();
                  if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                      
                      array_push($exps,$row);
                  }
                  return exps;
                }
                }
               
            function get_id() {
                return $this->id;
              }
            function get_nom() {
                return $this->nom;
              }
              function get_prenom() {
                return $this->prenom;
              }
              function get_pp() {
                return $this->pp;
              }
              function get_small_description() {
                return $this->small_description;
              }
              function get_listexp() {
                return $this->listexp;
              }
              function get_info(){
                return array($this->id,$this->nom,$this->prenom,$this->pp);
                

              }
              function getDescription()
            {echo "<div class='info-profile'>               
                    <img src= '{$this->get_pp()}' >                
                    <div>
                        <h4>{$this->get_prenom()} {$this->get_nom()}</h4>
                        <p>{$this->get_small_description()}</p>
                            <div>
                                <button id='contact' onclick='goChat()'> Contacter</button>
                                <button>'Ajouter en ami'</button>
                            </div>
                    </div>
                </div>
                <h4>Experience</h4>";
                $experiences = $this->get_listexp();
                foreach ($experiences as $exp){
                    $this->affExp($exp);
                }
            }
                // display one experience
            function affExp($experience)
            {
                echo "
                
            
            <div class='exp'>
            <div class='info-profile'>
                
                <img src={$experience['logo']} id='compagny' >
                
                <div>
                    
                    <h4>{$experience['title']}</h4>
                    <h6>{$experience['field']}</h6>
                    <h5>{$experience['date']}</h5>
                    
                    </div>
                    

                </div>
                <p>{$experience['more']}</p>
            <h6>added on the :{$experience['date']}  </h6>
            </div>
            ";}
}
 ?>