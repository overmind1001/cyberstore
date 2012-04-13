<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - о нас</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<!--
<?
    include '../propel.inc.php';
?>
-->

<body>
    <div id="wrap">
        <div id="header">
            <div id="enter_exit">
                <?php $prefix = './..'; include '../userEnterExit.php'; ?> 
            </div>
            <div id="user">
                <?php include '../userInfo.php';  ?> 
            </div>
            <div id="basketinfo">
               <?php include '../basketInfo.php';?>
            </div>
            <div id="nav">
                <div id="topmenu">
                    <table>
                        <tr>
                            <td><a href="../">Главная</a></td>
                            <td><a href="../catalog/">Каталог</a></td>
                            <td><a href="../basket/">Корзина</a></td>
                            <td class="active"><a href="../about/">Помощь</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="content" style="">
            <h1>О нас</h1>
            <p>У вас оторвало руку, и вы не знаете что делать? Скорее бегите, ползите, летите к нам!!!</p>
            <p>Как вы уже догадались, мы продаем различные запчасти для киборгов</p>
            <p>У нас ограмный выбор. Тут вам и ноги, и руки, и мозги... Сотни наименований.</p>
            
            <h1>Немного истории</h1>
            <p>Идея родилась у нас.</p>
            
            <h1>Контакты</h1>
            <p>абыр абыр</p>
            
            
        </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>
   </div>
</body>
</html>
