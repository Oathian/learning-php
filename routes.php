<?php 

$router -> get('', "PagesController@home");
$router -> get('info', "PagesController@info");
$router -> get('users', 'UsersController@index');
$router -> post('users', 'UsersController@store');
