<?php
    include_once 'findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - запчасти для всей семьи</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<!--
<?
    include 'propel.inc.php';
?>
-->

<body>
    <div id="wrap">
        <div id="header">
            <div id="enterbtn" style="float:right; padding:10px;">
                <a href="">Вход</a>
            </div>
            <div id="basketinfo" style="float:right; margin-top:120px; margin-right:-43px;">
                Корзина: 0 товаров на 0 кб
            </div>
            <div id="nav">
                <div id="topmenu">
                    <ul>
                        <li class="active"><a href="#">Главная</a></li>
                        <li><a href="styles.html">Каталог</a></li>
                        <li><a href="cart.htmlposition:right;">Корзина</a></li>
                        <li><a href="#">Помощь</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="content" style="height:500px;">
                <p>
                        <?php
                            if($basket==NULL) {
                                echo "Корзина = NULL";
                            }
                            else {
                                echo " Сессия: ".$basket->getSessionId(). " Корзина: ".$basket->getId()." ";
                                $user_id = $basket->getUserId();
                                $user = UserQuery::create()->findOneById($user_id);
                                if($user==NULL){
                                    echo "Пользователь=NULL";
                                }
                                else {
                                    echo "Пользователь: ".$user->getLogin();
                                }
                            }
                        ?>
                    </p>

                    <table  class="startTable">
                        <!--tr>
                            <td>Изображение</td><td>Название</td><td>Описание</td>
                        </tr-->
                        <?php

                            function printRow($good) {
                                $name=$good->getname();
                                $description=$good->getDescription();
                                $price=$good->getPriceCurrent();

                                if($good->getPictureId()!=NULL){
                                    $picture_path = './pictures/'."m".$good->getPictureId().'.jpg';
                                }
                                else{
                                    $picture_path='./pictures/m0.jpg';
                                }

                                echo "<tr>";

                                echo "
                                <td class='pic'>
                                    <table style='align: center;'>
                                        <tr><td class='mainLeft'><img src='$picture_path'> </td></tr>
                                        <tr><td class='mainLeft'>$name </td></tr>
                                        <tr><td class='mainLeft'>Цена: $price квазибит</td></tr>
                                    </table>
                                </td>
                                <td class='descr'>$description</td>";

                                echo '</tr>';
                            }

                            $goods=GoodsQuery::create()->limit(3)->find();
                            foreach ($goods as $good) {
                                printRow($good);
                            }
                        ?>
                    </table>
        </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>

</body>
</html>
