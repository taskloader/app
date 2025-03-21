<?php

include 'AnyMiddleware.php';

$router->get('/', function() {
	//Task::get('view')->set('title', 'Homepage');
	//Task::get('view')->requireFile(__DIR__.'/templates/layout.php');
    echo 'You are home';
})->name('home');


$router->get('/any/:name', function( $name ) {
	echo "Hello $name";
})->middleware('AnyMiddleware');


$router->get('error404', function() {
    echo "\nRoute not found";
});
