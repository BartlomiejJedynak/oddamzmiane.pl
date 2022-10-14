<?php
    session_start();
    require "header.php";    
?>

    <div class="test">
      <main class="shift-box">
        <div class="lo_si_change">
          <?php 
             $av="green"; 
             $sh="white";
             $my="green";
              require "admin.menu.php";//menu  ?>
        </div>      
        <div class="give-shift-content">
          <div class="av_shift_box">
            <div class="stats_box">
              

              <?php require "calc.stats.php";//my shifts  ?>


            </div>      
        </div>
      </main> 
    </div>
