<form >
    <table>
        <tr><!--Заголовок-->
            <h1>Пользователи</h1>
        </tr>

        <tr><!--Лист-->
            <select name="listГыукы" size="20" required style="width: 500;">
                <?php
                    for($i=0;$i<100;$i++)
                    {
                        echo "<option>Пользователь $i</option>";
                    }
                ?>
            </select>
        </tr>
        
        <tr><!--Кнопки-->
            <td>
                <input name="btnAdd" type="button" value="Добавить пользователя" onClick="window.location = 'usersAdd.php';" />
            </td>
            <td>
                <input name="btnEdit" type="button" value="Редактировать пользователя" onClick="window.location = 'usersAdd.php';" />
            </td>
            <td>
                <input name="btnDelete" type="button" value="Удалить пользователя" />
            </td>
        </tr>
    </table>
</form>
<div>
    <a href="adminMain.php">В админку</a>
</div>