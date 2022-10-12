<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Filmy</title>
	<style>
		body{
			text-align: center;
			background-color: beige;
			font-size:150%;
			margin:10%;
		}

	</style>
</head>
<body>


<?php 

$movies = [
    'Braveheart' => [
         'Rezyser'=>'Mel Gibson',
         'Rok'=>'1995',
         'Muzyka'=>'James Horner'],
    'Leon' => [
         'Rezyser'=>'Luc Besson',
         'Rok'=>'1994',
         'Muzyka'=>'Eric Serra'],
    'The Northman' => [
         'Rezyser'=>'Robert Eggers',
         'Rok'=>'2022',
         'Muzyka'=>'Robin Carolan'],
    'Goodfellas' => [
         'Rezyser'=>'Martin Scorsese',
         'Rok'=>'1990',
         'Muzyka'=>'Peter Townshend'],
     ];
     foreach($movies as $filmy=>$dane){
         echo '<b>'.$filmy.'</b>'.'<br>'.'Reżyser: '.'<b>'.$dane['Rezyser'].'</b>'.'<br>'.'Rok produkcji: <b>'.$dane['Rok'].'</b>'.'<br>'.'Ścieżka dźwiękowa: <b>'.$dane['Muzyka'].'</b>'."<br><br>";
     }


?>

</body>
</html>