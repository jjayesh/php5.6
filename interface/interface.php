<?php
interface TableInterface{
    public function save(array $data);
}
interface LogInterface{
    public function log($message);
}
class Table implements TableInterface, LogInterface, Countable{
  public function save(array $data) {
    return "Record is saved \n";
  }
   public function log($data) {
    return "$data is logged \n";
  }
  public function count() {
    return 100 ."\n";
  }
}
echo (new Table())->save([]);
echo (new Table())->log('Data');
echo (new Table())->count();
