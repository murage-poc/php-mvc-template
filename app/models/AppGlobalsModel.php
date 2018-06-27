<?php

/**
 * Created by PhpStorm.
 * User: mimidots
 * Date: 6/5/2018
 * Time: 6:33 PM
 */
class AppGlobalsModel{

    public static function baseurl()
    {
        return env('APP_URL');
    }

    public static function appname()
    {
        return env('APP_NAME');
    }

    public static function author()
    {
        return env('APP_AUTHOR');
    }

}