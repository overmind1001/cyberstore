<form >
    <table>
        <tr><!--Заголовок-->
            <h1>Товары</h1>
        </tr>

        <tr><!--Лист-->
            <select name="listGoods" size="30" required style="width: 500;">
                <?php
                    for($i=0;$i<100;$i++)
                    {
                        echo "<option>Товар $i</option>";
                    }
                ?>
            </select>
        </tr>
        
        <tr><!--Кнопки-->
            <td>
                <input name="btnAdd" type="button" value="Добавить товар" />
            </td>
            <td>
                <input name="btnEdit" type="button" value="Редактировать товар" />
            </td>
            <td>
                <input name="btnDelete" type="button" value="Удалить товар" />
            </td>
        </tr>
    </table>
</form>
