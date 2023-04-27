<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
function generateUniqueNumber($usedNumbers) {
    do {
        $number = rand(10, 99);
    } while (in_array($number, $usedNumbers));
    return $number;
}

$table = array();
for ($i = 0; $i < 7; $i++) {
    $usedNumbers = array();
    for ($j = 0; $j < 7; $j++) {
        $number = generateUniqueNumber($usedNumbers);
        $table[$i][$j] = $number;
        $usedNumbers[] = $number;
    }
}
echo '<table>';
for ($i = 0; $i < 7; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 7; $j++) {
        echo '<td>' . $table[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>

</body>
</html>
