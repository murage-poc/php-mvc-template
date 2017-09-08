<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
require_once 'vendor/autoload.php';


/*
 * Die and Dump
 *
 * @param $data
 */
function dd( $data = [] ) {
	echo '<pre>';
	die( var_dump( $data ) );
	echo '</pre>';
}


/**
 * @param $name :the name of the view
 * @param array $data :optional data to be passed to the view
 */
function view( $name ,$data=[]) {
	extract($data);
	
	return require "resources/views/{$name}.view.php";
	
}


function env($key){
	
	if(!is_string($key)){
		
		throw new Exception("Invalid key provided {$key}");
	}
	
	if(array_key_exists($key,Env::getEnv())){
		return Env::getEnv()[$key];
	}
	throw new Exception("no defined environment variable for {$key}");
}

?>