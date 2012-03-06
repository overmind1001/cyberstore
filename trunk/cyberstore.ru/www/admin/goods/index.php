<?php
    include '../adminHead.php';
    $name="Товары";
    generateHead($name, $name, "default", "");
?>
<center>
<form method="POST" action="selectAED.php" >
    <table>
        <tr><!--Лист-->
            <select name="good_name" size="20" style="width: 500px;">
                <?php
                    include_once '../../initPropel.php';
                    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
                    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());

                    $goods = GoodsQuery::create()->find();
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
<div class="goto_admin">
    <a href="../">В админку</a>
</div>
</center>

<?php
    include '../adminFoot.php';
?>
