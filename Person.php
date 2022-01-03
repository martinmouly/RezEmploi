
<?php

class Person {
                public $id;
                public $prenom;
                public $nom;
                public $pp ;
                public $small_description ;
                public $listexp;
                public $coordonnees;

                // function __construct($id,$conn){
                  
                //   $sql = "SELECT * FROM user where id = {$id}";
                //   $result = $conn->query($sql);
                //   $row = $result->fetch_assoc();
                //   foreach(array_keys($row) as $key){
                //     $this->{$key} = $key;
                //   }
                //   $this->listexp = $this->Listexp();
                // }
                // function Listexp(){
                //   $sql = "SELECT * FROM experence where id = {$this->id}";
                //   $result = $conn->query($sql);
                //   $row = $result->fetch_assoc();
                //   $exps = array();
                //   if ($result->num_rows > 0) {
                    
                //     while($row = $result->fetch_assoc()) {
                      
                //       array_push($exps,$row);
                //   }
                //   return exps;
                // }
                // }
                
                function __construct($id,$nom,$prenom, $pp,$small_description,$listexp,$coordonnees) {
                    $this->id =$id;
                    $this->prenom =$prenom;
                    $this->nom = $nom;
                    $this->pp = $pp;
                    $this->small_description = $small_description;
                    
                    $this->listexp=$this->getListexp($id);
                    // print_r($this->listexp);
                    $this->coordonnees = $coordonnees;
                   }
            function getListexp($id){
              $conn = mysqli_connect('localhost','root','password','dbtest');
              $sql = "select * from experience where idcv=$id";
              $result = $conn->query($sql); 
              $exp=array(); 
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                array_push($exp,array("logo"=>$row["logo"], "title"=>$row["title"], "field"=>$row["field"],'date'=>$row["dates"],'more'=>$row["more"],'isformation'=>$row["isformation"]));
                }
                
            } else {
            echo "erre";
            }
            return $exp;

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
                        <h5>{$this->coordonnees}</h5>
                            <div>
                                <button id='contact' onclick='goChat()'> Contacter</button>
                                <button>'Ajouter en ami'</button>
                            </div>
                    </div>
                </div>
                <h4>Experience</h4>";
                $experiences = $this->getListexp($this->id);
                foreach ($experiences as $exp){
                  if($exp['isformation']==False)
                    {$this->affExp($exp);}
                }
                echo "<h4>Formation</h4>";
                foreach ($experiences as $exp){
                  if($exp['isformation']==True)
                    {$this->affExp($exp);}
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