<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>
    <section class="container pt-5">
        <form method="post" action="cos.php">
            <div class="mb-3">
                <label for="email" class="form-label">Adres e-mail</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="emailHelp" class="form-text">Nie udostępniamy nikomu Twojego adresu.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Zapamiętaj mnie</label>
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj się</button>
        </form>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>

    <?php
        if($_POST){
            $email=$_POST['email'];
            $password = $_POST['password'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "niepoprawny<br>";
            }
            if(isset($_POST['remember'])){
                $remember=$_POST['remember'];
            }
            else{
                $remember = NULL;
            }
        

        echo "Form przeslany ".$email." ".$password;
    }
    ?>
</body>

</html>
