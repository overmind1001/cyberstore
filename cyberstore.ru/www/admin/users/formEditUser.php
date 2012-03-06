
<?php
    if(isset($_POST['login']))  {
                $login = $_POST['login'];
    }
    else    {
        echo "Ошибка! Пользователь для редактирования не выбран!";
        return;
    }
?>
<?php
    include '../adminHead.php';
    $name="Изменить пользователя";
    generateHead($name, $name, "default", "");
?>
<center>
        <form method="POST" action="editUser.php">
            <table>
                <input hidden type="text" name="oldLogin" <?php echo "value='$login'"; ?> />
                <tr>
                    <td>Новый Логин:</td>
                    <td><input type="text" name="login" <?php echo "value='$login'"; ?> /></td>
                </tr>
                <tr>
                    <td>Новый Пароль:</td>
                    <td><input type="text" name="password" /></td>
                </tr>

                <tr style="height: 100px;"><!--Кнопки-->
                    <td>
                        <input type="submit" name="OK" value="ОК"/>
                    </td>
                    <td>
                        <input type="reset" value="Очистить"/>
                    </td>
                    <td>
                        <input type="button" name="Back_to_goods" value="Назад к пользователям" onClick="window.location = './';"/>
                    </td>
                </tr>
            </table>
        </form>
</center>
<?php
    include '../adminFoot.php';
?>
