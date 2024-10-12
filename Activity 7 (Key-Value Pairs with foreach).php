<?php
$studentInfo = array(
    "Name" => "Jester",
    "Age" => 21,
    "Grade" => "S",
    "City" => "Baguio"
);

foreach ($studentInfo as $key => $value) {
    echo $key . ": " . $value . "\n";
}
?>