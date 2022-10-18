<?php
$conn=mysqli_connect('localhost','root','','wedkowanie');
$conn->query("INSERT INTO `karty_wedkarskie` (`imie`, `nazwisko`, `adres`) VALUES ('{$_POST['imie']}','{$_POST['nazwisko']}','{$_POST['adres']}');");
mysqli_close($conn);
?>