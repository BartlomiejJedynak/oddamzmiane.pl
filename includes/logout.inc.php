<?php
if(isset($_POST['logout-submit'])){
session_start();
session_unset();
session_destroy();
echo("<script>location.href = '../login.php?error=logout';</script>");
}
?>