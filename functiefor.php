<?php

function func() {
    echo "+ Deze regel is in func() uitgevoerd.\n";
}

echo "-- Deze code is voor de for-lus uitgevoerd.\n";

for ($counter=1;$counter<=3;$counter++) {
    echo "= Deze code is in de for-lus\n";
    echo " maar voor func() uitgevoerd.\n";
    func();
    echo "= Deze code is in de for-lus\n";
    echo " maar na func() uitgevoerd.\n";
}

echo "-- Deze regel is na for-lus uitgevoerg.\n";

?>