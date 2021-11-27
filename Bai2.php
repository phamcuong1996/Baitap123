<html>

<head>
    <title>BT PHP</title>
</head>
<body>
<?php

$name = ["Pham Khien", "Nguyen Nhan", "Hoang Thu Huong", 'Pham Hung', 'Hoang Thi Huong', 'Do Thanh Nhan', 'Nguyen Hung', 'Do Manh Hung'];
$arrlength = count($name);
$new = array();
$arrName = array();
for ($x = 0; $x < $arrlength; $x++) {
    $oneName = explode(" ", $name[$x]);
    $alenght = count($oneName);
    array_push($arrName, $oneName[$alenght - 1]);
}
for ($x = 0; $x < $arrlength; $x++) {
    for ($e = 0; $e < count($new); $e++) {
        if ($arrName[$x] === $new[$e])
            return;
    }
    $sum = 1;
    for ($y = $x + 1; $y < $arrlength; $y++) {
        if ($arrName[$x] === $arrName[$y]) {
            $sum += 1;
        }
    }
    if ($sum >= 1) {
        array_push($new, "$arrName[$x]");
        echo "$arrName[$x]:$sum<br>";
    }
}
?>
</body>
</html>
