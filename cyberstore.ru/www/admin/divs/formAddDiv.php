<?php
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    if(isset($_GET['div_id']))  {
        $parentDivId = $_GET['div_id'];
    }
    else {
        echo "Ошибка!";
        return;
    }
?>
<?php
    include '../adminHead.php';
    $name="Добавить подраздел";
    generateHead($name, $name)
?>
<form method="POST" action="addDiv.php">
    <div><!-- -->
        <table>
            <tr>
                <td>
                    Родительский каталог:
                </td>
                <td>
                    <input type="text" name="parent_div_name" readonly value=
                    <?php
                        $divs = CatalogDivQuery::create()->findById($parentDivId);
                        $div = $divs[0];
                        echo '"'.$div->getName().'"';
                    ?>
                    />
                </td>
            </tr>
            <tr>
                <td>Название каталога:</td>
                <td><input type="text" name="div_name" /></td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <input type="submit" name="OK" value="OK"/>
            </tr>
            <tr>
                <input type="reset" value="Очистить"/>
            </tr>
            <tr>
                <input type="button" name="Back_to_goods" value="Назад к разделам" onClick="window.location = 'index.php';"/>
            </tr>
        </table>
    </div>
</form>
<?php
    include '../adminFoot.php';
?>