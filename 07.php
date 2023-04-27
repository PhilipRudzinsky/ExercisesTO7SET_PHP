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
$tab=array();
$tab[]=array();
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        $tab[$i][$j]=rand(0,9);
        echo $tab[$i][$j]." ";
    }
    echo "<br>";
}
$suma=$tab[0][0]+$tab[1][1]+$tab[2][2];
$suma1=$tab[0][2]+$tab[1][1]+$tab[2][0];
echo "Przekątna LG_PD: ". $suma."<br>";
echo "Przekątna LD_PG: ". $suma1."<br>";

if($suma==$suma1)
{
    echo "Sumy są równe";
}
else if($suma>$suma1)
{
    echo "Suma przekątnej LG_PD jest większa";
}
else
{
    echo "Suma przekątnej LD_PG jest większa";
}



?>
</body>
</html>
