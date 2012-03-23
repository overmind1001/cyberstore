<?php //Вход - выход
    
    if($basket!=NULL){
        
        $user_id = $basket->getUserId();
        $user = UserQuery::create()->findOneById($user_id);
        if($user!=NULL){
            echo "<a style='margin-left=5px;' href='$prefix/login/logout.php'>Выход</a>";
        }
        else {
            echo "<a style='margin-left=5px;' href='$prefix/login/'>Вход</a>";
        }
    }
?>    
