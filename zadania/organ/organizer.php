<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

<div class="baner1">
    <h2>MÓJ ORGANIZER</h2>
</div>
<div class="baner2">
    <form action="organizer.php" method="post">
        <label>Wpis wydarzenia: </label><input type="text" name="formek">
        <input type="submit" value="ZAPISZ">
    </form>
</div>
<div class="baner3">
    <img src="logo2.png" alt="Mój organizer">
</div>
<div class="glowny">
    <?php
    //skrypt przed1
    $conn = mysqli_connect('localhost','root','','egzamin6');
    if(!empty($_POST['formek'])){
    $formek = $_POST['formek'];
    $qrr1 = "UPDATE zadania set wpis='$formek' where dataZadania like '2020-08-27'";
    mysqli_query($conn,$qrr1);
    }

    //skrypt 1
    $qrr2 = "SELECT datazadania, miesiac, wpis from zadania where miesiac like 'sierpien'";

    
    ?>
</div>
<div class="stopka">
    <?php
    //skrypt 2
    ?>
    <p>Stronę wykonał: 00000000000</p>
</div>
    
</body>
</html>