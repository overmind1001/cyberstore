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
    
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $divs=  CatalogDivQuery::create()->findByName($old_div_name);
    $div=$divs[0];
    $div->setName($div_name);
    $div->save();
?>
<?php
    include '../adminHead.php';
    $name="Раздел каталога изменен";
    generateHead($name, $name)
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
    window.location = "index.php";
</script>
