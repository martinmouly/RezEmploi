
<?php
class Person {
                public $id;
                public $prenom;
                public $nom;
                public $pp ;
                public $small_description ;
                public $listexp;
                
                function __construct($id,$nom,$prenom, $pp,$small_description,$listexp) {
                    $this->id =$id;
                    $this->prenom =$prenom;
                    $this->nom = $nom;
                    $this->pp = $pp;
                    $this->small_description = $small_description;
                    
                    $this->listexp=$listexp;
                    
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
                </div>";
                $experiences = $this->get_listexp();
                foreach ($experiences as $exp){
                    $this->affExp($exp);
                }
            }
                // display one experience
            function affExp($experience)
            {
                echo "
                
            <h4>Experience</h4>
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