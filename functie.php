<?php

function func() {
    echo "+ Deze regel is in func() uitgevoerd.\n";
}

echo "-- Deze code is voor func() uitgevoerd.\n";

func();

echo "== Deze regel is tussen twee func() uitgevoerd.\n";

func();

echo "-- Deze regel is na func() uitgevoerg.\n";

?>