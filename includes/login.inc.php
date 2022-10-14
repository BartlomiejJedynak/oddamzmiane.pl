<?php
if(isset($_POST['login-submit'])){
    require 'db.php';
    $uidUser = $_POST['uidUser']; 
    $pwd = $_POST['pwd'];
    ?>

    <?php
    if(empty($uidUser) or empty($pwd)){
        echo("<script>location.href = '../login.php?error=emptyfields';</script>");    
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE uidUser=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo("<script>location.href = '../login.php?error=sqleror';</script>");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s", $uidUser);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){


                 if(!password_verify($pwd,$row['pwdUser'])){
                    echo("<script>location.href = '../login.php?error=wrongpassword';</script>");    
                    exit();
                }
                else{
                    //login kdr ok
                    if($row['idUser']<=2){
                        $_SESSION['userId'] = $row['idUser'];
                        $_SESSION['userUid'] = $row['uidUser'];
                        $_SESSION['UsrFirstnamekdr'] = $row['UsrFirstname'];
                        $_SESSION['UsrLastnamekdr'] = $row['UsrLastname'];
                        echo("<script>location.href = 'shifts.to.ac.inc.php';</script>");
                        exit();
                    }
                    else{
                    //login for courier
                        $_SESSION['userId'] = $row['idUser'];
                        $_SESSION['userUid'] = $row['uidUser'];
                        $_SESSION['UsrFirstname'] = $row['UsrFirstname'];
                        $_SESSION['UsrLastname'] = $row['UsrLastname'];
                        echo("<script>location.href = '../index.php?error=login_succes';</script>");
                        exit();
                    }


                }

            }
            else{
                echo("<script>location.href = '../login.php?error=nouser';</script>");
                exit();
            }
        }
    }

}



else{
    echo("<script>location.href = '../login.php?error=login_pls';</script>");

}