<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>funkcje</title>
</head>
<body>
    

<?php
//funkcje wbudowane
$text = 'php php php ';

echo strtoupper($text); //powiekszenie liter

echo "<br> zmienna text zawiera ".strlen($text).' znakow'; //dlugosc stringa
echo "<br> zmienna text zawiera ".strlen(trim($text)).' znakow bez spacji na koncu';
echo "<br>";
//funkcje wlasne

function dodaj($a, $b){
    $wynik = $a+$b;
    //echo $wynik;
    return $a+$b;
};

$a=2;
$b=5;
echo dodaj($a,$b);
echo "<br>";echo "<br>";

function discountedPrice($price,$precentageDiscount){
    $precentageDiscount = 1-($precentageDiscount/100);
    return $price*$precentageDiscount;
}
const currency = 'zł';
$price=100;
$precentageDiscount=20;

echo discountedPrice($price, $precentageDiscount).' '.currency;
echo '<br>';
$x=[1,2,3,4];
foreach($x as $number){
    echo $number.', ';
}
echo '<br>';

$new_x=array_map(function($numbers){
    return $numbers*4;
},$x);
foreach($new_x as $ble){
    echo $ble.', ';
}
echo '<br>';echo '<br>';
$zmienna='php smierdzi';
$test = str_contains($zmienna,'php');

if($test==1){
    echo "bebhrff";
}
else{
    echo '1231234';
}
echo '<br>';echo '<br>';


$hhh=-2;
$fff=[4,35,654,12,-9];

echo max($fff);
echo '<br>';
echo rand(1,100); //losowanie
echo '<br>';
echo abs($hhh); //wart bezwzgl
echo '<br>';echo '<br>';echo '<br>';echo '<br>';
$strona = 'http://localhost/kubica/funkcje.php';
$talica = explode('/',$strona);
print_r($talica);

?>

</body>
</html>