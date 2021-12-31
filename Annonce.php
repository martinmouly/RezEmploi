<?php
echo '<Head><script src="functions.js"></script><Head>';
class Annonce{
                public $id;
                public $job_title;
                public $compagny;
                public $logo ;
                public $text ;
                public $txt;
                function __construct($id,$job_title, $compagny,$logo,$text) {
                    $this->id =$id;
                    $this->job_title = $job_title;
                    $this->compagny = $compagny;
                    $this->logo = $logo;
                    $this->text = $text;
                    $this->txt = $this->printDescription();
            }
            function get_job_title() {
                return $this->job_title;
              }
              function get_compagny() {
                return $this->compagny;
              }
              function get_logo() {
                return $this->logo;
              }
              function get_text() {
                return $this->text;
              }
              function get_small_text(){
                  
                return substr($this->text,0,100) . "...";
              }
              function printOneAd()
            {
               
                $p='JobId'.$this->id;
                echo
                "<button type='input' name = 'b{$this->id}' >
                    <div class='small-ad' >
                        <div>
                            <img src={$this->get_logo()}  class='brand-logo'>
                            <span>
                                <h4>{$this->get_job_title()} </h4>
                                <h5>{$this->get_compagny()}</h5>
                            </span>
                            
                            
                        </div>
                        <p>{$this->get_small_text()}</p>
            
                    </div>
                </button>
                "
                ;}
                function  printDescription()
                {return "
                <div>
                    <img src={$this->get_logo()}  class='brand-logo'>geniozthgoethgmqldrv
                    <span>
                        <h4>{$this->get_job_title()} </h4>
                        <h5>{$this->get_compagny()}</h5>
                    </span>
                    
                    
                </div>
                <p>{$this->get_text()}</p>
       
            ";}
                
            }


?>