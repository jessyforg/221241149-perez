<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }

    return true; 
}

if (isset($_POST['submit'])) { 
    $number = $_POST['number']; 
    $result = isPrime($number) ? "$number is a prime number." : "$number is not a prime number."; 

    echo $result; 
}
?>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit" name="submit">Check if Prime</button>
</form>