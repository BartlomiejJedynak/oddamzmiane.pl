<div class="form_link"> 
    <form action="includes/shifts.to.ac.inc.php" method="get">
        <button class="shifts_from_menu my_shifts <?php echo $av; ?>" name="shifts_to_ac">Ogarnij</button>
    </form>
</div>
<div class="form_link"> 
    <form action='includes/my.shifts.inc.php' method='get'>
        <button class='shifts_from_menu my_shifts <?php echo $my; ?>' name='things_done'>Ogarnięte</button>
    </form>
</div>
<button onclick="location.href='includes/stats.inc.php'" class="shifts_from_menu  my_shifts  <?php echo $sh;?>">Godzinki</button>
