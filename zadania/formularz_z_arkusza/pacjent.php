<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Informacje</h2>
<?php
    $id = $_POST['id'];
    $conn = mysqli_connect('localhost','root','','przychodnia');
    $query = "SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM `pacjenci` where id=$id";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_row($result)){
        echo '<p> Imię i nazwisko: '.$row[0].' '.$row[1].'</p><p>Choroby przewlekłe: '.$row[2].'</p><p>Uczulenia: '.$row[3].'</p>';
    }
    mysqli_close($conn);
?>

</body>
</html>