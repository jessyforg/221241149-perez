<?php
$favoriteMovies = array(
    "Once upon a time in Hollywood",
    "Fight Club",
    "As Above, So Below",
    "Prisoners",
    "Shutter Island"
);

$i = 1;
foreach ($favoriteMovies as $movie) {
    echo $i . ". " . $movie . "\n";
    $i++;
}
?>