<?php

# Random getal tussen de 1 en 100
$random = rand(1, 100);
# Random getal benoemen voor developpen
echo $random."\n\n";

$guess = null;
# Counter zodat je kan weten in hoeveel beurten je het hebt gedaan
$counter = 0;

# Raad het getal spel
echo "Raad het getal! \n\n";
while($random != $guess) {
    $counter ++;
    $guess = readline("Kies een cijfer: ");
    if ($guess < 1 || $guess > 100 || $guess == "stop") {
        break; // Stopt als je een getal lager dan 1 of hoger dan 100 invoert en als je stop invoert
    }
    if ($random > $guess) {
        echo "\n\nHet getal is hoger!\n\n";
    } elseif ($random == $guess) {
        echo "\n\nJe hebt gewonnen, ".$random." was inderdaad het getal!";
        echo "\nJe had ".$counter." beurten nodig.";
    } else {
        echo "\n\nHet getal is lager!\n\n";
    } 
}

?>