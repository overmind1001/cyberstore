<form>
    <div><!-- -->
        <table>
            <tr><!--Заголовок-->
                <h1>Добавить/Редактировать пользователя</h1>
            </tr>
            <tr>
                <td>Логин:</td>
                <td><input type="text" name="login" /></td>
            </tr>
            <tr>
                <td>Пароль:</td>
                <td><input type="text" name="password" /></td>
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
                <input type="button" name="Back_to_goods" value="Назад к пользователям" onClick="window.location = 'usersMain.php';"/>
            </tr>
        </table>
    </div>
</form>

