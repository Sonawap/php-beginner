<?php
$name = "Matt";
$age = 20;

if($age >= 18 and $age < 21){
    echo "You are free to drink in UK";
}elseif($age >= 21){
    echo "You are free to drink in both UK and USA";
}else{
    echo "You are below drinking age";
}