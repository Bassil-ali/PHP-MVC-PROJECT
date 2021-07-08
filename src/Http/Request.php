<?php

namespace secheater\Http;

use secheater\support\Arr;

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

    public function all()
    {
        return $_REQUEST;
    }

    public function only($keys)
    {
        return Arr::only($this->all(), $keys);
    }

    public function get($key)
    {
        return Arr::get($this->all(), $key);
    }
    


}