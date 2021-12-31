<?php
class Message{
                public $id;
    
                public $me;
                public $other;
                public $time ;
                public $content ;
                public $whosent;
                
                
                function __construct($id,$me,$other,$content, $time,$whosent) {
                    $this->id =$id;
                    $this->me =$me;
                    $this->other = $other;
                    $this->time = $time;
                    $this->content = $content;
                    $this->whosent =$whosent;

                    
            }
            function get_id() {
                return $this->id;
              }
            function get_me() {
                return $this->me;
              }
              function get_other() {
                return $this->other;
              }
              function get_content() {
                return $this->content;
              }
              function get_time() {
                return $this->time;
              }
              function get_side() {
                $side = array('<div class="chat-l"><div class="mess">','</div></div><div class="sp"></div></div>');
                $cho ="moi";
                if($this->whosent=='me'){
                    $cho ="autre";
                    $side = array('<div class="chat-r"><div class="sp"></div><div class="mess mess-r">','</div></div></div>');
                }
                // echo $cho;
                return $side;
              }
}
?>