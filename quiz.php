<?php
# Random getal tussen de 1 en 100
$random = rand(1, 100);
# Random getal benoemen voor developpen
echo $random."\n\n";

$guess = 0;
# Counter zodat je kan weten in hoeveel beurten je het hebt gedaan
$counter = 0;

# Raad het getal spel
echo "Raad het getal! \n\n";
while($random != $guess) {
    $counter ++;
    $guess = readline("Kies een cijfer: ");
    if ($random > $guess) {
        echo "\n\nHet getal is hoger!\n\n";
    } elseif ($random == $guess) {
        echo "\n\nJe hebt gewonnen, ".$random." was inderdaad het getal!";
        echo "\nJe had ".$counter." beurten nodig.";
    } elseif ($guess > 100) {
        break;
    } elseif ($guess < 0) {
        break;
    }elseif ($guess == "stop") {
        break;
    } else {
        echo "\n\nHet getal is lager!\n\n";
    } 
}

?>