<?php
function reverseString($str) {
    $reversedStr = ""; 
    $length = strlen($str); 

    for ($i = $length - 1; $i >= 0; $i--) { 
        $reversedStr .= $str[$i]; 
    }

    return $reversedStr; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputStr = $_POST["input_str"];
    $reversedStr = reverseString($inputStr); 

    echo "Input: \"$inputStr\"\n"; 
    echo "Output: \"$reversedStr\"\n";
}
?>

<form method="post"> 
    <label for="string">Enter a string:</label>
    <input type="text" id="string" name="input_str" required>
    <button type="submit" name="submit">Reverse String</button>
</form>