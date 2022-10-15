<?php
    require 'db.php';
    $sql = "SELECT * from users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    $nr=1;
    while($row = $result->fetch_assoc()) {
            $_SESSION["UsrFirstname"][$nr]=$row["UsrFirstname"];
            $_SESSION["UsrLastname"][$nr]=$row["UsrLastname"];
            $nr++;
        }
        $_SESSION["make_sure"]=" ";
        $_SESSION['nr']=$nr;
        $conn->close();
        echo("<script>location.href = '../stats.php';</script>");
    }
?>