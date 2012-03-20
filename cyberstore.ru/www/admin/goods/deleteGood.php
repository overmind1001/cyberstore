<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
    $error=false;
    if(!isset($_POST['good_name'])) {
        $error=true;
    }
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $good_name=$_POST['good_name'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $good=  GoodsQuery::create()->findOneByName($good_name);
    //удалить картинку
    $uploaddir = '../../pictures/';
    $picture_id = $good->getPictureId();
    $picture_path = $uploaddir."source".$picture_id.".jpg";
    $mini_picture_path = $uploaddir."m".$picture_id.".jpg";
    $standard_picture_path = $uploaddir.$picture_id.".jpg";
    if (file_exists($picture_path)) {
        if (unlink($picture_path)) {
            //файл удален
        }
        else    { 
            echo "Ошибка при удалении файла";
        }
    }
    else {
        //файла не было
    }
    if (file_exists($mini_picture_path)) {
        if (unlink($mini_picture_path)) {
            //файл удален
        }
        else    { 
            echo "Ошибка при удалении файла";
        }
    }
    else {
        //файла не было
    }
    if (file_exists($standard_picture_path)) {
        if (unlink($standard_picture_path)) {
            //файл удален
        }
        else    { 
            echo "Ошибка при удалении файла";
        }
    }
    else {
        //файла не было
    }
    
    $good->delete();
?>
<?php
    include '../adminHead.php';
    $name="Товар удален";
    generateHead($name, $name, "default", "");
?>
<h2>
    <?php
        echo "Товар $good_name успешно удален!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к товарам!");
    window.location = "./";
</script>
