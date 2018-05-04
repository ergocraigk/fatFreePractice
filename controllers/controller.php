<?php
    function welcome(){
        echo 'hello';
    }

    function printSaying(){
        //gather up the data needed

        //show the view
        echo Template::instance()->render('views/saying.php');
    }

    function printSpecificSaying($fatFree, $message){
        //save a value as a "router variable"
        $fatFree->set('message', $message);

        //show the message
        echo Template::instance()->render('views/specificSaying.php');
    }

    function printHomeTown($fatFree, $town){
        //snag a variable from the router
        $fatFree->set('town', $town);

        //display the home town given
        echo Template::instance()->render('views/homeTown.php');
    }

    function printPrimes($fatFree, $low, $high){
        $primes = findPrimes($low, $high);

        //save our data to the router
        $fatFree->set('primes', $primes);

        //load the page
        echo Template::instance()->render('views/primes.php');
    }


?>