<?php
//Variable scope | lingkup variabel
$x = 10; //variabel lokal

function tampilX() {
    global $x;
    echo $x;

}

tampilX();
?>