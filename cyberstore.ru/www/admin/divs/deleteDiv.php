<?php
   
    if(isset($_GET['div_id']))  {
        //do nothing
    }
    else {
        echo "Ошибка!";
        return;
    }

    $div_id=$_GET['div_id'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $divs=  CatalogDivQuery::create()->findById($div_id);
    $div=$divs[0];
    $div_name = $div->getName();
    $div->delete();
?>
<?php
    include '../adminHead.php';
    $name="Раздел удален";
    generateHead($name, $name)
?>
<h2>
    <?php
        echo "Раздел $div_name успешно удален!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к пользователям!");
    window.location = "index.php";
</script>
