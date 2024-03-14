<?php
$arr=array("ralmi ","sam-sing ","ipone ");
$i=1;
foreach($arr as $v){
    echo "$i) $v";
    $i++;
}
echo "<br> after pop last element : ";
array_pop($arr);
$i=1;
foreach($arr as $v){
    echo "$i) $v";
    $i++;
}
echo "<br> after push element : ";
array_push($arr,"vivo");
$i=1;
foreach($arr as $v){
    echo "$i) $v";
    $i++;
}

?>