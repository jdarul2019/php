<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        input{
            margin:5px;
        }
        .lab{
            font-weight: bold;
            font-size:150%;
        }
    </style>
</head>
<body>
  
    <form name="formularz" method="POST">
        <p class="lab">Imię: <input type="text" name="imie"></p>
        <p class="lab">Nazwisko: <input type="text" name="nazwisko"ł></p>
        <p class="lab">Wiek: <input type="number" name="wiek"></p>
        <p class="lab">Płeć:</p>
        <p><input type="radio" name="plec" value="m">Mężczyzna</p>
        <p><input type="radio" name="plec" value="k">Kobieta</p>
        <p><input type="radio" name="plec" value="i">Inna</p>
        <br>
        <p class="lab">Hobby:</p>
        <p><input type="checkbox" name="hobby[]" value=1 />Pieczenie</p>
        <p><input type="checkbox" name="hobby[]" value=2 />Gotowanie</p>
        <p><input type="checkbox" name="hobby[]" value=3 />Wędkarstwo</p>
        <p><input type="checkbox" name="hobby[]" value=4 />Sport</p>
        <p><input type="checkbox" name="hobby[]" value=5 />Gierki</p>
        <p><input type="checkbox" name="hobby[]" value=6 />Motoryzacja</p>
        <p><input type="checkbox" name="hobby[]" value=7 />Sekcje przydrożnej padliny</p>
        <button type="submit">Prześlij formularz</button>
    </form>
    <br>
<?php
if(array_key_exists('imie',$_POST)&&array_key_exists('nazwisko',$_POST)&&array_key_exists('wiek',$_POST)){
$imie = $_POST["imie"];
echo "<b>Imie: </b>".$imie.'<br>';
$nazwisko = $_POST["nazwisko"];
echo "<b>Nazwisko: </b>".$nazwisko.'<br>';
$wiek = $_POST["wiek"];
echo "<b>Wiek: </b>".$wiek.'<br>'."<b>Płeć: </b>";
}
if(isset($_POST['plec'])){
    if($_POST['plec']=='m'){
        echo 'Mężczyzna'.'<br>';
    }
    else if($_POST['plec']=='k'){
        echo 'Kobieta'.'<br>';
    }
    else{
        echo 'Inna płeć'.'<br>';
    }
};
echo '<br>';
//echo $plec;
if(array_key_exists('hobby',$_POST)){
if(isset($_POST['hobby'])){
    echo "<b>Wybrane hobby:</b>".'<br>';
    for($i=0;$i<count($_POST['hobby']);$i++){
        $hobby=$_POST['hobby'][$i];
        if($hobby==1){
            echo "  - Pieczenie".'<br>';
        }
        else if($hobby==2){
            echo "  - Gotowanie".'<br>';
        }
        else if($hobby==3){
            echo "  - Wędkarstwo".'<br>';
        }
        else if($hobby==4){
            echo "  - Sport".'<br>';
        }
        else if($hobby==5){
            echo "  - Gierki".'<br>';
        }
        else if($hobby==6){
            echo "  - Motoryzacja".'<br>';
        }
        else if($hobby==7){
            echo "  - Sekcje przydrożnej padliny".'<br>';
        }
    }
}
}

?>

</body>
</html>
