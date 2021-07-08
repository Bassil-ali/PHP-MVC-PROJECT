<?php

namespace secheater\Http;

use secheater\view\view;


class Route
{

    public $request;

    public $response;

    public function __construct($request,$response){

        $this->request = $request;
        $this->response = $response;

    }

   public static array  $routes = [];

   public static function get($route ,$action){

    self::$routes['get'][$route] = $action;

   }

   public static function post($route,$action){

    self::$routes['post'][$route] = $action;

   }

   public function resolve(){

    $path = $this->request->Path();

    $method  = $this->request->method();
    
    $action  = self::$routes[$method][$path] ?? false;


       if(!array_key_exists($path, self::$routes[$method])){

        $this->response->setStatusCode(404);

        view::makeError('404');
     }
   
       if(is_callable($action)){

        call_user_func_array($action,[]);

       }


       if(is_array($action)){

        call_user_func_array([new $action[0],$action[1]],[]);

       }

   }


  





}