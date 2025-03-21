<?php
// router.php

// Remove get parameters from url
$request = explode( '?', $_SERVER["REQUEST_URI"] )[0];


// Match any resource files
if (preg_match('/\.(?:png|jpg|jpeg|gif|php|css|js|html|eot|woff|ttf|svg)$/', $request)) {
    return false;    // serve the requested resource as-is.
    
    
} else { // redirect to index
	$_GET['REQUEST_URI'] = $request;
    require 'index.php';
}
?>

