<?php

$sonawap = new mysqli("localhost", 'root', '', 'phpbeginner');

if($sonawap->connect_error){
    printf("Connection Failed", $sonawap->connect_error);
}