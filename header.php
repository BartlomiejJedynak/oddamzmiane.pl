<?php
    if(!isset($_SESSION['userId']))
    {
    echo("<script>location.href = 'login.php?error=login_pls';</script>");
    }
    ?>
    <!-- HEADER -->
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
        <script src="includes/switch_hour.js"></script>
        <title>oddamzmiane.pl</title>
    </head>
    <body>    
        <div class="top-menu">
            <div class="login-box">  
                <form action="includes/logout.inc.php" method="post">
                    <button class="logout-button" name="logout-submit"></button>
                </form>
                    <div class="box_for_login_user"><?php echo $_SESSION['userUid']?></div>   
            </div>    
        </div>
    <!-- END-HEADER -->
