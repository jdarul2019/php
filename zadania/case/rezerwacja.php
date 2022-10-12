<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['imie'])&&isset($_POST['nazwisko'])&&isset($_POST['miastoz'])){
        $conn = mysqli_connect('localhost','root','','porty_lotnicze') or die ('blad');
        mysqli_set_charset($conn,'utf8');
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $miastoz=$_POST['miastoz'];
        $kierunek=$_POST['kierunek'];
        
        $query="INSERT klienci VALUES ('', '$imie', '$nazwisko', '$miastoz', $kierunek)";
        $result = mysqli_query($conn,$query);
        echo $imie.' '.$nazwisko.' zostal dodany';
    }else{
        echo "wprowadz poprawne dane";
    }
    mysqli_close($conn);
    ?>
    <br>
    <a href="lotnisko.php">Wroc do menu</a>

</body>
</html>