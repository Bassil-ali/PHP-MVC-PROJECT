<?php

namespace secheater\Http;

class Request{

    public function Method(){

        return strtolower($_SERVER['REQUEST_METHOD']);

    }

    public function Path(){

        $path = $_SERVER['REQUEST_URI'];

        if(strpos($path,'?') > -1){

           return explode('?',$path);

        }else{

            return $path;
        }

    }
    


}