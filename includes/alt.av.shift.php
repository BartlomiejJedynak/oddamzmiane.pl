<?php
    require 'db.php';
    $month=date("m");
    $day=date('j');
    $uid=$_SESSION['userUid'];
    $sql = "SELECT * FROM zmiana WHERE 
    decision!=1 and 
    from_who!=? and 
    is_it_taken=0 and 
    -- for_who!=? and
    (month_av=? and day_av>=?) 
    or
    (month_av>?) and
    is_it_taken=0 and 
    from_who!=?  and
    decision!=1
    order by month_av, day_av"; // SQL with parameters
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("siiis", $uid, $month, $day, $month, $uid);
    $stmt->execute();
    $result = $stmt->get_result();  
    $nr=1;
    while($row = $result->fetch_assoc()) {
        $_SESSION["day_av"][$nr]=$row["day_av"];
        $_SESSION["data_zmiany"][$nr]=$row["data_zmiany"];
        $_SESSION["from_who"][$nr]=$row["from_who"];
        $_SESSION["zmiana_od"][$nr]=$row["zmiana_od"];
        $_SESSION["zmiana_do"][$nr]=$row["zmiana_do"];
        $_SESSION["od_h"][$nr]=$row["od_h"];
        $_SESSION["od_m"][$nr]=$row["od_m"];
        $_SESSION["do_h"][$nr]=$row["do_h"];
        $_SESSION["do_m"][$nr]=$row["do_m"];
        $_SESSION["id_zmiany"][$nr]=$row["id_zmiany"];
        $_SESSION["id_kuriera"][$nr]=$row["id_kuriera"];
            $nr++;
    }
    $_SESSION['nr']=$nr;
    
        if(isset($_GET['error']) and $_GET['error']=='shift_alredy_given'){
        echo("<script>location.href = 'shift.php?error=sag';</script>");
        }
        elseif(isset($_GET['error']) and $_GET['error']=='yourelate'){
            echo("<script>location.href = '../shift.php?error=late';</script>");
        }
    
    // else{
    //         echo("<script>location.href = 'shift.php';</script>");
    //     }