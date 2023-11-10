<?php require 'Person.php' ?> <!-- important -->
<?php //include 'Person.php' ?><!-- # so so-->
<?php

#$test = 22;
#$test = " ssss" ;

$p = new Person("ali",22);
echo Person::calStatic()."<br>";
echo $p->printName()."<br>";

echo calc(2,3);





function calc($var1,$var2){
    return $var1 ** $var2;
}

?>