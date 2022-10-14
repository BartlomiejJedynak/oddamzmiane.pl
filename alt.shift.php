

<!-- alt.shift.php -->

<?php

    $nrr=1;

    $_SESSION['data_zmiany'][$nrr-1]="cokolwiek";

    while($nrr<=$_SESSION['nr']-1){



      if($_SESSION['data_zmiany'][$nrr]!=$_SESSION['data_zmiany'][$nrr-1]){

?>

        </div>

        <div class='box-for-day'>

        <div class="show_data_shift">

        <?php echo $_SESSION['data_zmiany'][$nrr]; ?>

        </div>

<?php

    }

?>



    <div class="data_shift_table">



    <div class="popup_trigger">

        

    

   

    <div class="av_shift_time">

      <div class="top_dist">

        <?php echo $_SESSION['zmiana_od'][$nrr]; ?> - <?php echo $_SESSION['zmiana_do'][$nrr] ?>

      </div>

    </div>

    </div>



      

  

      

<div class="popup_for_take hiden">





<!-- </div> -->



<?php

      echo"

        <form action='includes/new.select.php' method='get'>

          <div class='hiden'>

          <input  name='from_who' value='".$_SESSION['from_who'][$nrr]."'></input>

          <input  name='idzmiany' value='".$_SESSION['id_zmiany'][$nrr]."'></input>



          <input  name='od_h' value='".$_SESSION['od_h'][$nrr]."'></input>

          <input  name='od_m' value='".$_SESSION['od_m'][$nrr]."'></input>

          <input  name='do_h' value='".$_SESSION['do_h'][$nrr]."'></input>

          <input  name='do_m' value='".$_SESSION['do_m'][$nrr]."'></input>

          

          <input  name='zmianaod' value='".$_SESSION['zmiana_od'][$nrr]."'></input>

          <input  name='zmianado' value='".$_SESSION['zmiana_do'][$nrr]."'></input>

          <input  name='datazmiany' value='".$_SESSION['data_zmiany'][$nrr]."'></input>

          <input  name='idkuriera' value='".$_SESSION['id_kuriera'][$nrr]."'></input>

          </div>";



            ?><div class="wnh">

            <textarea name="mth" maxlength="60" placeholder="wiadomość do hubu (max 60 znaków)"></textarea><!-- msg to hub -->

            <button  class='take_shift' name='take_shift' value='submit'>biorę</button>

          </div>

           

            <?php

          

        echo "</form> </div></div>";



      $nrr++;



    }





?>



<script src="includes/popup_shift.js"></script>





