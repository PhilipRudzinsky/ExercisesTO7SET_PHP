<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T081</title>
</head>
<body>
<h1>Zadanie Z07</h1>
<form method="post">
    <label for="a">Podaj stopnie celcjusza</label>
    <input type="number" name="a"> <br>

    <button name="submit">WYŚLIJ</button> <br>
</form>
<?php


function far($a)
{

    return $a*9/5+32;
}
function kel($ab)
{
    if($ab>=273.15)
    {
        return 0;
    }
    else
    {
    return $ab+273.15;
    }
}

if(isset($_POST["submit"]))

{
    $b=$_POST["a"];
    echo "Celcjusze: $b <br> Farenhaity:" , far($b) , "<br>" , "Kelwiny:",kel($b);
}

?>
</body>
</html>
