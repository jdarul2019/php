<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rozgrywki futbolowe</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
<div class="baner">
	<h2>Światowe rozgrywki piłkarskie</h2>
	<img src="obraz1.png" alt="boisko">
</div>
<div class="mecze">
	<?php
	//skrypt 1

	$conn = mysqli_connect('localhost','root','','ligusia');
	$qrr = "select zespol1, zespol2, wynik, data_rozgrywki from rozgrywka where zespol1 like 'EVG';";
	$res = mysqli_query($conn,$qrr);
	while($row=mysqli_fetch_row($res)){
		echo '<div class="info"><h3>'.$row[0].' - '.$row[1].'</h3><h4>'.$row[2].'</h4><p>w dniu: '.$row[3].'</p></div>';
	};
	?>
</div>
<div class="glowny">
	<h2>Reprezentacja Polski</h2>
</div>
<div class="lewy">
	<p>Podaj pozycję zawodników (1-bramkarze, 2-obroncy,3-pomocnicy,4-napastnicy):</p>
	<form method="post" action="futbol.php">
		<input type="number" name="id">
		<input type="submit" value="Sprawdź">
	</form>
	<ul>
		<?php
		//skrypt 2
		if(!empty($_POST['id'])){
			$id = $_POST['id'];
			$query="SELECT imie, nazwisko from zawodnik where pozycja_id=$id";
			$result = mysqli_query($conn,$query);
			foreach($result as $row){
				echo '<li><p>'.$row['imie'].' '.$row['nazwisko'].'</p></li>';
			};
		};
			mysqli_close($conn);
		?>
	</ul>
</div>
<div class="prawy">
	<img src="zad1.png" alt="piłkarz">
	<p>Autor: 00000000000</p>
</div>

</body>
</html>