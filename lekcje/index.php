<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>php</title>
	<style>
		html{
		margin: 10px;
		}
		body{
			background-color: beige;
			padding: 20px;
			height: 100%;
		}
	</style>
</head>
<body>
<form method="POST" action="">
<input type="text" name="a">
<select name="operacja">
<option>dodawanie</option>
<option>odejmowanie</option>
<option>mnożenie</option>
<option>dzielenie</option>
<option>reszta z dzielenia</option>
</select>
<input type="text" name="b">
<input type="submit" value="Oblicz">
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";
switch ($znak)
{
 case "+":
   $wynik = $liczba1+$liczba2;
   break;
 case "-":
   $wynik = $liczba1-$liczba2;
   break;
 case "*":
   $wynik = $liczba1*$liczba2;
   break;
 case "/":
   $wynik = $liczba1/$liczba2;
   break;
}
echo $wynik;
	
	
	
$liczba=7;
$silnia=1;
// for($i=1;$i<=$liczba;$i++){
//     $silnia *= $i;
// }

// while($silnia<=$liczba){
//     echo "siema<br>";
//     $silnia++;
// }
//echo $silnia;

// $ludzik = ['pawel','pazdizor','julia','rura','zyd','zyduwa'];
// foreach($ludzik as $debl){
//     echo $debl." z gliwic<br>";
// }

// $autka = [
//     'skoda' => [
//         'silnik'=>'7.2',
//         'palibko'=>'olejzynka',
//         'kolor'=>'szybki'],
//     'fordzito' => [
//         'silnik'=>'2',
//         'palibko'=>'dizl',
//         'kolor'=>'czorny'],
//     ];
//     foreach($autka as $furcia=>$czesc){
//         echo $furcia.' '.$czesc['silnik'].' '.$czesc['palibko'].' '.$czesc['kolor']."<br>";
//     }

$kraje=[
    'FRANCJA'=>[
        'ebe',
        'bebe',
        'brbrbrb'
    ],
    'POLSKA'=>[
        'robert',
        'kubica',
        'ulica'
    ],
    'DOJCZE'=>[
        'zlodzije',
        'bandzior',
        'ble'
    ],
];

foreach($kraje as $polska=>$imie){
    echo $polska.'<br>';
    foreach($imie as $pierwsze){
        echo $pierwsze.'<br>';
    }
    echo '<br>';
};
?>

</body>
</html>
