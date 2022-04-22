<?php

    //variable
    $color = "blue";
    //cannot start a variable with number
    //não pode começar variével com número
    //$1color = "black"; => error
    echo $color;

    //variable global
    $x = 10;
    $y = 5;
    function test(){
        global $x, $y;
        $z = $x + $y;
        echo "<br>variable x is: $z"; 
    }

    test();
    //variable z is not global - error
    echo "$z";
    echo "<br>Error - variable z is not global";

?>
