<?php
trait Log {
  protected function log($msg){
    echo "{$msg} \n";
  }
  private function logged($msg){
        echo "{$msg} \n";
  }
}
class Table {
    use Log;
    public function save() {
        $this->logged("Record is saved");
    }
}
(new Table())->save();