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
    if(!isset($_POST['oldLogin'])) {
        $error=true;
    }
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $login=$_POST['login'];
    $password=$_POST['password'];
    $oldLogin=$_POST['oldLogin'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $user = UserQuery::create()->findOneByLogin($oldLogin);
    $user->setLogin($login);
    $user->setPassword($password);
    $user->save();
?>
<?php
    include '../adminHead.php';
    $name="Пользоваетль изменен";
    generateHead($name, $name, "default", "");
?>
<h2>
    <?php
        echo "Пользователь $oldLogin успешно изменен на $login!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к пользователям!");
    window.location = "./";
</script>


