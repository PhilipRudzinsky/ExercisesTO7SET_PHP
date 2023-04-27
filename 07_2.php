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

$tab = array();
for ($i = 0; $i < 4; $i++) {
    $tab[$i] = array();
    for ($j = 0; $j < 4; $j++) {
        $tab[$i][$j] = rand(0,1);
    }
}
$suma=$tab[0][0]+$tab[0][1]+$tab[0][2]+$tab[0][3];
$suma1=$tab[1][0]+$tab[1][1]+$tab[1][2]+$tab[1][3];
$suma3=$tab[2][0]+$tab[2][1]+$tab[2][2]+$tab[2][3];
$suma4=$tab[3][0]+$tab[3][1]+$tab[3][2]+$tab[3][3];
if($suma>$suma1 && $suma>$suma3 && $suma>$suma4)
{
    echo "suma 1 wiersza: ". $suma;
}
else if($suma1>$suma && $suma1>$suma3 && $suma1>$suma4)
{
    echo "suma 2 wiersza: ". $suma1;
}
else if($suma3>$suma && $suma3>$suma1 && $suma3>$suma4)
{
    echo "suma 3 wiersza: ". $suma3;
}
else if($suma4>$suma && $suma4>$suma3 && $suma4>$suma1)
{
    echo "suma 4 wiersza: ". $suma4;
}
echo"<br>";
echo "Wygenerowana tablica:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $tab[$i][$j] . " ";
    }
    echo "<br>";
}


echo "Odwrócona tablica:<br>";
echo $tab[0][0]." ";
echo $tab[1][0]." ";
echo $tab[2][0]." ";
echo $tab[3][0]." ";
echo "<br>";
echo $tab[0][1]." ";
echo $tab[1][1]." ";
echo $tab[2][1]." ";
echo $tab[3][1]." ";
echo "<br>";
echo $tab[0][2]." ";
echo $tab[1][2]." ";
echo $tab[2][2]." ";
echo $tab[3][2]." ";
echo "<br>";
echo $tab[0][3]." ";
echo $tab[1][3]." ";
echo $tab[2][3]." ";
echo $tab[3][3]." ";
?>

</body>
</html>
