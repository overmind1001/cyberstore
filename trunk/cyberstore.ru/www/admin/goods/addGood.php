name description price count catalog_name picture
<?php
    $error=false;
    if(!isset($_POST['name'])) {
        $error=true;
    }
    if(!isset($_POST['description'])) {
        $error=true;
    }
    if(!isset($_POST['price'])) {
        $error=true;
    }
    if(!isset($_POST['count'])) {
        $error=true;
    }
    if(!isset($_POST['catalog_name'])) {
        $error=true;
    }
    if(!isset($_POST['picture'])) {
        $error=true;
    }
    
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $good_name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $count=$_POST['count'];
    $catalog_name=$_POST['catalog_name'];
    $picture=$_POST['picture'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
        
    
    ыыыы$users = UserQuery::create()->findByLogin($login);
    
    
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
    $name="Товар добавлен";
    generateHead($name, $name)
?>
<h2>
    <?php
        echo "Товар $good_name успешно добавлен!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к добавлению товаров!");
    window.location = "formAddGood.php";
</script>

