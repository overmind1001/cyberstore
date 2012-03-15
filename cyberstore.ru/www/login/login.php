<?php 
    include_once '../findBasket.php';
    include_once 'redirect.php';
    
    $error=false;
    
    if(!isset($_POST['login'])) {
        $error=true;
    }
    if(!isset($_POST['password'])) {
        $error=true;
    }
    
    if($error)  {
        echo "Ошибка. Не все поля заполнены!";
        return;
    }

    $login=$_POST['login'];
    $password=$_POST['password'];
    
    $defaultNextPage = "../";//TODO
    
    if(isset($_POST['nextPage']))   {
        $nextPage = $_POST['nextPage'];
        if($nextPage == "") {
            $nextPage =$defaultNextPage;
        }
    }
    else {
        $nextPage =$defaultNextPage;
    }
 
    
    include_once '../initPropel.php';
    Propel::init("../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $user=UserQuery::create()->findOneByLogin($login);
    if($user==NULL) {
        redirectToPage("badLogin.php");
    }
    else {
        //проверяем пароль
        if($user->getPassword()!=$password){
            redirectToPage("badLogin.php");
        }
        else {
            //code
            //пользователь пришел на сайт. он зарегистрирован, но у него либо нет кука, либо он другой.
            //берем сумму из базы и пихаем в куки
            $basket = BasketQuery::create()->findOneByUserId($user->getId());
            
            if($basket!=NULL)   {
                setcookie('cybersession', $basket->getSessionId(), time()+60*60*24*7,"/", ".cyberstore.ru");
            } else {//
                $basket = findBasket();
                $basket->setUserId($user->getId());
                $basket->save();
            }
            redirectToPage($nextPage);
        }
    }
?>

      
  