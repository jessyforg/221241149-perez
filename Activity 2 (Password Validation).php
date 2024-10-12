<?php
$password = "password123";
$isValid = false;

do{
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $inputPassword = $_POST["password"];

      if ($inputPassword != $password) {
        echo "Incorrect Password.\n";
      }else{
        $isValid = true;
        echo "Access Granted.";
      }
  }
} while (!$isValid);
?>

<form method="post">
  <label for="pass">Enter the password: </label>
  <input type="text" id="string"name="input_str"required>
  <button type="submit" name="submit">submit</button>
</form>