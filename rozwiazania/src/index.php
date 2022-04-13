<!DOCTYPE html>
<html>
<head>
<style>a
* {
  box-sizing: border-box;
}

.row {
  float: left;
  padding: 10px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<?php
echo '<pre>';?>
<div class="row">

<?php
echo "hello world<br>";
var_dump("hello world");
//1. Utwórz komentarz jednoliniowy wstawiając w niego treść tego zadania
/*
2. Utwórz komentarz wieloliniowy wstawiając w niego treść tego zadania
*/
?></div><div class="row"><?php

echo "3. Utwórz zmienną typu string <br>";
$zmiennastring = 'abc';
var_dump($zmiennastring);
?></div><div class="row"><?php

echo "4. Utwórz zmienną typu integer<br>";
$zmiennaint = 1;
var_dump($zmiennaint);
?></div><div class="row" ><?php
echo "5. Utwórz zmienną typu float <br>";
$zmiennafloat = 1.1;
var_dump($zmiennafloat);
?></div><div class="row" ><?php
echo "6. Utwórz zmienną typu boolean <br>";
$zmiennabool = TRUE;
var_dump($zmiennabool);
?></div><div class="row" ><?php
echo "7. Utwórz zmienną typu array - pustą tablicę <br>";
$pustatablica = [];
var_dump($pustatablica);
?></div><div class="row" ><?php
echo "8. Dodaj do tablicy którą utworzyłeś liczby od 1 do 5; <br>";
array_push($pustatablica, '1','2','3','4','5');
print_r ($pustatablica);
var_dump($pustatablica);
?></div><div class="row" ><?php
echo "9. Zmień pierwszy element w tablicy na 0 <br>";
$pustatablica[0] = '0';
var_dump($pustatablica);
?></div><div class="row" ><?php
echo "10. Zmień ostatni element w tablicy na 6 <br>";
$pustatablica[4] = '6';
var_dump($pustatablica);
?></div><div class="row" ><?php
echo "11. Utwórz zmienną typu array i dodaj do niej 5 zmiennych typu string zawierających imiona <br>";
$tablicazimionami = [];
array_push($tablicazimionami, 'Kamil','Przemek','Dominika','Karol','Jarek');
var_dump($tablicazimionami);
?></div><div class="row" ><?php
/*12. Utwórz tablicę asocjacyjną zawierającą twoje dane przypisane do kluczy:
- imie
- nazwisko
- wiek
- data_urodzenia
- miejscowość*/
$tabasoc["imie"] = "Jakub";
$tabasoc["nazwisko"] = "Pańczyk";
$tabasoc["birth"] = "15.15.1915";
$tabasoc["age"] = "33";
$tabasoc["city"] = "Warszawa";
print_r($tabasoc);
var_dump ($tabasoc);
?></div><div class="row" ><?php
echo "13. W utworzonej tablicy zmień 'imie' i 'nazwisko' na dane innej osoby <br>";
$tabasoc["imie"] = "Jarek";
$tabasoc["nazwisko"] = "Jarecki";
var_dump ($tabasoc);
?></div><div class="row" ><?php

echo "14. Utwórz tablicę asocjacyjną która będzie zawierała wszystkie powyższe zmienne w postaci typ zmiennej => wartość <br>";

$tab14=array(
    "imie"=>$tabasoc["imie"],
    "nazwisko" => $tabasoc["nazwisko"],
"birth" => $tabasoc["birth"],
"age" => $tabasoc["age"],
"city" => $tabasoc["city"]
);
var_dump($tab14);
?></div><div class="row" ><?php
echo "15. Dla każdej wyżej utworzonej zmiennej stwórz zmienną będącą kopią zmiennej <br>";
$kopiastring = $zmiennastring;
$kopiaint = $zmiennaint;
$kopiafloat = $zmiennafloat;
$kopiabool = $zmiennabool;
$kopiatablica = $pustatablica;
$kopiazimionami = $tablicazimionami;
$kopiaasoc=$tabasoc;
$kopia14=$tab14;
var_dump($kopia14);

    ?></div><div class="row" ><?php
echo "16. Dla każdej wyżej utworzonej zmiennej stwórz zmienną będącą referencją do zmiennej <br>";
$zmiennastringref = &$zmiennastring;
$zmiennaintref = &$zmiennaint;
$zmiennafloatref = &$zmiennafloat;
$zmiennaboolref = &$zmiennabool;
$pustatablicaref = &$pustatablica;
$tablicazimionamiref = &$tablicazimionami;
$tabasocref=&$tabasoc;
$tab14ref=&$tab14;

var_dump($zmiennastringref);
var_dump($zmiennaintref);
var_dump($zmiennafloatref);
var_dump($zmiennaboolref);
var_dump($pustatablicaref);
var_dump($tablicazimionamiref );
var_dump($tabasocref);
var_dump($tab14ref);

?></div><div class="row" ><?php
echo "17. Utwórz tablicę asocjacyjną która będzie zawierała referencje do powyższych zmiennych w postaci typ zmiennej => wartość <br>";
//$tabasoc17=[];
$tabasoc17["zmiennastring"] = $zmiennastringref;
$tabasoc17["zmiennaintref"] = $zmiennaint;
$tabasoc17["zmiennafloatref"] = $zmiennafloat;
$tabasoc17["zmiennaboolref"] = $zmiennabool;
$tabasoc17["pustatablicaref"] = $pustatablica;
$tabasoc17["tablicazimionamiref"] = $tablicazimionami;
$tabasoc17["tabasocref"] = $tabasoc;
$tabasoc17["tab14ref"] = $tab14;

//print_r($tabasoc17);
var_dump($tabasoc17);

?></div><div class="row" ><?php
echo '</pre>';
?>
</div>

</body>
</html>