<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - запчасти для всей семьи</title>
    <link type="text/css" href="./../css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="./../js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="./catalog.js"></script>
    <script type="text/javascript" src="./../js/jquery-ui-1.8.18.custom.min.js"></script>
    <link href="./../style.css" rel="stylesheet" type="text/css" />
    <script>
        $(function(){
            $('#accordion').accordion();
        });
    </script>
</head>

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
                        <li><a href="./../">Главная</a></li>
                        <li class="active"><a href="styles.html">Каталог</a></li>
                        <li><a href="#">Корзина</a></li>
                        <li><a href="./../about/">Помощь</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="content" style="">
            <div id="catalog">
                    <table border="0px" width="100%">
                        <tr>
                            <td style="width:10%; vertical-align:top;" rowspan="3">
                                <!-- Категоризатор -->
                                <?include 'loadcategories.php';?>
                            </td>
                            <td width="110px" align="left">
                                <table>
                                    <tr>
                                        <td>
                                            <!--label for="select-count" class="select">На странице: </label-->
                                        </td>
                                        <td>
                                            <select id="select-count" name="select-choice-1" data-native-menu="false" onchange="countChanged();">
                                                <option value="6">6</option>
                                                <option value="12">12</option>
                                                <option value="24">24</option>
                                                <option value="48">48</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                             </td>
                            <td align="center">
                                <div id="topPagesLine" data-role="controlgroup" data-type="horizontal" class="localnav"></div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:10px; padding-top:6px;" colspan="2">
                                <div id="catalogWindow">
                                    <div id="catalogGrid" class="ui-grid-a">
                                        <a href="#" data-role="button" data-icon="info">Выберите категорию, чтобы начать просмотр каталога.</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div style="text-align:center;">
                                    <div id="bottomPagesLine" data-role="controlgroup" data-type="horizontal" class="localnav"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
        </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>

</body>
</html>
