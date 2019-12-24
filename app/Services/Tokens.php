<?php
/**
 * Created by PhpStorm.
 * User: mimidots
 * Date: 7/6/2019
 * Time: 10:28 PM
 */

namespace App\Services;


class Tokens
{

    static function csrfToken(){
        return str_replace('.','-',uniqid(null,true));
    }
}