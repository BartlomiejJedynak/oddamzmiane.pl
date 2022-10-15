<?php
    require 'db.php';
if(isset($_POST['submit']))
{
    $od_h = $_POST['od_h']; //godzina jest ta sama
    $od_m = $_POST['od_min']; //od
    $od= $od_h.":".$od_m;
    $do_h = $_POST['do_h'];
    $do_m = $_POST['do_min'];
    $do= $do_h.":".$do_m;
    $idk=$_SESSION['userId'];
    $uid=$_SESSION['userUid'];/////////////////<---- user name
    $fullName=$_SESSION['UsrFirstname']." ".$_SESSION['UsrLastname'];
    $date=$_POST['send_date'];
    $year_from_av=$_POST['year'];
    $month_from_av=$_POST['month'];
    $day_from_av=$_POST['day'];
    $week=$_POST['week_send'];
$sql = "SELECT *
        FROM zmiana
        WHERE 
    -- for_who - przyjął wczesniej
            -- ta sama godzina roznica 30 min 00->30 i 15->45
        $od_h<do_h and
        $do_h>od_h and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
        or
        $od_h=do_h and -- oddal pierwsza a teraz oddajesz druga
        do_m+30>$od_m and  -- do_m-$od_m>25
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
        or
        $do_h=od_h and -- oddal druga a teraz oddaje pierwsza
        od_m-25<$do_m and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
        or -- godzina +1 roznica 30 min gdy pierwsza zmiana konczy sie na 45min
        do_h=$od_h-1 and
        do_m>$od_m+30 and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        for_who='$uid'
    or
    -- from_who - oddal wczesniej
            -- ta sama godzina roznica 30 min 00->30 i 15->45
        $od_h<do_h and
        $do_h>od_h and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        from_who='$uid'
        or
        $od_h=do_h and -- oddal pierwsza a teraz oddajesz druga
        do_m+30>$od_m and -- do_m-$od_m>25
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        from_who='$uid'
        or
        $do_h=od_h and -- oddal druga a teraz oddaje pierwsza
        od_m-25<$do_m and
        data_zmiany='$date' and
        from_who='$uid'
        or -- godzina +1 roznica 30 min gdy pierwsza zmiana konczy sie na 45min
        do_h=$od_h-1 and
        do_m>$od_m+30 and
        data_zmiany='$date' and
        decision!=2 and
        decision!=3 and
        from_who='$uid'
        "; // SQL with parameters
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo("<script>location.href = '../index.php?error=sag';</script>");
  }
} else {
    if(!preg_match("/^[0-9]*$/",$od_h) or 
        !preg_match("/^[0-9]*$/",$od_m) or
        !preg_match("/^[0-9]*$/",$do_h) or
        !preg_match("/^[0-9]*$/",$do_m)){
            echo("<script>location.href = '../shift.php?error=wrong_format';</script>");
            exit();
    }
    else if($od>=$do){
        
        echo("<script>location.href = '../index.php?error=wrongtime';</script>");
        exit();
    }
    else{
        $add_shift_sql = "INSERT into 
        zmiana (id_kuriera,od_h, od_m, do_h, do_m,zmiana_od, zmiana_do, week, 
        year_av, month_av, day_av, is_it_taken, from_who, name_from, data_zmiany, decision) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$add_shift_sql)){
            echo("<script>location.href = '../shift.php?=sql_error';</script>");
            exit();
        }
        else{
            $is_it_taken=0;
            mysqli_stmt_bind_param($stmt,'iiiiissiiiiisssi',$idk , $od_h , $od_m ,$do_h, $do_m, $od, $do, $week, $year_from_av,$month_from_av,$day_from_av,$is_it_taken,$uid,$fullName,$date,$is_it_taken);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
        echo("<script>location.href = '../index.php';</script>");
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
}
?>