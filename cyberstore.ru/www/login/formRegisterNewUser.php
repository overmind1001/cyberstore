<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - регистрация нового пользователя</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

    <script>
    $(function(){
                $("input:button,input:submit,input:reset,button").button();
            })
    </script>
</head>
<!--
<?
    include '../propel.inc.php';
?>
-->

<body>
    <div id="wrap">
        <div id="header">
            <div id="enterbtn" style="float:right; padding:10px;">
                <!--a href="./login/">Вход</a-->
            </div>
            <div id="basketinfo" style="float:right; margin-top:120px; margin-right:-43px;">
                Корзина: 0 товаров на 0 кб сделать
            </div>
            <div id="nav">
                <div id="topmenu">
                    <ul>
                        <li><a href="../">Главная</a></li>
                        <li><a href="../catalog/">Каталог</a></li>
                        <li><a href="../basket">Корзина</a></li>
                        <li><a href="../about">Помощь</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="content" style="">
            <center>
            <h1 align="center">Регистрация нового пользователя</h1>
            <form method="POST" action="registerNewUser.php">
                <table  align="center">
                    <tr>
                        <td>Логин:</td>
                        <td><input type="text" name="login" required selected></td>
                    </tr>
                    <tr>
                        <td>Пароль:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>

                    <tr>
                        <td>   
                            <input type="text" name="nextPage" hidden readonly>
                        </td>
                        <td>
                            <button type="submit" name="submit">Зарегистрировать</button>
                        </td>
                    </tr>
            </table>
            </form>
            </center>
        </div><!-- /content -->
                                    
        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>
    </div><!-- wrap -->
</body>
</html>