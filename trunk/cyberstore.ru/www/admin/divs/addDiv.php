<?php
    $error=false;
    if(!isset($_POST['parent_div_name'])) {
        $error=true;
    }
    if(!isset($_POST['div_name'])) {
        $error=true;
    }
    
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $parent_div_name=$_POST['parent_div_name'];
    $div_name=$_POST['div_name'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
        
    
    $divs = CatalogDivQuery::create()->findByName($div_name);
    if(count($divs)>0)  {
        echo "Ошибка!";
        echo "Каталог $div_name уже существует.";
        return;
    }
    $parent_divs = CatalogDivQuery::create()->findByName($parent_div_name);
    $parent_div = $parent_divs[0];
    $parent_div_id = $parent_div->getId();
    
    $newDiv = new CatalogDiv();
    $newDiv->setName($div_name);
    $newDiv->setParentCatalogDivId($parent_div_id);
    $newDiv->save();
?>
<?php
    include '../adminHead.php';
    $name="Раздел каталога добавлен";
    generateHead($name, $name)
?>
<h2>
    <?php
        echo "Раздел каталога $div_name успешно добавлен!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к разделам каталога!");
    window.location = "index.php";
</script>
