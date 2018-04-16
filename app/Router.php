<?php

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:39
 */
class Router {
	
	public static $routes = [
		'GET'  => [],
		"POST" => []
	];
	
	
	/**
	 * @param $uri
	 * @param $controller
	 *
	 * @return mixed
	 */
	public static function get( $uri, $controller ) {
		
		return self::$routes["GET"][ trim($uri,'/') ] = $controller;
	}
	
	public static function post( $uri, $controller ) {
		
		return self::$routes["POST"][ trim($uri,'/') ] = $controller;
	}
	
	public static function load( $file ) {
		$instance = new static();
		
		require $file;
		return $instance;
	}
	
	public static function direct( $uri,$requestType ) {

		if(array_key_exists(trim($uri,'/'),self::$routes[$requestType])){
			
			return static::mapController(
				...explode('@',
				self::$routes[$requestType][$uri]
				));
			
		}
		//return an error general page
		return view("errors/404");
	}
	
	
	protected static function mapController($controller,$action){
		
		$controller=new $controller; //renew the controller class
		
		if(!method_exists($controller,$action)){
			//return an error page
			return view("errors/500");
		}
		
		return $controller->$action();
		
	}
}