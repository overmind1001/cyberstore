<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
    include '../adminHead.php';
    $name="Добавить товар";
    generateHead($name, $name, "default", "");
?>
<center>
<form method="POST" enctype="multipart/form-data" action="addGood.php">
    <div>
        <table class="goodTable">
            <tr>
                <td>Название товара:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Описание товара:</td>
                <td><textarea name="description" rows="10" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Цена:</td>
                <td><input type="text" name="price" /></td>
            </tr>
            <tr>
                <td>Количество:</td>
                <td><input type="text" name="count" /></td>
            </tr>
            <tr>
                <td>Раздел каталога:</td>
                <td><select name="catalog_name" size="1"> 
                        <?php
                            include_once '../../initPropel.php';
                            Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
                            set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
                            
                            $divs=  CatalogDivQuery::create()->find();
                            foreach ($divs as $div)   {
                                if($div->countCatalogDivsRelatedById()<1)   {//листовой
                                    $div_name = $div->getName();
                                    echo "<option>$div_name</option>";
                                }
                           
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Изображение(jpeg):</td>
                <td><input type="file" name="picture" /></td>
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
                    <input type="button" name="Back_to_goods" value="Назад к товарам" onClick="window.location = './';"/>
                </td>
            </tr>
        </table>
    </div>
</form>
</center>
<?php
    include '../adminFoot.php';
?>