<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
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
    
    $div = CatalogDivQuery::create()->findOneById($div_id);
    $oldDivName = $div->getName();
?>
<?php
    include '../adminHead.php';
    $name="Изаменить подраздел";
    generateHead($name, $name,"default","");
?>
<center>
<form method="POST" action="editDiv.php">
    <div>
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