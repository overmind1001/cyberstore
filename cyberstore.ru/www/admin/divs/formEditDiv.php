<?php
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    if(isset($_GET['div_id']))  {
        $div_id = $_GET['div_id'];
    }
    else {
        echo "Ошибка!";
        return;
    }
    
    $divs = CatalogDivQuery::create()->findById($div_id);
    $div = $divs[0];
    $oldDivName = $div->getName();
?>
<?php
    include '../adminHead.php';
    $name="Изаменить подраздел";
    generateHead($name, $name)
?>
<form method="POST" action="editDiv.php">
    <div><!-- -->
        <table>
            <tr>
                <td>Старое название каталога:</td>
                <td><input type="text" name="old_div_name" readonly value=<?php echo "'$oldDivName'"; ?> /></td>
            </tr>
            <tr>
                <td>Новое название каталога:</td>
                <td><input type="text" name="div_name" value=<?php echo "'$oldDivName'"; ?> /></td>
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