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
		
		return self::$routes["GET"][ $uri ] = $controller;
	}
	
	public static function post( $uri, $controller ) {
		
		return self::$routes["POST"][ $uri ] = $controller;
	}
	
	public static function load( $file ) {
		$instance = new static();
		
		require $file;
		return $instance;
	}
	
	public static function direct( $uri,$requestType ) {

		if(array_key_exists($uri,self::$routes[$requestType])){
			
			return static::mapController(
				...explode('@',
				self::$routes[$requestType][$uri]
				));
			
		}
		
		throw new Exception("no uri defined for given route");
	}
	
	
	protected function mapController($controller,$action){
		
		$controller=new $controller; //renew the controller class
		
		if(!method_exists($controller,$action)){
			//throw an error
			throw new Exception("{$controller} has no defined {$action}");
		}
		
		return $controller->$action();
		
	}
}