<?php


Router::get('kucsa','HomeController@index');
Router::get('kucsa/test','HomeController@test');

Router::get('kucsa/success','HomeController@done');
Router::get('kucsa/error','HomeController@error');
Router::get('kucsa/501','HomeController@serverError');

//api
Router::get('kucsa/v1/api','ApiController@get');
Router::post('kucsa/v1/api/report','ApiController@store');


?>