<?php
    session_start();  
    require 'db.php';
    $id_zmiany=$_GET['id_zmiany'];
    $mtc=$_GET['mtc']; //msg to courier
    $whoacc=$_SESSION['UsrFirstnamekdr'].' '.$_SESSION['UsrLastnamekdr'];
if(isset($_GET['accept_shift'])){
    $sql = "UPDATE zmiana SET mtc='$mtc', who_acc='$whoacc', is_it_taken=1, decision=1 where id_zmiany=$id_zmiany";
}
if(isset($_GET['denay_shift'])){
    $sql = "UPDATE zmiana SET mtc='$mtc', who_acc='$whoacc', is_it_taken=1, decision=2 where id_zmiany=$id_zmiany
    ";
    if ($conn->query($sql) === TRUE) {
      $sql2 = "INSERT INTO zmiana
      (od_h, od_m, do_h, do_m, zmiana_od, zmiana_do, mth, week, year_av, month_av, day_av, is_it_taken, decision, from_who, name_from, data_zmiany, mtc)
    SELECT 
      od_h, od_m, do_h, do_m, zmiana_od, zmiana_do, mth, week, year_av, month_av, day_av, '0', '0', from_who, name_from, data_zmiany, ' '
    FROM 
      zmiana
    WHERE 
      id_zmiany=$id_zmiany ;
      
      ";
      $conn->query($sql2);
    } 
}
if(isset($_GET['delete_shift'])){
  $sql = "UPDATE zmiana SET mtc='$mtc', is_it_taken=1, who_acc='$whoacc', decision=3 where id_zmiany=$id_zmiany";
      if ($conn->query($sql) === TRUE) {
          echo "New record deleted successfully";
      } 
      else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
if ($conn->query($sql) === TRUE) {
  echo "New record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: shifts.to.ac.inc.php");
