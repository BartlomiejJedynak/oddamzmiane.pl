  <?php
      session_start();
      require "header.php";  
  ?>

                                            <!-- THINGS DONE -->

    <div class="test">
      <main class="shift-box">
        <div class="lo_si_change">
                                            <!-- ADMIN.MENU -->
          <?php 
             $av="green"; 
             $sh="green";
             $my="white";
              require "admin.menu.php";//menu  ?>
        </div>      
        <div class="give-shift-content">
          <div class="av_shift_box"> 
            <div class="shifts_to_take">
                                            <!-- SHOW.THINGS.DONE -->
              <?php require "alt.show.things.done.php";//my shifts  ?> 
            </div>      
        </div>
      </main> 
    </div>


</body>


</html>