<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wędkujemy</title>
	<link rel="stylesheet" href="styl_1.css">
</head>
<body>
	<div class="baner">
		<h1>Portal dla wędkarzy</h1>
	</div>
	<div class="lewy">
		<h2>Ryby drapieżne naszych wód</h2>
		<ul>
			<?php
				/*$conn=mysqli_connect('localhost','root','','wedkowanie');
				$query = "SELECT `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` =1;";
				$res=mysql_query($conn,$query);
				while($row=mysqli_fetch_row($result)){
					echo "<li>".$row[0].", występowanie: ".$row[1]."</li>";
				}
				mysqli_close($conn);*/
			?>
		</ul>
	</div>
	<div class="prawy">
		<img src="ryba.jpg" alt="sum"><br>
		<a href="kwerendy.txt" download>Pobierz kwerendy</a>
	</div>
	<div class="stopka">
		<p>Stronę wykonał: 00000000000</p>
	</div>
</body>
</html>