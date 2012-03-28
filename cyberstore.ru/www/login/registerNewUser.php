<?php 
	session_start();
    include_once '../findBasket.php';
    include_once 'redirect.php';
?>

<?php
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
    
    $defaultNextPage = "./";//TODO
    
    if(isset($_POST['nextPage']))   {
        $nextPage = $_POST['nextPage'];
        if($nextPage == "") {
            $nextPage =$defaultNextPage;
        }
    }
    else {
        $nextPage =$defaultNextPage;
    } 
	
	if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $_POST['keystring']){
		$capchaiswrong = false;
	}else{
		$capchaiswrong = true;
	}
    
    include_once '../initPropel.php';
    Propel::init("../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $user=UserQuery::create()->findOneByLogin($login);
	if ($capchaiswrong)
	{ 
		echo "Неверно введён код проверки";
	}
     else if($user==NULL) {
        
        $user = new User($login, $password);
        $basket = findBasket();
        $basket->setUserId($user->getId());
        
        $basket->save();
        $user->save();
        redirectToPage($nextPage);
    }
    else {
        echo "Пользователь с таким именем уже существует.";    
    }
?>

        
  