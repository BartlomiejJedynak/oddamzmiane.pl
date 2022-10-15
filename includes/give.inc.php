  <?php
  require 'db.php';
  $d=date('w');
if($d<=2){
  // jeśli dzień tygodnia (pon wt śr) to UssrLastname zmienia sie na qwe co powoduje 
  // ze klasa .adnw w alt.give.shift nie istnieje i uruchamia się funkcja blokowania 
  // dnia tygodnia na niedzieli - to nie jest ładne ale działa
    $sql = "UPDATE users SET UsrLastname='qwe' where idUser=1";
    if ($conn->query($sql) === TRUE) {
      echo ".";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
    $sql = "SELECT UsrLastname from users where idUser=1 and uidUser='kdr'";
    $result = $conn->query($sql);
    $nr=1;
    while($row = $result->fetch_assoc()) {
      $_SESSION["rr"][$nr]=$row["UsrLastname"];
      $nr++;
    }
    echo("<script>location.href = '../index.php';</script>");   
