<?php
function isAdmin() {
    include_once $_SERVER['DOCUMENT_ROOT']. '/findBasket.php';
    if(isset($_COOKIE['cybersession'])) {
        $basket = findBasket();
        $user_id = $basket->getUserId();
        $user = UserQuery::create()->findOneById($user_id);
        if($user!=NULL){
            if($user->getLogin()=="sa"){//админ
                return true;
            }   
        }
    }
    return false;;
}
?>
