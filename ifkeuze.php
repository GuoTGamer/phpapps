<?php

$jaar=25;

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");

echo "Hallo $naam \n";

if ( $leeftijd < $jaar ) {
        echo "Jij ben jonger dan $jaar jaar.\n";
}
if ( $leeftijd > $jaar ) {
        echo "Jij ben ouder dan $jaar jaar.\n";
}
if ( $leeftijd == $jaar ) {
        echo "Jij ben precies dan $jaar jaar.\n";
}



?>