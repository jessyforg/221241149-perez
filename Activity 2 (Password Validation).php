<?php
  $pass = ""; 
  do {
    echo "Please enter the password: ";
    $input = trim(fgets(STDIN)); 
    if ($input != "password123") {
      echo "Incorrect password.\n";
    } else {
      $pass = $input;
    }
  } while ($pass != "password123");

  echo "Access Granted.\n";
?>
