<form >
    <div><!-- -->
        <table>
            <tr><!--Заголовок-->
                <h1>Add/Edit good</h1>
            </tr>
            <tr>
                <td>Good name:</td>
                <td><input type="text" name="goodName" /></td>
            </tr>
            <tr>
                <td>Good description:</td>
                <td><textarea name="gooddescription" rows="10" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="text" name="goodPrice" /></td>
            </tr>
            <tr>
                <td>Good count:</td>
                <td><input type="text" name="goodCount" /></td>
            </tr>
            <tr>
                <td>Where at catalog:</td>
                <td><select name="goodCatalog" size="1"> 
                        <?php
                            for($i=0;$i<10;$i++)
                            {
                                echo "<option>Catalog part $i</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Picture:</td>
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
                <input type="reset"/>
            </tr>
            <tr>
                <input type="button" name="Back_to_goods" value="Back to goods"/>
            </tr>
        </table>
    </div>
</form>