<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>oddamzmiane.pl - oddawaj i przujmuj zmiany</title>
</head>
<body>
<div class="lo_si">
    <div class="signup-box">
        <div class="lo_si_space">
        <a class="login_ch color_change" href="login.php"><div >logowanie</div></a>
        <a class="signup_ch green" href="signup.php"><div >rejestracja</div></a>
    </div>
    <form action="includes/login.inc.php" method="post" class="s_and_l">
        <input class="signup-input" type="text" name="uidUser" placeholder="login">
        <input class="signup-input" type="password" name="pwd" placeholder="password">
        <button class="login-button" name="login-submit">Zaloguj</button>
    </form>
    </div> 
</div>
<?php
    require "footer.php";
?>