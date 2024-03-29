<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - каталог</title>
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
                            <td class="active"><a href="./">Каталог</a></td>
                            <td><a href="../basket/">Корзина</a></td>
                            <td><a href="../about/">Помощь</a></td>
                        </tr>
                    </table>
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
