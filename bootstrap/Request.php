<?php

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 13-Aug-17
 * Time: 00:13
 */
class  Request {
	
	/**
	 * returns the request uri.
	 */
	public static function uri() {
		return trim(
			parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH ),
			'/' );
	}
	
	public static function method() {
		return $_SERVER["REQUEST_METHOD"];
	}
}