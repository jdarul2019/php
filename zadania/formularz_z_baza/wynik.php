<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

        <?php
            $tytul = $_POST['tytul'];
            $rok = $_POST['rok'];
            $rezyser = $_POST['rezyser'];
            $conn = mysqli_connect('localhost','root','','filmy');
            $query = "INSERT into filmy (tytul,rok_wydania,rezyser) values ('$tytul',$rok,$rezyser);";
            $result = mysqli_query($conn,$query);
            mysqli_close($conn);
        ?>
        <h2>DODANO FILM DO BAZY</h2>
        <a href='index.php'>POWROT DO STRONY GLOWNEJ</a>
</body>
</html>