<?php

$number = array("1", "2", "3", "6", "7", "9", "4", "5", "2", "4", "5", "45", "55", "22", "11", "1");
$arrlength = count($number);
for ($x = 0; $x < $arrlength; $x++) {
    for ($y = $x + 1; $y < $arrlength; $y++) {
        if ($number[$x] + $number[$y] == 10) {
            echo "FOUND";
            return;
        }
    }
}
echo "NOT"
?>
