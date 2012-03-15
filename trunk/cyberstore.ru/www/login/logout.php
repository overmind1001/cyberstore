<?php
    include_once 'redirect.php';
    
    if(isset($_COOKIE['cybersession'])){
        setcookie('cybersession', 0, -1,"/", ".cyberstore.ru");
    }
    redirectToPage("../../");
?>
