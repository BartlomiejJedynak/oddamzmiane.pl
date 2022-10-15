<?php
    require 'db.php';
    if($_GET["SelecCourier"]==""){
        echo("<script>location.href = '../stats.php?error=empty_courier';</script>");
    }
    else{
        $SelecCourier=$_GET["SelecCourier"];
        $_SESSION['yo']=$SelecCourier;
        $_SESSION["make_sure"]="empty";
        $sql = "SELECT * FROM zmiana WHERE 
        name_from=? and decision=1
        or 
        name_from=? and decision=3
        order by month_av, day_av"; // SQL with parameters
        $stmt = $conn->prepare($sql); 
        $stmt->bind_param("ss", $SelecCourier, $SelecCourier);
        $stmt->execute();
        $result = $stmt->get_result(); 
        $nr=1;
        while($row = $result->fetch_assoc()) {
            $_SESSION["od_h"][$nr]=$row["od_h"];
            $_SESSION["od_m"][$nr]=$row["od_m"];
            $_SESSION["do_h"][$nr]=$row["do_h"];
            $_SESSION["do_m"][$nr]=$row["do_m"];
            $_SESSION["name_from"][$nr]=$row["name_from"];
            $_SESSION["name_for"][$nr]=$row["name_for"];
            $_SESSION["from_who"][$nr]=$row["from_who"];
            $_SESSION["for_who"][$nr]=$row["for_who"];
            $_SESSION["zmiana_od"][$nr]=$row["zmiana_od"];
            $_SESSION["zmiana_do"][$nr]=$row["zmiana_do"];
            $_SESSION["id_zmiany"][$nr]=$row["id_zmiany"];
            $_SESSION["id_kuriera"][$nr]=$row["id_kuriera"];
            $_SESSION["data_zmiany"][$nr]=$row["data_zmiany"]; 
            $_SESSION["year_av"][$nr]=$row["year_av"];
            $_SESSION["month_av"][$nr]=$row["month_av"];
            $_SESSION["day_av"][$nr]=$row["day_av"];
            $_SESSION["decision"][$nr]=$row["decision"];     
            $_SESSION["is_it_taken"][$nr]=$row["is_it_taken"];   
            $_SESSION["mtc"][$nr]=$row["mtc"]; 
            $_SESSION["mth"][$nr]=$row["mth"]; 
            $nr++;
    }
    $_SESSION['nrr']=$nr;
    echo("<script>location.href = '../stats.php?usr=$SelecCourier';</script>");
    }
?>