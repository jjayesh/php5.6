<?php
$greet = function($name){
  print "Welcome {$name} !!!! \n";
};

$greet('PHP 7');
$greet('Drupal 8');
$filter_array = array();
$filter_func = function($item){
  if ($item%2 == 0){
     $filter_array[] = $item; 
  }
  return $filter_array;
};
$filter = array_filter(array(1,2,3,4,5,6,7,8,9,10,12,15,11,13,16,14), $filter_func);
