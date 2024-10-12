<?php
$a = 0; 
$b = 1; 
$count = 0; 

while ($count < 10) { 
    echo $a . " "; 
    $temp = $a; 
    $a = $b; 
    $b = $temp + $b; 
    $count++; 
}
?>