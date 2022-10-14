<div class="stats_top">
        <?php
        if(!isset($_GET['usr'])){
            echo "wybierz kurierza:";
            }
        else{              
            echo $_GET['usr'];
        }
        ?>
    </div>
        <div class="stats_form">
            <form class="stats_form_flex" action='includes/show.courier.inc.php' method='get'>
                <div>
                    <select name="SelecCourier" class="SelecCourier">
                        <option>
                            <?php
                                    if(isset($_GET['usr'])){
                                        echo $_GET['usr'];
                                    }
                                    
                                    ?></option>
                            <?php
                            $nrr=1;
                                while($nrr<=$_SESSION['nr']-1){ 
                            ?>
                                    <option>
                                        <?php
                                                echo $_SESSION["UsrFirstname"][$nrr]." ".$_SESSION["UsrLastname"][$nrr];
                                                
                                            ?>
                                    </option>
                            <?php $nrr++;
                                }
                            ?>
                    </select>
                    <br>

                </div>
                <div class="stats_buttons">
                    <button  class='show_stats' name='ShowCourier' value='submit'>DW</button>
                </div>
            </form>
            <?php require "show.stats.php";//my shifts  ?>
        <!-- end of this div in the show stats section -->
</div>


