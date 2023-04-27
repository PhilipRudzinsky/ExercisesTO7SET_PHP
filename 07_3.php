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

<form method="post" name="dwa">
    <label for="0">Pierwsza literka: </label>
    <input type="text" name="liczby[]" id="0"><br>
    <label for="1">Druga literka: </label>
    <input type="text" name="liczby[]" id="1"><br>
    <label for="2">Trzecia literka: </label>
    <input type="text" name="liczby[]" id="2"><br>
    <label for="3">Czwarta literka: </label>
    <input type="text" name="liczby[]" id="3"><br>
    <label for="4">Piąta literka: </label>
    <input type="text" name="liczby[]" id="4"><br>
    <label for="5">Szósta literka: </label>
    <input type="text" name="liczby[]" id="5"><br>
    <label for="6">Siódma literka: </label>
    <input type="text" name="liczby[]" id="6"><br>
    <label for="7">Ósma literka: </label>
    <input type="text" name="liczby[]" id="7"><br>
    <label for="8">Dziewiąta literka: </label>
    <input type="text" name="liczby[]" id="8"><br>
    <label for="9">Dziesiąta literka: </label>
    <input type="text" name="liczby[]" id="9"><br>
    <label for="11">Długość: </label>
    <input type="text" name="dlugosc" id="11"><br>
    <label for="12">Ilość: </label>
    <input type="text" name="ilosc" id="12"><br>
    <input type="submit" name="button" value="WYSLIJ">

</form>
<?php if(isset($_POST["button"])) { // Tworzenie tablicy znakowej
    $tablica = array(); for ($i = 0; $i < 10; $i++) { $tablica[] = $_POST["liczby"][$i]; }

// Pytanie o długość i ilość słów
    $dlugosc_slowa = $_POST["dlugosc"];
    $ilosc_slow = $_POST["ilosc"];

// Wyświetlenie wzorcowej tablicy
    echo "Wzorcowe znaki: " . implode(", ", $tablica) . "\n";
    echo "<br>";
// Generowanie słów
    for ($i = 0; $i < $ilosc_slow; $i++) {
        $slowo = "";
        for ($j = 0; $j < $dlugosc_slowa; $j++) {
            $indeks = array_rand($tablica);
            $znak = $tablica[$indeks];
            $slowo .= $znak;
        }
        echo "Wygenerowane słowo nr " . ($i + 1) . ": " . $slowo . "<br>";
    }
} ?>


</body>
</html>
