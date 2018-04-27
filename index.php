<?php
    //turn on some global settings
    error_reporting(E_ALL);

    //global includes
    require_once 'controllers/controller.php';

    //load the fat free framework
    $fatFree = require 'vendor/bcosca/fatfree-core/base.php';

    $fatFree->set('ONERROR', function($fatFree){
        echo $fatFree->get('ERROR.text');
    });

    //define some routes
    $fatFree->route('GET /', function(){
       welcome();
    });

    $fatFree->route('GET /favoriteSaying', function(){
       printSaying();
    });

    $fatFree->route('GET /saying/@message', function($fatFree, $params){
        printSpecificSaying($fatFree, $params['message']);
    });

    $fatFree->run();
?>