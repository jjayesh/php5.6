<?php
try {
  process_cc();
}
catch (Exception $e){
   echo $e->getMessage()."\n";
}
finally{
    echo 'done'."\n";
}
function process_cc(){
    throw new Exception('No CC number');
}