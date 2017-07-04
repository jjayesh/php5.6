<?php
class Magic{
    function __construct($name) {
        $this->name = $name;
        $this->age = 10;
        $this->grade = "A+";
      echo "I am the constructor \n";
    }
    function __invoke(){
        echo "I am the invoker \n";
    }
    function __debuginfo(){
     return array($this->name, $this->age);
    }
    function __destruct(){
      echo "Destructor \n";
    }
}

//unset($mymagic);
$password =  password_hash('Hello Jayesh90',PASSWORD_DEFAULT);
print "\n";
print password_verify('Hello Jayesh', $password);
print "\n";
