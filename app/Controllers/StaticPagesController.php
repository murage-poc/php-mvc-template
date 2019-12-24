<?php

/**
 * All rights reserved.
 * User: mimidots
 * Date: 06-Aug-17
 * Time: 16:50
 */
namespace App\Controllers;

class StaticPagesController{
	
	public static function serveLogin(){
		 view('login');
	}

    public static function serveHome(){
        view('home',['somedata'=>["this","is","awesome"]]);
    }

}