<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div>
        <h3>LISTA FILMOW</h3>
        <?php
            $conn = mysqli_connect('localhost','root','','filmy');
            $query = 'SELECT filmy.tytul,filmy.rok_wydania,concat(rezyserzy.imie," ",rezyserzy.nazwisko) from filmy inner join rezyserzy on rezyserzy.id=filmy.rezyser;';
            $result = mysqli_query($conn,$query);
            while($row=mysqli_fetch_row($result)){
                echo '<p>'.$row[0].' '.$row[1].' '.$row[2].'</p>';
            }
            mysqli_close($conn);
        ?>
        <br><br>
        <form action="wynik.php" method="post">
            <h3>DODAJ FILM</h3>
            <p>Tytuł: <input name="tytul" type="text"></p>
            <p>Rok wydania: <input name="rok" type="number"></p>
            <p>ID reżysera: <input name="rezyser" type="number"></p>
            <input type='submit' value='wyslij'>
        </form>
        <br><br>
        <?php
            $conn = mysqli_connect('localhost','root','','filmy');
            $query = 'SELECT id,imie,nazwisko from rezyserzy;';
            $result = mysqli_query($conn,$query);
            while($row=mysqli_fetch_row($result)){
                echo '<p><b>ID rezysera i dane: </b>'.$row[0].' | '.$row[1].' '.$row[2].'</p>';
            }
            mysqli_close($conn);
        ?>

    </div>
</body>
</html>