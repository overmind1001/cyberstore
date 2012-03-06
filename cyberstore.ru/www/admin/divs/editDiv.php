<?php
    $error=false;
    if(!isset($_POST['old_div_name'])) {
        $error=true;
    }
    if(!isset($_POST['div_name'])) {
        $error=true;
    }
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $old_div_name=$_POST['old_div_name'];
    $div_name=$_POST['div_name'];
    
    if($old_div_name == "root") {
        echo "Нельзя изменить root!";
        return;
    }
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $div=  CatalogDivQuery::create()->findOneByName($old_div_name);
    $div->setName($div_name);
    $div->save();
?>
<?php
    include '../adminHead.php';
    $name="Раздел каталога изменен";
    generateHead($name, $name,"default","");
?>
<h2>
    <?php
        echo "Раздела каталога $old_div_name успешно изменен на $div_name!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к разделам каталога!");
    window.location = "./";
</script>
