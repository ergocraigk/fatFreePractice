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
?>