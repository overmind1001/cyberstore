<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
    include '../adminHead.php';
    $name="Добавить пользователя";
    generateHead($name, $name, "default", "");
?>
<center>
        <form method="POST" action="addUser.php">
            <table>
                <tr>
                    <td>Логин:</td>
                    <td><input type="text" name="login" /></td>
                </tr>
                <tr>
                    <td>Пароль:</td>
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
        
        <div>
            <a data-role="button" href="../">В админку</a>
        </div>	
</center>
<?php
    include '../adminFoot.php';
?>