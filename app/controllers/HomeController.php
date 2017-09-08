<?php

/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:50
 */


use Controller\Controller;


class HomeController extends Controller{
	
	public static function index(){
		return view('home');
	}
	
}