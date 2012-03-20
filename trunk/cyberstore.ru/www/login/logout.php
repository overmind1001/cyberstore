<?php
    include_once 'redirect.php';
    
    if(isset($_COOKIE['cybersession'])){
        if(setcookie('cybersession', "", time()-60,"/", ".cyberstore.ru")) { ////кука живёт 7 дней
            
        }
        else{
            
        }
        
        
        
        //setcookie('cybersession', -100500, -100500,"/", ".cyberstore.ru");
    }
    redirectToPage("../../");
?>
