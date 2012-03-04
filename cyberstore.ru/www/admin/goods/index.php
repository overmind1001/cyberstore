<?php
    include '../adminHead.php';
    $name="Товары";
    generateHead($name, $name);
?>

<form method="POST" action="selectAED.php" >
    <table>

        <tr><!--Лист-->
            <select name="good_name" size="20" style="width: 500px;">
                <?php
                    include_once '../../initPropel.php';
                    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
                    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());

                    $goods = GoodsQuery::create()->find();
                    //$a=  new Goods();
                    //$a->getn
                    foreach ($goods as $good)   {
                        $good_name=$good->getName();
                        echo "<option>$good_name</option>";
                    }
                ?>
            </select>
        </tr>
        
        <tr><!--Кнопки-->
            <td>
                <input name="formAddGood" type="submit" value="Добавить товар" />
            </td>
            <td>
                <input name="formEditGood" type="submit" value="Редактировать товар" />
            </td>
            <td>
                <input name="formDeleteGood" type="submit" value="Удалить товар" />
            </td>
        </tr>
    </table>
</form>
<div>
    <a href="../">В админку</a>
</div>

<?php
    include '../adminFoot.php';
?>
