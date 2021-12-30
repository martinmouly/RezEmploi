<?php
    class Experience{
        public $id;
        public $iduser;
        public $logo;
        public $title;
        public $field;
        public $interval;
        public $more;
        public $date;
        function __constructor($iduser,$logo,$title,$field,$interval){
            $this->id=$id;
            $this->iduser=$iduser;
            $this->logo=$logo;
            $this->title=$title;
            $this->field=$field;
            $this->interval=$interval;
        }
        function get_logo(){
            return $this->logo;
        }
        function affExp()
            {
                echo "
                
            
            <div class='exp'>
            <div class='info-profile'>
                
                <img src={$this->get_logo()} id='compagny' >
                
                <div>
                    
                    <h4>{$this->title}</h4>
                    <h6>{$this->field}</h6>
                    <h5>{$this->date}</h5>
                    
                    </div>
                    

                </div>
                <p>{$this->more}</p>
            <h6>added on the :{$this->date}  </h6>
            </div>
            ";}
    }
?>