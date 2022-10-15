<?php
    require 'db.php';
    $sql = "SELECT * FROM zmiana WHERE is_it_taken=1 and decision=0 order by month_av, day_av";
    $result = $conn->query($sql);
    $nr=1;
    while($row = $result->fetch_assoc()) {
      $_SESSION["from_who"][$nr]=$row["from_who"];
      $_SESSION["for_who"][$nr]=$row["for_who"];
      $_SESSION["name_from"][$nr]=$row["name_from"];
      $_SESSION["name_for"][$nr]=$row["name_for"];
      $_SESSION["zmiana_od"][$nr]=$row["zmiana_od"];
      $_SESSION["zmiana_do"][$nr]=$row["zmiana_do"];
      $_SESSION["id_zmiany"][$nr]=$row["id_zmiany"];
      $_SESSION["id_kuriera"][$nr]=$row["id_kuriera"];
      $_SESSION["data_zmiany"][$nr]=$row["data_zmiany"]; 
      $_SESSION["mth"][$nr]=$row["mth"]; 
      $_SESSION["year_av"][$nr]=$row["year_av"];
      $_SESSION["month_av"][$nr]=$row["month_av"];
      $_SESSION["day_av"][$nr]=$row["day_av"];
       $nr++;
    }
  $_SESSION['nr']=$nr;
  echo("<script>location.href = '../shifts.to.ac.php';</script>");
?>