<!-- MENU -->

<div class="form_link"> 
    <!-- <div class="show_tomorow "></div> -->
        <button onclick="location.href='shift.php'" class="shifts_from_menu my_shifts <?php echo $av; ?>" name="av_shifts_button">
        Dostępne
        </button>
</div>

    <button onclick="location.href='includes/give.inc.php'" class='shifts_from_menu my_shifts <?php echo $sh; ?>' name='my_shifts_button'>Oddaj</button>

<div class="form_link" >

    <form action='includes/my.shifts.inc.php' method='get'>

        <input class='hiden' name='wer' value='<?php echo $_SESSION['userId']?>'></input>



        <button class='shifts_from_menu my_shifts <?php echo $my; ?>' name='my_shifts_button' >Moje                

        </button>

    </form>

</div>

<!-- END-MENU -->















