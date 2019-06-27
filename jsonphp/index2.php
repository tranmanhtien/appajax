<?php

$json1='["H\u00e0 N\u1ed9i","Nam \u0110\u1ecbnh","C\u00e0 Mau"]';
$json2='{"name":"Tr\u1ea7n V\u0103n An","age":18,"location":"H\u00e0 N\u1ed9i"}';

$convert1=json_decode($json1);
$convert2=json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";