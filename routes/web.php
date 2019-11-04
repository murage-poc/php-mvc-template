<?php


Router::get('','StaticPagesController@serveLogin');
Router::get('login','StaticPagesController@serveLogin');
Router::get('home','StaticPagesController@serveHome');



?>