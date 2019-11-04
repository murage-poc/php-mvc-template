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

/**
 *
 * Initialize the twig library
 */
function render($view,$data){
    $loader=new \Twig\Loader\FilesystemLoader('resources/views/');

    if(!$loader->exists($view)){ $view='errors/500.twig';}

    $twig = new \Twig\Environment($loader, []);
    try {
        echo $twig->render($view, $data);
    } catch (\Twig\Error\LoaderError $e) {
        var_dump($e);
    } catch (\Twig\Error\RuntimeError $e) {
        var_dump($e);

    } catch (\Twig\Error\SyntaxError $e) {
        var_dump($e);

    }
}

/**
 * @param $name :the name of the view
 * @param array $data :optional data to be passed to the view
 */
function view( $name ,$data=[]) {

    /*twig rendering now comes into play*/
    render($name.'.twig',$data);

}


/*
 * Die and Dump
 *
 * @param $data
 */
function dd( $data = [] ) {
    echo '<pre>';
    die( var_dump( $data ).'</pre>' );

}


?>