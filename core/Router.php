<?php
class Router{
    //permet de parser un url
    //@param : url a parser
    // @return tableau contenant les params
    static function parse($url){
        $url = trim($url,'/');
        $params = explode('/',$url);
        print_r($params);
        $r=array(
            'controller' => $params[0],
            'action' => isset($params[1]) ? $params[1] : 'index'
        );
        $r['params'] = array_slice($params,2));
    }
}