<html>

<head>
    <title>Bai 1</title>
</head>
<body>
<?php
$name = array("Pham Khien", "Nguyen Nhan", 'Do Thanh Nhan', 'Nguyen Hung', 'Do Manh Hung');
$arrlength = count($name);
$pass = array();
$listName = array();

for ($x = 0; $x < $arrlength; $x++) {
    $oneName = explode(" ", $name[$x]);
    $alenght = count($oneName);
    array_push($listName, $oneName[$alenght - 1]);
}
//listName ( [0] => Khien [1] => Nhan [2] => Nhan [3] => Hung [4] => Hung )
for ($i = 0; $i < count($listName); $i++) {
    $childGroup = array();
    for ($j = 0; $j < count($listName); $j++) {
        if ($listName[$i] === $listName[$j]) {
            array_push($childGroup, $name[$j]);
        }
    }
    if (!in_array($listName[$i], $pass)) {
        array_push($pass, $listName[$i]);
        print_r($listName[$i]);
        echo "<span>:</span>";
        print_r($childGroup);
        echo "<br>";
    }
}
?>
</body>
</html>