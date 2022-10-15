<?php
    require 'db.php';
    $id_kuriera=$_SESSION['userId'];
    $userUid=$_SESSION['userUid'];
    $_SESSION['my_shift_year'] = date("y");
    $_SESSION['my_shift_month'] = date("m");
    $_SESSION['my_shift_day'] = date("d")-1;
    $month=date("m");
    $day=date('j');
    if(isset($_GET['my_shifts_button']) || (isset($_GET['pass_from_change']))){
      $_SESSION['st1']=" ";
      $_SESSION['st2']="white";
      //
      $sql = "SELECT * FROM zmiana WHERE 
      id_kuriera=? and
      from_who!=? and
      (month_av=? and day_av>=?) 
      or
      id_kuriera=? and
      (month_av>?) and
      from_who!=?
      order by month_av, day_av"; // SQL with parameters
      $stmt = $conn->prepare($sql); 
      $stmt->bind_param("isiiiis", $id_kuriera, $userUid, $month, $day, $id_kuriera, $month, $userUid);
      $stmt->execute();
      $result = $stmt->get_result(); // get the mysqli result
      if(isset($_GET['pass_from_change'])){
        if($_GET['pass_from_change']=='give_back'){
          echo("<script>location.href = '../my.shifts.php?error=give_back';</script>");
        }
      }
      else{
        echo("<script>location.href = '../my.shifts.php';</script>");
      }
    }
//
  if(isset($_GET['things_done'])){
    $week=date("W");
    $Nextweek=$week+1;
    $sql = "SELECT * FROM zmiana WHERE decision!=0 and (week=? or week=?) and decision!=0 order by month_av, day_av"; // SQL with parameters
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("ii", $week, $Nextweek);
    $stmt->execute();
    $result = $stmt->get_result(); 
    echo("<script>location.href = '../things.done.php';</script>");
  }
  if(isset($_GET['given_shifts_status']) || isset($_GET['error'])){
    $_SESSION['st1']="white";
    $_SESSION['st2']=" ";
    $sql = "SELECT * FROM zmiana WHERE 
    from_who=? and
    (month_av=? and day_av>=?) 
    or
    (month_av>?) and
    from_who=?
    
    order by month_av, day_av"; // SQL with parameters
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("siiis", $userUid, $month, $day, $month, $userUid);
    if(isset($_GET['error']) and $_GET['error']=='shift_deleted'){
      echo("<script>location.href = '../my.shifts.php?error=shift_deleted';</script>");
    }
    if(isset($_GET['error']) and $_GET['error']=='alredy_taken'){
      echo("<script>location.href = '../my.shifts.php?error=alredy_taken';</script>");
    }
    else{
      echo("<script>location.href = '../my.shifts.php';</script>");
    }
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
  }
    $nr=1;
    while($row = $result->fetch_assoc()) {
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
        $_SESSION["who_acc"][$nr]=$row["who_acc"]; 
            $nr++;
    }
  $_SESSION['nr']=$nr;
?>
