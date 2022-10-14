<?php
    session_start();
    require "header.php";
?>
<!-- my shifts -->





    <div class="test">
      <main class="shift-box">
        <div class="lo_si_change">
          <?php 
             $av="green"; 
             $sh="green";
             $my="white";
             $stat1=$_SESSION['st1'];
             $stat2=$_SESSION['st2'];



              require "menu.php";//menu  ?>
              
        </div>


<div class="my_shifts_menu"> 
<form action="includes/my.shifts.inc.php" method="get">
    <input class='hiden' name='wer' value='<?php echo $_SESSION['userId']?>'></input>
    <button class="my_shifts_button" name="given_shifts_status">
      <div class="given <?php echo $stat1; ?>">oddawane</div>
    </button>



    <button class='my_shifts_button' name='my_shifts_button'>
      <div class='taken  <?php echo $stat2; ?> '>przyjmowane</div>
    </button>
  </form>
</div>

             
        <div class="give-shift-content">
          <div class="av_shift_box"> 

            <div class="shifts_to_take">

            <?php require "show_my_shifts.php";//my shifts  ?> 
            </div>      
        </div>
      </main> 
    </div>


    <?php require "footer.php"; ?> 
</body>


</html>