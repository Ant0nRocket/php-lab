<?php
echo '<h1>Part 03: Basics</h1>';

// echo returns nothing
echo 'Hello world<br>';

// print do the same but returns value
$printReturn = print 'Second line<br>';
echo "Print return is " . $printReturn . "<br>";

// ...so print can be used in sentances
// like that:
$printReturn ? print ':)' : ':('; // output :) 

?>