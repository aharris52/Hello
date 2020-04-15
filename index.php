<?php
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// Instantiate the Fat Free Famework (F3) Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /contact-us', function(){
    echo '<h1>Hello world!</h1>';

    $view = new Template();
    echo $view
});

// Run Fat Free
$f3->run();