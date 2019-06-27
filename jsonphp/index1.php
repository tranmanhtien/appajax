<?php

$phpArray = array("Hà Nội","Nam Định","Cà Mau");

class Student{

    public $name;

    public $age;

    public $location;

    public function __construct($name,$age,$location)
    {
        $this->name=$name;
        $this->age=$age;
        $this->location=$location;
    }
}
$an= new Student("Trần Văn An",18,"Hà Nội");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($an);
echo "</pre>";

$phpJson1= json_encode($phpArray);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2= json_encode($an);

echo "<pre>";
print_r($phpJson2);
echo "</pre>";

/*
 * kết quả
 * ["H\u00e0 N\u1ed9i","Nam \u0110\u1ecbnh","C\u00e0 Mau"]
{"name":"Tr\u1ea7n V\u0103n An","age":18,"location":"H\u00e0 N\u1ed9i"}
 * */