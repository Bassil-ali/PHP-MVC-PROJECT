<?php

namespace secheater\Http;

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



}