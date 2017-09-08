<?php

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 31-Aug-17
 * Time: 07:01
 */
use Dotenv\Dotenv;

class Env {
	
	
	public static function getEnv() {
		$c = new Dotenv( './' );
		
		$envVariables=[];
		
		foreach ( $c->load() as $var ) {
			$config=explode('=',$var);

			$envVariables[$config[0]]=$config[1];
		}
		return $envVariables;
		
	}
}