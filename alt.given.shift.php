<!-- ALT.GIVEN.SHIFT -->
<?php
$nrr=1;
$_SESSION['data_zmiany'][$nrr-1]="cokolwiek";
while($nrr<=$_SESSION['nr']-1){
  if($_SESSION['data_zmiany'][$nrr]!=$_SESSION['data_zmiany'][$nrr-1]){
    
    echo "</div>";
    echo "<div class='box-for-day'>";
    echo '<div class="show_data_shift">';
    echo $_SESSION['data_zmiany'][$nrr];
    echo '</div>';
  }
?>
<div class="data_shift_table">
<div class="popup_trigger">
    <div class="from-for"><?php echo $_SESSION['name_from'][$nrr]; ?> - 
<?php echo $_SESSION['name_for'][$nrr]; ?>
    </div>
<div class="av_shift_time">
    <?php echo $_SESSION['zmiana_od'][$nrr]; ?> - <?php echo $_SESSION['zmiana_do'][$nrr] ?>
</div>
</div>
<!-- <br><br> -->
  
  
<div class="popup_for_take hiden">
<!-- </div> -->
<?php if($_SESSION["mth"][$nrr]!=""){ ?>
  <div class="mfc col"><?php echo $_SESSION["mth"][$nrr];?></div>
<?php } ?>
    <div class="wnh">
      <form action='includes/shift_decision.php' class="msgtocourier" method='get'>
            <textarea name="mtc" maxlength="60" placeholder="wiadomość dla kuriera  (max 60 znaków)"></textarea><!-- msg to hub -->
        <div class='hiden'>
          <input  name='id_zmiany' value='<?php echo $_SESSION["id_zmiany"][$nrr];?>'></input>
        </div>
        <div class="shift_decision_button">
          <button class="acdn" name='delete_shift' value='submit'><div class='dl'>usuń</div></button>
          <button class="acdn" name='denay_shift' value='submit'><div class='dn'>nie</div></button>
          <button class="acdn" name='accept_shift' value='submit'><div class='ac'>gitara</div></button>
          
        </div>
      </form>
       
    </div>
  </div>
</div>
<?php
  $nrr++;
}
?>
<!-- ALT.GIVEN.SHIFT ENDS -->
<script src="includes/popup_shift.js"></script>
