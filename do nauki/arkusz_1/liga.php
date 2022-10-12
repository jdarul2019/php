<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>pilka nozna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>


    <div class="baner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </div> 

    <div class="lewy">
        <form method="post">
            <select name="select" action="liga.php">
                <option value="bramkarz">Bramkarze</option>
                <option value="obronca">Obrońcy</option>
                <option value="pomocnik">Pomocnicy</option>
                <option value="napastnik">Napastnicy</option>
            </select>
            <input type="submit" value="Zobacz">
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor: Jakub Darul</p>
    </div> 

    <div class="prawy">
    <?php
    echo '<ol>';
      $conn =  mysqli_connect('localhost','root','','egzamin');
    //skrypt 1
        $wybor = $_POST['select'];
        $pozycja=0;
        if($wybor=='bramkarz'){
            $pozycja=1;
        }
        else if($wybor=='obronca'){
            $pozycja=2;
        }
        else if($wybor=='pomocnik'){
            $pozycja=3;
        }
        else if($wybor=='napastnik'){
            $pozycja=4;
        }

        $wynik = mysqli_query($conn,"select zawodnik.imie, zawodnik.nazwisko from zawodnik where zawodnik.pozycja_id=$pozycja;");
        
        while ($row = mysqli_fetch_row($wynik)){
            echo '<li>'.$row[0].' '.$row[1].'</li>'; 
        }

        mysqli_close($conn);
        echo '</ol>';
    ?>
    </div>  

    <div class="glowny">
        <h3>Liga mistrzów</h3>
    </div> 

    <div class="liga">
        <?php
            $conn =  mysqli_connect('localhost','root','','egzamin');

            $wynik = mysqli_query($conn,"select liga.zespol, liga.punkty, liga.grupa 
            from liga 
            order by liga.punkty desc;");

            while ($row = mysqli_fetch_row($wynik)){
                echo '<div class="druzyna">'.'<h2>'.$row[0].'</h2>'.
                '<h1>'.$row[1].'</h1>'.
                '<p>grupa: '.$row[2].'</p>'.
                '</div>'; 
            }
            mysqli_close($conn);
        ?>
    </div>   

    



</body>
</html>