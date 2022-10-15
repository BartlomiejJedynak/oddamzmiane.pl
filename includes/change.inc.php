<?php 
    require 'db.php';
    // $uid=$_SESSION['userUid'];/////////////////<---- user name
    $id_zmiany=$_GET['idzmiany'];
    $uid=$_SESSION['userUid'];
    $name_for=$_SESSION['UsrFirstname']." ".$_SESSION['UsrLastname'];
    if(isset($_GET['give_back'])){
      $sql2 = "INSERT INTO zmiana
      (od_h, od_m, do_h, do_m, zmiana_od, zmiana_do, mth, mtc, week, year_av, month_av, day_av, is_it_taken, decision, from_who, name_from, name_for, data_zmiany)
    SELECT 
      od_h, od_m, do_h, do_m, zmiana_od, zmiana_do, mth, mtc, week, year_av, month_av, day_av, '1', '1', from_who, name_from, name_for, data_zmiany
    FROM 
      zmiana
    WHERE 
      id_zmiany=$id_zmiany ;
      
      ";
      $conn->query($sql2);
        $sql = "UPDATE zmiana SET is_it_taken=0, decision=0, from_who='$uid', name_from='$name_for', name_for='', for_who='', who_acc=NULL where id_zmiany=$id_zmiany";
        if ($conn->query($sql) === TRUE) {
          echo "New record deleted successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // $_SESSION['pass_from_change']="asd";
        header("Location: my.shifts.inc.php?pass_from_change=give_back");
    }
    if(isset($_GET['change'])){
        
      $sql = "SELECT * from zmiana where id_zmiany=$id_zmiany and name_for!=' '";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        echo("<script>location.href = 'my.shifts.inc.php?error=alredy_taken';</script>");
      }
      else{
          $sql = "DELETE FROM zmiana WHERE id_zmiany=$id_zmiany";
          if ($conn->query($sql) === TRUE) {
            $_SESSION['elo']='elo';
            echo("<script>location.href = 'my.shifts.inc.php?error=shift_deleted';</script>");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
    }
?>