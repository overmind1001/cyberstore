<?php
    include '../adminHead.php';
    $name="Изменить пользователя";
    generateHead($name, $name)
?>
        <form method="POST" action="editUser.php">
            <table>
                <input hidden type="text" name="oldLogin" 
                       <?php
                            if(isset($_POST['login']))  {
                                        $login = $_POST['login'];
                            }
                            echo "value='$login'";
                       ?>
                       />
                <tr>
                    <td>Новый Логин:</td>
                    <td><input type="text" name="login" 
                               <?php
                                    echo "value='$login'";
                               ?>
                               /></td>
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
                        <input type="button" name="Back_to_goods" value="Назад к пользователям" onClick="window.location = 'index.php';"/>
                    </td>
                </tr>
            </table>
        </form>
        
        <div>
            <a data-role="button" href="../adminMain.php">В админку</a>
        </div>	

<?php
    include '../adminFoot.php';
?>
