<?php
    session_start();
    // require "header.php";
    // require "includes/login-info.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>LOGIN SYSTEM</title>
</head>
<body>


<div class="lo_si">
<div class="signup-box">
        <div class="lo_si_space">
        <a class="login_ch green" href="login.php"><div >logowanie</div></a>
        <a class="signup_ch color_change" href="signup.php"><div >rejestracja</div></a>
    </div>

    <form action="includes/signup.inc.php" method="post" class="s_and_l">
        <input class="signup-input" type="text" name="uid" placeholder="Login">
        <input class="signup-input" type="text" name="User_firstname" placeholder="imie...">
        <input class="signup-input" type="text" name="User_lastname" placeholder="nazwisko...">
        <input class="signup-input" type="password" name="pwd" placeholder="Hasło...">
        <input class="signup-input" type="password" name="pwd_repeat" placeholder="Potwierdź hasło...">
        <button class="login-button" name="signup-submit">Zarejestruj</button>
    </form>


    </div> 
</div>














<?php

    require "footer.php";
?>

</body>
</html>