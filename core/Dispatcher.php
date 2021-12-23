<?php 
class  Dispatcher{
    var $request; 
    function __construct(){
        $this->request = new Request();
        echo $this->request->url;
        Router::parse($this->request->url);
    }
}
?>