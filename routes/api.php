<?php


Router::get('api/v1/users','UsersController@fetch');
Router::post('api/v1/users','UsersController@add');

?>