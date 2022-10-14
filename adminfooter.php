<!-- FOOTER -->
<?php
    require "errors.php";
?>
<script>

</script>
<script src="includes/ques_show.js"></script>
<form action="includes/games_begin.php" method="get"> 
    <div class="confirm_box hiden">
        <div class="confirm_in_box">
            <div class="top_ques">Czy napewno opublikowałeś grafik i chcesz by kurierzy mogli wymieniać się zmianami w przyszłym tygodniu?</div>
            <div class="ans">
                <div class="nope">nie</div>
                <button class="games" name="the_games">tak</button>
            </div>
        </div>
    </div>
    <div class="the_games"><div onclick="ques_show()" class="games_button" name="the_games"><b>grafik opublikowany</b></div></div> 
</form>
<script src="includes/app2.js"></script>
<!-- END-FOOTER -->
