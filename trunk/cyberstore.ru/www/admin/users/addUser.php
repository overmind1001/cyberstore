<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
    $error=false;
    if(!isset($_POST['login'])) {
        $error=true;
    }
    if(!isset($_POST['password'])) {
        $error=true;
    }
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $login=$_POST['login'];
    $password=$_POST['password'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
        
    $users = UserQuery::create()->findByLogin($login);
    
    
    if(count($users)>0)  {
        echo "Ошибка!";
        echo "Пользователь $login уже существует.";
        return;
    }
    
    $user = new User($login,$password);
    $user->save();
?>
<?php
    include '../adminHead.php';
    $name="Пользоваетль добавлен";
    generateHead($name, $name, "default", "");
?>
<h2>
    <?php
        echo "Пользователь $login успешно добавлен!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к добавлению пользователей!");
    window.location = "formAddUser.php";
</script>

