<?php
//echo "vitaly";exit;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$basePath = '/rest-api-example/public';

$app->get("$basePath/", 'DefaultController@get');
$app->post("$basePath/", 'DefaultController@post');
