<form>
    <div><!-- -->
        <table>
            <tr><!--Заголовок-->
                <h1>Добавить/Редактировать товар</h1>
            </tr>
            <tr>
                <td>Название товара:</td>
                <td><input type="text" name="goodName" /></td>
            </tr>
            <tr>
                <td>Описание товара:</td>
                <td><textarea name="gooddescription" rows="10" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Цена:</td>
                <td><input type="text" name="goodPrice" /></td>
            </tr>
            <tr>
                <td>Количество:</td>
                <td><input type="text" name="goodCount" /></td>
            </tr>
            <tr>
                <td>Раздел каталога:</td>
                <td><select name="goodCatalog" size="1"> 
                        <?php
                            for($i=0;$i<10;$i++)
                            {
                                echo "<option>Раздел каталога $i</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Изображение:</td>
                <td><input type="file" name="goodPicture" /></td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <input type="submit"/>
            </tr>
            <tr>
                <input type="reset" value="Очистить"/>
            </tr>
            <tr>
                <input type="button" name="Back_to_goods" value="Назад к товарам"/>
            </tr>
        </table>
    </div>
</form>