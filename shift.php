<?php
    require "includes/alt.av.shift.php";
    require "header.php";
    // require "includes/login-info.php";   
?>
<!-- SHIFT -->
<div class="test">
  <main class="shift-box">
    <div class="lo_si_change">
      <?php 
        $av="white"; 
        $sh="green";
        $my="green";
        require "menu.php";//menu  ?>
    </div>      
    <div class="give-shift-content">
      <div class="av_shift_box"> 
        <div class="shifts_to_take">
          <?php require "alt.shift.php";?>
        </div>      
    </div>
  </main> 
</div>
<?php require "footer.php"; ?>
