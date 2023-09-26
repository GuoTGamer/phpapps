<?php

$teller=1;
$maximum=10;
$tekst="Hello, World!\n";

echo "Teller is voor de while lus ".$teller."\n";

while ( $teller <= $maximum ) {
echo $tekst;

$teller++;
}

echo "Teller is na de while lus ".$teller."\n";

?>