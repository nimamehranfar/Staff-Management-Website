<?php

class Person{

    private $name ;
    private $age ;

    public function __construct($name,$age)
    {
        //this.name = name
        $this->name = $name;
        $this->age = $age;
    }

    public static function calStatic(){
        return "this is static function";
    }

    public function printName(){
        return "user name is : ".$this->name;
    }




    public function __toString()
    {
        return "name : ".$this->name." , age : ".$this->age;
        // TODO: Implement __toString() method.
    }

    // super method
    //super global



}

?>