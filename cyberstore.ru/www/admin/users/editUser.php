<?php
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
    
    $users = UserQuery::create()->findByLogin($oldLogin);
    $user=$users[0];
    $user->setLogin($login);
    $user->setPassword($password);
    $user->save();
?>
<?php
    include '../adminHead.php';
    $name="Пользоваетль изменен";
    generateHead($name, $name)
?>
<h2>
    <?php
        echo "Пользователь $oldlogin успешно изменен на $login!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к пользователям!");
    window.location = "index.php";
</script>


