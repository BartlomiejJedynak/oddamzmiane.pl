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
  switch ($_SESSION["decision"][$nrr]) {
    case 0:
      $show_decision="oczekuje";
      break;
    case 1:
      $show_decision="zaakceptowana";
      break;
    case 2:
      $show_decision="odrzucona";
      break;
    case 3:
      $show_decision="usunieta";
      break;
}
?>
<div class="data_shift_table <?php echo $show_decision;?>">
<div class="popup_trigger">
    <div class="from_who"><?php echo $_SESSION['name_from'][$nrr]; ?> - 
    <div class="col_bot"><?php echo $_SESSION['name_for'][$nrr]; ?>
    </div></div>
<div class="av_shift_time">
    <?php echo $_SESSION['zmiana_od'][$nrr]; ?> - <?php echo $_SESSION['zmiana_do'][$nrr] ?>
</div>
</div>
<div class="popup_for_take hiden">
                <?php
                  if($_SESSION["mth"][$nrr]!=" "){
                ?>
                                <?php
                  if($_SESSION["mth"][$nrr]!=NULL){
                ?>
                <div class="mfc col">
                <div> <b><?php echo $_SESSION['name_for'][$nrr]?></b></div>
                <div> <?php echo $_SESSION["mth"][$nrr];?></div>
                  </div>
                <?php }?>
                <div class="mtc">
                  <div><?php echo $_SESSION['mtc'][$nrr]?></div>
                  <div><b><?php echo $_SESSION['who_acc'][$nrr];?></b></div>
                  </div>
                  <?php } ?>
</div>
  
</div>
<?php
  $nrr++;
}
?>
<script src="includes/popup_shift.js"></script>
<!-- ALT.GIVEN.SHIFT ENDS -->
