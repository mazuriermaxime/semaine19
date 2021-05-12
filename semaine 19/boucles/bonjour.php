<?php
$a = 0; 

while ($a < 150) { 
    $a += 1;  
    if ($a % 2 == 0){
        echo "\n";
        continue;
    } 
    echo "$a. \n";
} 
?>