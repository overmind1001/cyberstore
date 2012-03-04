<?php
    include '../adminHead.php';
    $name="Товары";
    generateHead($name, $name)
?>

<form >
    <table>

        <tr><!--Лист-->
            <select name="good_name" size="20" style="width: 500;">
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
                <input name="btnAdd" type="button" value="Добавить товар" onClick="window.location = 'goodsAdd.php';" />
            </td>
            <td>
                <input name="btnEdit" type="button" value="Редактировать товар" onClick="window.location = 'goodsAdd.php';" />
            </td>
            <td>
                <input name="btnDelete" type="button" value="Удалить товар" />
            </td>
        </tr>
    </table>
</form>
<div>
    <a href="../">В админку</a>
</div>

<?php
    include '../adminFoot.php';
?>
