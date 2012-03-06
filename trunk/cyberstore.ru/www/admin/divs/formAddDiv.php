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
    generateHead($name, $name,"default","");
?>
<center>
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
                        $div = CatalogDivQuery::create()->findOneById($parentDivId);
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
                <td>
                    <input type="submit" name="OK" value="OK"/>
                </td>
                <td>
                    <input type="reset" value="Очистить"/>
                </td>
                <td>
                    <input type="button" name="Back_to_goods" value="Назад к разделам" onClick="window.location = './';"/>
                </td>
            </tr>
        </table>
    </div>
</form>
</center>
<?php
    include '../adminFoot.php';
?>