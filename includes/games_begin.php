<?php 
    session_start(); 
    require 'db.php';
    if(isset($_GET['the_games'])){
      $sql = "UPDATE users SET UsrLastname='adnw' where idUser=1";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../shifts.to.ac.php?error=public");
      }
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        // header("Location: alt.av.shift.php");
      }
    }
$conn->close();
?>