<?php
    if($basket==NULL) {
    }
    else {
        //$user_id = $basket->getUserId();
        //$user = UserQuery::create()->findOneById($user_id);
        if($user==NULL){
            //echo "<a href='./login/'>Вход</a>";
        }
        else {
            echo "Пользователь: ".$user->getLogin();
            //echo "<a style='margin-left=5px;' href='./login/logout.php'>Выход</a>";
        }
    }
?>