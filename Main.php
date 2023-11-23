<?php

require_once "ArraySet.php";
require_once "BingoBall.php";

$bingo = new ArraySet();
for ($num = 1; $num <= 75; $num++) {
    $ball = new BingoBall($num);
    $bingo->add($ball);
}

echo $bingo . "\n";

echo "Size: " . $bingo->size() . "\n";

while (!$bingo->isEmpty()) {
    $ball = $bingo->removeRandom();
    echo $ball . "\n";
}
