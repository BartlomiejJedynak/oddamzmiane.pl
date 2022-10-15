<?php 
    require 'db.php';
    $uid=$_SESSION['userUid'];/////////////////<---- user name
    $id_zmiany=$_GET['idzmiany'];
    $mth=$_GET['mth'];
    $date=$_GET['datazmiany'];
    $od_h = $_GET['od_h']; //godzina jest ta sama
    $od_m = $_GET['od_m']; //od
    $do_h = $_GET['do_h'];
    $do_m = $_GET['do_m'];
    $uid=$_SESSION['userUid'];
    $name_for=$_SESSION['UsrFirstname']." ".$_SESSION['UsrLastname'];
    $twoje_id=$_SESSION['userId'];
if(!preg_match("/^[a-zA-Z0-9?!,.:;)(ę ąśżźćńółĘĄŚŻŹĆŃÓŁ]*$/",$mth)){
  echo("<script>location.href = '../shift.php?error=invalidtext';</script>");
  exit();
}
else{
// echo $id_zmiany;
$sql = "SELECT *
FROM zmiana 
WHERE
$id_zmiany=id_zmiany and
is_it_taken!=1
";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $sql = "SELECT *
        FROM zmiana 
        WHERE 
    -- for_who - przyjął wczesniej
            -- ta sama godzina roznica 30 min 00->30 i 15->45
        '$od_h'<do_h and
        '$do_h'>od_h and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
        or
        '$od_h'=do_h and -- oddal pierwsza a teraz oddajesz druga
        do_m+25>'$od_m' and  -- do_m-$od_m>25
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
        or
        '$do_h'=od_h and -- oddal druga a teraz oddaje pierwsza
        od_m-25<'$do_m' and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
        or -- godzina +1 roznica 30 min gdy pierwsza zmiana konczy sie na 45min
        do_h='$od_h'-1 and
        do_m>'$od_m'+30 and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
      or
    -- from_who - oddal wczesniej
            -- ta sama godzina roznica 30 min 00->30 i 15->45
        '$od_h'<do_h and
        '$do_h'>od_h and
        data_zmiany='$date' and
        decision=0 and
        decision!=3 and
        from_who='$uid'
        or
        '$od_h'=do_h and -- oddal pierwsza a teraz oddajesz druga
        do_m+25>'$od_m' and -- do_m-$od_m>25
        data_zmiany='$date' and
        decision=0 and
        decision!=3 and
        from_who='$uid'
        or
        '$do_h'=od_h and -- oddal druga a teraz oddaje pierwsza
        od_m-25<'$do_m' and
        data_zmiany='$date' and
        decision=0 and
        decision!=3 and
        from_who='$uid'
        or -- godzina +1 roznica 30 min gdy pierwsza zmiana konczy sie na 45min
        do_h='$od_h'-1 and
        do_m>'$od_m'+30 and
        data_zmiany='$date' and
        decision=0 and
        decision!=3 and
        from_who='$uid'
        "; 
        $result2 = $conn->query($sql);
        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
                echo("<script>location.href = '../shift.php?error=shift_alredy_given';</script>");
                
            }
        }
        else{
          // U can take this shift
          $sql = "UPDATE zmiana SET mth='$mth', mtc=' ', is_it_taken=1, decision=0, for_who='$uid',name_for='$name_for' , id_kuriera = $twoje_id where id_zmiany=$id_zmiany";
          if ($conn->query($sql) === TRUE) {
            // "New record created successfully";
            echo("<script>location.href = '../shift.php';</script>");
          }
        }
    }
} 
else {
  echo("<script>location.href = '../shift.php?error=late';</script>");
}
$conn->close();
}
?>