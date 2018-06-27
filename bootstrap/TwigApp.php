<?php
/**
 * User: mimidots
 * Date: 4/16/2018
 * Time: 12:38 PM
 */

class TwigApp
{

    /**
     *
     * Initialize the twig library
     */
    public static function render($view,$data){

        $twigLoad=new Twig_Loader_Filesystem('resources/views/');

        $twig=new Twig_Environment($twigLoad);

        echo $twig->render($view,$data);
    }


}