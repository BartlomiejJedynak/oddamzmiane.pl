<?php
require 'db.php';
if(isset($_POST['signup-submit']))
{

$name = $_POST['uid']; //login
$ufn = $_POST['User_firstname'];//first name <---DB--->  UsrFirstname
$uln = $_POST['User_lastname']; //last name <---DB---> UsrLastname
$pwd = $_POST['pwd']; //password
$h_pwd = password_hash($pwd, PASSWORD_DEFAULT); //hash password
$pwd_repeat = $_POST['pwd_repeat']; //repeat password

    
    if(empty($name)||empty($pwd)||empty($pwd_repeat)){
        echo("<script>location.href = '../signup.php?error=emptyfields';</script>");
        exit();
    }

    
    else if(!preg_match("/^[a-zA-Z0-9ęąśżźćńółĘĄŚŻŹĆŃÓŁ]*$/",$name)){
        echo("<script>location.href = '../signup.php?error=invalidname';</script>");
        exit();
    }
    else if($pwd!==$pwd_repeat){
        echo("<script>location.href = '../signup.php?error=passwordcheck';</script>");
        exit();
    }
    else{
        
        $sql="SELECT uidUser FROM users WHERE uidUser =? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            echo("<script>location.href = '../signup.php';</script>");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s", $name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0){
                echo("<script>location.href = '../signup.php?error=usertaken';</script>");
                exit();
                }
                else{
                    $sql = "INSERT INTO users(uidUser,pwdUser,UsrFirstname,UsrLastname) VALUES(?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)){
                        echo("<script>location.href = '../signup.php?error=sww';</script>");
                        exit();
                    }
                        else{
                            mysqli_stmt_bind_param($stmt,"ssss", $name, $h_pwd, $ufn, $uln);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                            $result = mysqli_stmt_num_rows($stmt);
                        }
                }
            }
        }
        echo("<script>location.href = '../login.php?error=sign_succes';</script>");
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
else{
    echo("<script>location.href = '../signup.php';</script>");
    exit();
}