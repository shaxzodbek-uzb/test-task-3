<?php

use App\Yoyo\Route;
use App\Controllers\Api\DataController;

Route::pathNotFound(function(){
    echo json_encode(["result" => "404 not found"]);
});
Route::methodNotAllowed(function(){
    echo json_encode(["result" => "Method not allowed"]);
});

Route::add('/',function(){
    echo json_encode(["result" => "Welcome ;)"]);
});
Route::add('/currencies',[new DataController(), 'index'],'get');

Route::add('/currencies/([0-9]*)',[new DataController(), 'show'], 'get');

Route::run('/');