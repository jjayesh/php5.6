<?php
class Magic{
    function __construct() {
      echo "I am the constructor \n";
    }
    function __invoke(){
        echo "I am the invoker \n";
    }
}
$mymagic = new Magic();
$mymagic();
