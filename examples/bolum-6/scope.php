<?php
    // global scope
    
    
    $x = 5;
    
    echo $x."<br>";

    function test() {
        // local scope
        $x = 10;
        echo $x."<br>";
    }

    function test2() {
        global $x;
        echo $x."<br>";
    }

    function test3() {
        $GLOBALS['x'] = 15;
    }

    test();
    test2();
    test3();
    echo $x."<br>";
?>