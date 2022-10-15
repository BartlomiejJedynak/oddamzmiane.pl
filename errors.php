<?php
if(isset($_GET['error'])){
     switch($_GET['error']){
         case 'emptyfields';
         $msg= "Proszę wypełnij wszystkie pola.";
         break;
         case 'wrongpassword';
         $msg= "nieprawidłowe hasło.";
         break;
         case 'passwordcheck';
         $msg= "błędnie wprowadziłeś potwierdzenie hasła.";
         break;
         case 'invalidname';
         $msg= "login nie może zawierać specjalnych znaków";
         break;
         case 'usertaken';
         $msg= "użytkownik o takiej nazwie już istnieje.";
         break;
         case 'nouser';
         $msg= "taki użytkownik nie istnieje.";
         break;
         case 'public';
         $msg= "kurierzy mogą wymieniać się zmianami na przyszły tydzien.<br>Przygotuj się na armagedon</b>";
         break;
         case 'wrongtime';
         $msg= "błednie podany przedział godzin.";
         break;
         case 'login_succes';
         $msg= "Witaj!<br>
         Jesteś zalgowany.<br> Możesz teraz wymieniać się zmianami";
         break;
         case 'alredy_taken';
         $msg= "nie możesz anulować tej zmiany - ktoś już ją przyjął";
         break;
         case 'login_pls';
         $msg= "zaloguj się proszę";
         break;
         case 'shift_deleted';
         $msg= "Zrezygnowałeś z oddawania zmiany";
         break;
         case 'logout';
         $msg= "Wylogowałeś się";
         break;
         case 'late';
         $msg= "nieaktualne";
         break;
         case 'sign_succes';
         $msg= "rejestracja przebiegła pomyślnie";
         break;
         case 'give_back';
         $msg= 'Oddajesz zmianę <br> Znajdziesz ją w zakładce "oddawane"';
         break;
         case 'sag';
         $msg= 'prawdopodobnie masz już zmiane tego dnia sprawdź zakładkę -> "moje" ;)';
         break;
         case 'invalidtext';
         $msg = 'wiadomość do koordynatora nie może zawierać znaków specjalnych';
         break;
         case 'empty_courier';
         $msg= 'wybierz kuriera';
         break;
         case 'canceled';
         $msg= 'zmiana została anulowana';
         break;
         }
        echo " 
        <div class=container_for_msg>
            <div class='msg'>      
                <div class=msg_box>".$msg."</div>
                <button class='close error-ok'> OK </button>
            </div>
        </div> ";
}
?>