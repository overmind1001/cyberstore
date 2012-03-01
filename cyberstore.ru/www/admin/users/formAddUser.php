<!--<!DOCTYPE html> 
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
            
            .ui-button
            {
                background-color: white;
            }
            .ui-state-hover
            {
                background-color: black;
            }
        </style>
        <script>
            $(function(){
                $("input:button").button();
            })
        </script>
    </head> 
    <body style="halign:center;">

<div id="wrapper">
    <div id="header" data-role="header">
        <h1>
            <!--?php //Отображение заголовка в зависимости от действия
                if(isset($_GET['act'])){
                    if($_GET['act']=="add"){
                        echo 'Добавить пользователя';
                    }
                    else {
                        echo 'Изменить пользователя';
                    }
                }
            ?>
        </h1>
    </div> /header 
    <div id="content" data-role="content">	
        <center>-->

<?php
    include '../adminHead.php';
    $name="Добавить пользователя";
    generateHead($name, $name)
?>
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


<!--        </center>
    </div> /content 
</div> #wrapper 

<div id="footer">
    <h1>Админка</h1>
</div> #footer 

    </body>
</html>-->
