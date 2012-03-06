
<?php
    if(isset($_POST['good_name']))  {
                $good_name = $_POST['good_name'];
    }
    else    {
        echo "Ошибка! Товар для редактирования не выбран!";
        return;
    }
?>
<?php
    include '../adminHead.php';
    $name="Изменить товар";
    generateHead($name, $name)
?>
<?php
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
    
    $good = GoodsQuery::create()->findOneByName($good_name);
?>
    <form method="POST" enctype="multipart/form-data" action="editGood.php">
    <div>
        <table>
            <tr>
                <input type="text" name="old_name" hidden value=
                       <?php echo "'".$good->getName()."'";?>
                       />
                <td>Название товара:</td>
                <td><input type="text" name="name" value=
                           <?php echo "'".$good->getName()."'";?>
                           /></td>
            </tr>
            <tr>
                <td>Описание товара:</td>
                <td><textarea name="description" rows="10" cols="40"><?php echo $good->getDescription();?></textarea></td>
            </tr>
            <tr>
                <td>Цена:</td>
                <td><input type="text" name="price" value=
                           <?php echo "'".$good->getPriceCurrent()."'";?>
                           /></td>
            </tr>
            <tr>
                <td>Количество:</td>
                <td><input type="text" name="count" value=
                           <?php echo "'".$good->getCount()."'";?>
                           /></td>
            </tr>
            <tr>
                <td>Раздел каталога:</td>
                <?php
                    $catalog_id=$good->getCatalogId();
                    $catalog= CatalogDivQuery::create()->findOneById($catalog_id);
                ?>
                <td><select name="catalog_name" size="1" > 
                        <?php
                            
                            $divs=  CatalogDivQuery::create()->find();
                            foreach ($divs as $div)   {
                                if($div->countCatalogDivsRelatedById()<1)   {//листовой
                                    if($div->getId()==$catalog_id)  {
                                        $div_name = $div->getName();
                                        echo "<option selected>$div_name</option>";
                                    }
                                    else    {
                                        $div_name = $div->getName();
                                        echo "<option>$div_name</option>";
                                    }
                                }
                           
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
                
            
            <tr>
                <td>Изображение(jpeg):</td>
                <td><input type="file" name="picture"  accept="image/jpeg"/></td>
            </tr>
        </table>
    </div>
    <div>
        <img src=
                     <?php 
                        if($good->getPictureId()!=NULL){
                            echo "'"."../../pictures/".$good->getPictureId().".jpg"."'";
                        }
                     ?>
                     >
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
                <input type="button" name="Back_to_goods" value="Назад к товарам" onClick="window.location = 'index.php';"/>
            </tr>
        </table>
    </div>
</form>
        

<?php
    include '../adminFoot.php';
?>
