<!DOCTYPE html> 
<html> 
    <head> 
	<title>CyberStore - всё для киборгов</title> 
        
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        
        <style>
            * {
                    margin: 0;
                    padding: 0;}
            html {
                    height: 100%;}
            body {
                    font: 12px/18px Arial, Tahoma, Verdana, sans-serif;
                    width: 100%;
                    height: 100%;}
            p {
                    margin: 0 0 18px}
            #wrapper {
                    width: 1000px;
                    margin: 0 auto;
                    min-height: 100%;
                    height: auto !important;
                    height: 100%;}
            /* Header
            -----------------------------------------------------------------------------*/
            #header {
                    height: 50px;
                    background: black;
                    border-radius: 20px;
                    border: grey solid;
            }
            #header:hover h1
            {
                color: yellow;
            }
            #header h1  {
                text-align: center;
                padding-top: 15px;
                color: white;
                font-family: Arial;
            }
            /* Middle
            -----------------------------------------------------------------------------*/
            #content {
                    margin: 20px;
                    padding: 0 0 40px;}
            /* Footer
            -----------------------------------------------------------------------------*/
            #footer {
                    width: 1000px;
                    margin: -50px auto 0;
                    height: 50px;
                    background: black;
                    position: relative;
                    border-radius: 20px;}
            #footer h1  {
                text-align: center;
                padding-top: 15px;
                color: white;
                font-family: Arial;
            }
            #footer:hover h1
            {
                color: yellow;
            }
        </style>
        
    </head> 
    <body>
    
<div id="wrapper">
    <div id="header" data-role="header">
        <h1>Пользователи</h1>
    </div><!-- /header -->
    <div id="content" data-role="content">	
        <form>
            <table>
                <tr><!--Лист-->
                    <select name="listUsers" size="20" required  style="width: 500px;">
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
                        <input name="btnAdd" type="button" value="Добавить пользователя" class="ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all" onClick="window.location = 'usersAdd.php';" />
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
            <a data-role="button" href="adminMain.php">В админку</a>
        </div>	
    </div><!-- /content -->
         

</div><!-- #wrapper -->
<div id="footer">
    <h1>Админка</h1>
</div><!-- #footer -->

            
            
            
            
        
        
        
       <script language="JavaSript">
            $('select').selectmenu();
            alert("ds");
        </script> 
    </body>
</html>