<?php
    session_start();
    require "header.php";
    // require "includes/login-info.php";    
?>

    <div class="test">
      <main class="shift-box">
        <div class="lo_si_change">
          <?php 
             $av="white"; 
             $sh="green";
             $my="green";
              require "admin.menu.php";//menu  ?>
        </div>      
        <div class="give-shift-content">
          <div class="av_shift_box"> 
            <div class="shifts_to_take">
            <?php require "alt.given.shift.php";//my shifts  ?> 
            </div>      
        </div>
      </main> 
    </div>
    <?php require "adminfooter.php";?>

</body>


</html>