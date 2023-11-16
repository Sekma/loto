<?php
$numArray=[];
while(count($numArray)<20){
    $num=rand(1,70);
    if(in_array($num, $numArray)==false){
        $numArray[]=$num;
    }
};
sort($numArray);
echo implode("-",$numArray);