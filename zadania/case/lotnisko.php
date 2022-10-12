<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action='rezerwacja.php' method='post'>
        Imie: <input type='text' name='imie'><br>
        Nazwisko: <input type='text' name='nazwisko'><br>
        Miasto zamieszkania: <input type='text' name='miastoz'><br>
    <?php
        $conn = mysqli_connect('localhost','root','','porty_lotnicze') or die ('blad');
        mysqli_set_charset($conn,'utf8');
        $query='SELECT odloty.id, odloty.miasto, odloty.data from odloty';
        $result = mysqli_query($conn,$query);
        echo '<select name="kierunek">';
        while($row=mysqli_fetch_row($result)){
            echo '<option value="'.$row[0].'">'.$row[1].','.$row[2].'</option>';
        }
        echo '</select>';
        mysqli_close($conn);
    ?>
    <br>
    <input type='reset' value='wyczysc'>
    <input type='submit' value='poslij'>
    </form>

</body>
</html>