<!-- alt.shift.php -->
<?php                    
  $nrr=1;
  $_SESSION['data_zmiany'][$nrr-1]="cokolwiek";
  while($nrr<=$_SESSION['nr']-1){
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
  if($_SESSION['data_zmiany'][$nrr]!=$_SESSION['data_zmiany'][$nrr-1]){
      ?>
      </div>                                            <!-- end of last=next) div -->
      <div class='box-for-day'>                         <!-- this div --> 
        <div class="show_data_shift">                   <!--shift date -->
          <?php echo $_SESSION['data_zmiany'][$nrr]; ?>
        </div>
        <?php
        }
        ?>
                                                      <!-- box with decision -->
                                                     
        <div class="data_shift_table <?php echo $show_decision;?>">
                                                      <!-- place for form -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <form class="cen" action='includes/change.inc.php' method='get'>
        <div class="change_box box_<?php echo $_SESSION['id_zmiany'][$nrr]?> hiden">
          <div class="show_change_box ">Czy jesteś pewien?</div>
          <div class="change_in_box">
            <!-- <?php echo $_SESSION['id_zmiany'][$nrr]?> -->
            <input class='hiden'  name='idzmiany' value="<?php echo $_SESSION['id_zmiany'][$nrr]?>">
              <div class="question">         
                <div class="change_no no_<?php echo $_SESSION['id_zmiany'][$nrr]?>">Nie</div>
                <button  class='change_yes chg hiden' name='change' value='submit'>tak</button> <!--change my mind button-->
                <button  class='change_yes gvb hiden' name='give_back' value='submit'>tak</button> <!-- give back button -->
              </div>          
          </div>
        </div>
      </form>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="popup_trigger">
                  <?php
              // if($_SESSION["is_it_taken"][$nrr]==0){ //if shift isn't taken
                switch ($_SESSION['decision'][$nrr]) {
                  case 0:
                      $msg="oczekuje";
                      break;
                  case 1:
                      $msg="zaakceptowana";
                      break;
                  case 2:
                      $msg="odrzucona";
                      break;
                    case 3:
                      $msg="Usunięta";
              }
              
              ?>
                      <div class="show_dec"><?php echo $msg ?></div>       
                <div class="av_shift_time">
                    <?php echo $_SESSION['zmiana_od'][$nrr]; ?> - <?php echo $_SESSION['zmiana_do'][$nrr] ?>
                </div>
                </div>
                <div class="popup_for_take hiden">
                  <?php
                    if($_SESSION['from_who'][$nrr]==$_SESSION['userUid']){
                  
                    }
                    else{
                      if($_SESSION['mth'][$nrr]!=NULL){
                  ?>
                  <div class="mth"><?php echo $_SESSION['mth'][$nrr];?></div>
                  <?php }?>
     
                    <?php 
                    if($_SESSION['who_acc'][$nrr]!=NULL){
                      ?>
                      <div class="mtc">
                        <div><?php echo $_SESSION['mtc'][$nrr];?></div>
                        <div><?php echo $_SESSION['who_acc'][$nrr];?></div>
                      </div>
                    <?php }
                  } ?>
                  <!-- </div> -->
                          <form class="cen" action='includes/change.inc.php' method='get'>
                              <!-- <div class='hiden'> -->
                              <input class='hiden'  name='idzmiany' value="<?php echo $_SESSION['id_zmiany'][$nrr]?>">
                              <script src="includes/change.js"></script>
                              <!-- </div> -->
                                <?php
                              if($_SESSION['from_who'][$nrr]==$_SESSION['userUid'] and
                                 $_SESSION['is_it_taken'][$nrr]==0 and 
                                 $_SESSION['decision'][$nrr]==0
                                 ){
                                ?>
<!-- czy napewno się rozmyśliłeś??    -->
                                <div class="i_change_my_mind" id="change" onclick="change(<?php echo $_SESSION['id_zmiany'][$nrr]?>)">anuluj</div><br>
                                <!-- <button  class='i_change_my_mind' name='change' value='submit'>rozmyśliłem się</button> -->
                                <?php
                              }
                              else{
                              if($_SESSION['decision'][$nrr]==1 and $_SESSION['for_who'][$nrr]==$_SESSION['userUid']){
                                ?>
                                <!-- <input class='hiden'  name='give_back'> -->
                                <input class='hiden'  name='name_for' value="<?php echo $_SESSION['name_for'][$nrr]?>">
<!-- czy napewno chcesz oddać tą zmianę -->
            
                                <div class="i_change_my_mind" id="change" onclick="give_back(<?php echo $_SESSION['id_zmiany'][$nrr]?>)">Oddaję</div><br>
                                <?php 
                                // it has to be fixed - give back shift that you took
                                }
                              }
                                ?>
                        </form> 
                </div>
        </div>
                          <?php
                          $nrr++;
                        }
                      ?>
                      <script src="includes/popup_shift.js"></script>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          