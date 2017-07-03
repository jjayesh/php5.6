<?php
require __DIR__. '/vendor/autoload.php';
$random = new Rych\Random\Random;
echo $random->getRandomInteger(1, 100);
echo "\n";
