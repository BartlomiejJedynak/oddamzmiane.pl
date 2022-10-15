<!-- ALT.GIVE.SHIFT -->
<div class="give-shift-content">
<form class="addshift" action="includes/shift.inc.php" method="post">
<div class="show_data_shift">Chcę oddać:</div>
<div class="data_sends">
            <div class="from">
                <label class="lab">rozpoczęcie:</label>
                    <select class="tbox" name="od_h" id="from_hour">
                        <option value="11">11</option>
                        <?php
                        $nw=$_SESSION["rr"][1];
                            for ($x = 12; $x <= 19; $x++) {
                        ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                        <?php
                            }
                        ?>
                </select>
                <div class="betw">:</div>
                    <select class="tbox" name="od_min" id="from_min">
                    <option value="00">00</option>
                    <option value="15">15</option>
                        <?php
                            for ($x = 30; $x <= 45; $x=$x+15) {
                        ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                        <?php
                            }
                        ?>
                </select>  
            </div>
            <div class="to">
            <label class="lab">zakończenie</label>
                <select class="tbox" name="do_h" id="to_hour">
                <option value="13">13</option>
                <?php
                        for ($x=14 ; $x <= 22; $x++) {
                    ?>
                            <option value="<?php echo $x ?>"><?php echo $x ?></option>
                    <?php
                        }
                    ?>
            </select>
            <div class="betw">:</div>
                    <select class="tbox" name="do_min" id="to_min">
                    <option value="00">00</option>
                    <option value="15">15</option>
                        <?php
                            for ($x = 30; $x <= 45; $x=$x+15) {
                        ?>
                                <option value="<?php echo $x ?>"><?php echo $x ?></option>
                        <?php
                            }
                        ?>
                </select>  
                </div>
        </div>
        <div id="msg"></div>
      <div class="calendar-container">
        <div class="essa">
        <div class="place_for_add">
            <div class="sub_h_com hiden" id="sub_day" >⇦</div>
          </div>
        <div class="qweqwe">
          <div class="ymd"> 
            <div id="year" class="year"></div>
            .
            <div id="month" class="month"></div>
            .
            <div id="day" class="day"></div>
          </div>
          <div id="day_w" class="day_w"></div>
                  
        </div>
        <div class="place_for_add">
             <div class="add_h_com qwe <?php if(isset($nw)){echo $nw;}?>" id="add_day" > <!--next week unlock from admin panel -->
             ⇨
            </div>
          </div>
        </div>
        <div class="hiden">
        <input class="week" value='<?php echo date("W");?>'></input>
        <div class="week_send">
            <input name="week_send" value='<?php echo date("W");?>'></input>
        </div>
        <input class="day_of_the_week"  value='<?php echo date("w");?>'></input>
      </div>
      </div>
      <div class="hiden" id="date"></div>
      
        <div class="confirm_button" onclick="hours_show()">oddaję</div>
        <!-- <button type="button" class="confirm_button" onclick="hours_show()">Oddaję zmianę</button> -->
          <div class="confirm_box hiden">
        <!-- shift that you give out - only time  -->
            <div class="confirm_in_box">
            <div class="close-q">X</div>
            <p class="sure">Chcę oddać zmianę<br> </b>
            <div class="show_time">
                        <div id="show_from_h"></div>:
                        <div id="show_from_m"></div>
                        -
                        <div id="show_to_h"></div>:
                        <div id="show_to_m"> </div>
        </div>
            <div class="day_count_confirm">
                <div class="dzien" id='show_date_confirm'></div>
                <div id="day_z" class="day_confirm"></div>
            </div>
            <div class="buttons-question">
              <div class="no-button">NIE</div>
              <button class="yes-button" name="submit" value="submit">TAK</button>
            </div>
          </div>
          
        </div>
        <div class="od" id='h1'></div></span>
          <div class="do" id='h2'></div>
          <div class="date_box hiden">
          <div class="year_av_box">year</div>
          <div class="month_av_box">mont</div>
          <div class="day_av_box">day</div>
          <div class="d_o_y">
            <input class='day_of_the_year' value='<?php echo date("z")+1;?>'></input>
          </div>
        </div>
      </div>
    </form>
 
  </main>    
</div>
</div>
<!-- ALT.GIVE.SHIFT -->