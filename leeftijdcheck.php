<?php
$personen = [];

while (true) {
    $naam = readline("Hoe heet je (of typ 'klaar' om de lijst te tonen): ");
    if ($naam === 'klaar') {
        break; // Stop de invoer als 'stop' wordt ingevoerd
    }
    
    $geboortedatum = readline("Wanneer ben je geboren: ");

    $leeftijd = (new DateTime($geboortedatum))->diff(new DateTime())->y;
    $maanden = (new DateTime($geboortedatum))->diff(new DateTime())->m;

    $persoon = [
        'naam' => $naam,
        'leeftijd' => $leeftijd,
        'maanden' => $maanden
    ];

    $personen[] = $persoon;
}

foreach ($personen as $persoon) {
    echo "\n\nHallo " . $persoon['naam'] . ", u bent " . $persoon['leeftijd'] . " jaar en " . $persoon['maanden'] . " maanden oud \n";

    $jonger = 16 - $persoon['leeftijd'];
    $ouder = $persoon['leeftijd'] - 16;

    if ($persoon['leeftijd'] < 16) {
        echo "Jij bent " . $jonger . " jaren jonger dan 16 jaar.\n";
    } elseif ($persoon['leeftijd'] > 16) {
        echo "Jij bent " . $ouder . " jaren ouder dan 16 jaar.\n";
    } else {
        echo "Jij bent precies 16 jaar.\n";
    }

    $jonger = 50 - $persoon['leeftijd'];
    $ouder = $persoon['leeftijd'] - 50;

    if ($persoon['leeftijd'] < 50) {
        echo "Jij bent " . $jonger . " jaren jonger dan 50 jaar.\n";
    } elseif ($persoon['leeftijd'] > 50) {
        echo "Jij bent " . $ouder . " jaren ouder dan 50 jaar.\n";
    } else {
        echo "Jij bent precies 50 jaar.\n";
    }

    $jonger = 67 - $persoon['leeftijd'];
    echo "Nog " . $jonger . " jaar tot je klaar bent met werken\n";

    $jonger = 100 - $persoon['leeftijd'];
    echo "Nog " . $jonger . " jaar tot je dood moet zijn\n\n";
}

echo "Dit was alle informatie van de lijst namen die u ingestuurd heeft.";

?>
