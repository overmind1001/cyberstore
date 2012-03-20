<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
    include '../adminHead.php';
    $name="Пользователи";
    generateHead($name, $name, "default", "");
?>
<center>
    <form method="POST" action="selectAED.php">
            <table>
                <tr>
                    <select id="listUsers" name="login" size="20" style="width: 500px;">
                        <?php
                            include_once '../../initPropel.php';
                            Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
                            set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
                            
                            $users=UserQuery::create()->find();
                            foreach ($users as $user)   {
                                $login=$user->getLogin();
                                echo "<option>$login</option>";
                            }
                        ?>
                    </select>
                </tr>

                <tr style="height: 100px;"><!--Кнопки-->
                    <td>
                        <input name="formAddUser" type="submit" value="Добавить пользователя" />
                    </td>
                    <td>
                        <input name="formEditUser" type="submit" value="Редактировать пользователя" />
                    </td>
                    <td>
                        <input name="formDeleteUser" type="submit" value="Удалить пользователя" />
                    </td>
                </tr>
            </table>
        </form>
        
        <div class="goto_admin">
            <a data-role="button" href="../">В админку</a>
        </div>	
</center>
<?php
    include '../adminFoot.php';
?>
