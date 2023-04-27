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
function randomChar() {
    return chr(mt_rand(97, 101));
}
$tab = array();
for ($i = 0; $i < 7; $i++) {
    $tab[$i] = array();
    for ($j = 0; $j < 7; $j++) {
        $tab[$i][$j] = randomChar();
    }
}

echo "Wygenerowana tablica:<br>";
for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo $tab[$i][$j] . " ";
    }
    echo "<br>";
}
$count = 0;
for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($tab[$i][$j] == 'a') {
            $count++;
        }
    }
}
echo "Liczba wystąpień litery 'a': " . $count . "<br>";
$maxCount = 0;
$rowNumbers = array();
for ($i = 0; $i < 7; $i++) {
    $count = 0;
    for ($j = 0; $j < 7; $j++) {
        if ($tab[$i][$j] == 'b') {
            $count++;
        }
    }
    if ($count > $maxCount) {
        $maxCount = $count;
        $rowNumbers = array($i+1);
    } else if ($count == $maxCount) {
        array_push($rowNumbers, $i+1);
    }
}
echo "Najwięcej liter 'b' wystąpiło w wierszach: " . implode(", ", $rowNumbers) . "<br>";

?>

</body>
</html>
