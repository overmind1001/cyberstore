<form>
    <table>
        <tr><!--Заголовок-->
            <h1>Покупки (только просмотр)</h1>
        </tr>

        <tr><!--Лист-->
            <select name="listDivParts" size="20" required style="width: 500;">
                <?php
                    for($i=0;$i<100;$i++)
                    {
                        echo "<option>Покупка $i</option>";
                    }
                ?>
            </select>
        </tr>
        
        <!--tr>
            <td>
                <input name="btnAdd" type="button" value="Добавить раздел" onClick="window.location = 'div_partAdd.php';"/>
            </td>
            <td>
                <input name="btnEdit" type="button" value="Редактировать раздел" onClick="window.location = 'div_partAdd.php';" />
            </td>
            <td>
                <input name="btnDelete" type="button" value="Удалить раздел" />
            </td>
        </tr-->
    </table>
</form>
<div>
    <a href="adminMain.php">В админку</a>
</div>