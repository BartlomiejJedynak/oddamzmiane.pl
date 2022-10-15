<div class="actual_stats">
    <?php
        $this_month=date('m');
        $last_month=date('m')-1;
        switch ($this_month) { //if you have to show shifts from last year
            case 1:
                $m_1=12;
                $this_m="styczeń";
                $last_m="grudzień";
                break;
            case 2:
                $m_2=12;
                $this_m="lty";
                $last_m="styczeń";
                break;
            case 3:
                $m_3=12;
                $this_m="marzec";
                $last_m="luty";
                break;
            case 4:
                $this_m="kwiecień";
                $last_m="marzec";
                break;
            case 5:
                $this_m="maj";
                $last_m="kwiecień";
                break;
            case 6:
                $this_m="czerwiec";
                $last_m="maj";
                break;
            case 7:
                $this_m="lipiec";
                $last_m="czerwiec";
                break;                                           
                
            case 8:
                $this_m="sierpień";
                $last_m="lipiec";
                break;
            case 9:
                $this_m="wrzesień";
                $last_m="sierpień";
                break;
            case 10:
                $this_m="październik";
                $last_m="wrzesień";
                break;
            case 11:
                $this_m="listopad";
                $last_m="październik";
                break;
            case 12:
                $this_m="grudzień";
                $last_m="listopad";
                break; 
                         
        }
            $m_0=$this_month;
            $m_1=$m_0-1; 
            $m_2=$m_1-1; 
            $m_3=$m_2-1;
        if($_SESSION['make_sure']=="empty"){
            $nr=1;
            
            while($nr<=$_SESSION['nrr']-1){
                            //switch for add minutes
                switch ($_SESSION['do_m'][$nr]) {
                    case 0:
                        $_SESSION['do_m'][$nr]=0;
                        break;
                    case 15:
                        $_SESSION['do_m'][$nr]=0.25;
                        break;
                    case 30:
                        $_SESSION['do_m'][$nr]=0.5;
                        break;
                    case 45:
                        $_SESSION['do_m'][$nr]=0.75;
                        break;
                }          
                            //switch for add minutes
                switch ($_SESSION['od_m'][$nr]) {
                    case 0:
                        $_SESSION['od_m'][$nr]=0;
                        break;
                    case 15:
                        $_SESSION['od_m'][$nr]=0.25;
                        break;
                    case 30:
                        $_SESSION['od_m'][$nr]=0.5;
                        break;
                    case 45:
                        $_SESSION['od_m'][$nr]=0.75;
                        break;
                }
                        $sum=$_SESSION['do_h'][$nr]+$_SESSION['do_m'][$nr]-$_SESSION['od_h'][$nr]+$_SESSION['od_m'][$nr]."h-";
                if ($_SESSION['month_av'][$nr]==$m_3 or //sum h only last 3 months
                    $_SESSION['month_av'][$nr]==$m_2 or 
                    $_SESSION['month_av'][$nr]==$m_1
                    ){
                        $qwe[$nr] = $sum;
                        $a= $_SESSION['month_av'][$nr]."<br>";
                        
                
                }
                if($_SESSION['month_av'][$nr]==$m_1){ //sum h from last mohth
                    $am[$nr] = $sum;
                    
                }
                if($_SESSION['month_av'][$nr]==$m_0){ //sum h from last mohth
                    $tm[$nr] = $sum;
                    
                }
                if($_SESSION['month_av'][$nr]!=0){ //sum all given h
                    $all[$nr] = $sum;
                    
                        
                    }
                $nr++; 
            }

            if(isset($tm))echo array_sum($tm)."h - ".$this_m."<br>";
            if(isset($am))echo array_sum($am)."h - ".$last_m."<br>";
            if(isset($all))echo array_sum($all)."h<br>";
        }
            
    ?>
</div>
