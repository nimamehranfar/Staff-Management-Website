<?php

//echo "<h1 style='color : red'>hello world</h1><br>";
//this is commnent
#loosy type variable

#public_html

$val = 100;
$val1 = 200;
//
//if(){
//
//}else{
//
//}
//
//for($i=0;$i<4;$i++){
//
//}


$str="this is a string";
$strlen = strlen($str);
$str1=str_replace("this","that",$str);


//numeric array
$arr = array('test',1,2,3.5);
//associative array
$array = array("key" => "value" ,"key2" => "value2" );
#  "value" <= $array["key"];

$multi_dim_array = array(array(1,2,3),array(4,5,6));


for ($i=0;$i<count($arr);$i++){
//    echo $arr[$i].'<br>';
//    echo "this string";
//    echo 'this string';
}

foreach ($array as $k => $v){
//    echo $array[$k]."<br>";
}

$big_array=array();
for ($i=0;$i<200;$i++){
    array_push($big_array,rand(1,99999));
}


print_r($big_array);

#  'test' <= $arr[0]
array_push($arr , 'second test');
//echo "<br> array length is : ".count($arr)."<br>";


//echo "the string length : $strlen <br>";
//echo $str1;
?>