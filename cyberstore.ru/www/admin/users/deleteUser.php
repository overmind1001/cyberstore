<?php
    $error=false;
    if(!isset($_POST['login'])) {
        $error=true;
    }
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $login=$_POST['login'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $users = UserQuery::create()->findByLogin($login);
    $user=$users[0];
    $user->delete();
?>
<?php
    include '../adminHead.php';
    $name="Пользоваетль удален";
    generateHead($name, $name)
?>
<h2>
    <?php
        echo "Пользователь $login успешно удален!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к пользователям!");
    window.location = "index.php";
</script>

