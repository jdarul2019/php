<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>LISTA PACJENTOW</h3>
        <?php
            $conn = mysqli_connect('localhost','root','','przychodnia');
            $query = 'SELECT pacjenci.id, pacjenci.imie, pacjenci.nazwisko FROM `pacjenci`;';
            $result = mysqli_query($conn,$query);
            while($row=mysqli_fetch_row($result)){
                echo '<p>'.$row[0].' '.$row[1].' '.$row[2].'</p>';
            }
            mysqli_close($conn);
        ?>
        <br><br>
        <form action="pacjent.php" method='post'>
            <p>Podaj id:</p>
            <input type='number' name='id'>
            <input type='submit' value='Pokaż dane'>
        </form>
    </div>


</body>
</html>