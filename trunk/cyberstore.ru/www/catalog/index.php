<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - всё для киборгов</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <script src="jquery-1.6.4.min.js"></script>
        <script src="jquery.mobile-1.0.1.min.js"></script>
    </head>
    
<!--
<?
    require_once './../vendor/propel/runtime/lib/Propel.php';
    Propel::init("./../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("./../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
?>
-->
            
            
                <body>
                    
                    <div id="wrapper">
                        <div id="mainpage">
                            
                            <div data-role="header" data-theme="c">
                <table style="background:url('./../logo.png');" padding="0" margin="0" border="0px" width="100%">
                    <tr>
                        <td rowspan="2" style="width:35%; height:130px;">
                            <!--img src="logo.gif"-->
                        </td>
                        <td valign="top" align="right">
                            <a href="#" data-role="button" data-inline="true">Вход</a>
                        </td>
                    </tr>
                        <td align="right" valign="bottom">
                            <a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 руб.</a>
                        </td>
                    <tr>
                    </table>
                    <div data-role="navbar" >
                            <ul>
                            <li>
                                <a href="./../"  data-theme="a">Главная</a>
                            </li>
                            <li>
                                <a href="#"class="ui-btn-active" data-theme="a">Каталог</a>
                            </li>
                            <li>
                                <a href="#" data-theme="a">Корзина</a>
                            </li>
                            <li>
                                <a href="#" data-theme="a">Помощь</a>
                            </li>
                            </ul>
                        </div>

                                </div>
                                <!-- /header -->
                                
                                <div data-role="content">
                                    <div id="catalog">
                                        <table border="0px">
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
                                                                    <select id="select-count" name="select-choice-1" data-native-menu="false">
                                                                        <option value="six">6</option>
                                                                        <option value="twelte">12</option>
                                                                        <option value="twentyfour">24</option>
                                                                        <option value="fortyeight">48</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td align="center">
                                                        <!-- Страницы-->
                                                        <div id="topPagesLine" data-role="controlgroup" data-type="horizontal" class="localnav">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left:10px; padding-top:6px;" colspan="2">
                                                        <div id="catalogWindow">
                                                        <div id="catalogGrid" class="ui-grid-a">
                                                        <a href="#" data-role="button" data-icon="info">Выберите категорию, чтобы начать просмотр каталога.</a>
                                                        </grid-b>
                                                        </td>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <div style="text-align:center;">
                                                                <div id="bottomPagesLine" data-role="controlgroup" data-type="horizontal" class="localnav">
                                                                </div>
                                                                </div>
                                                            </td>
                            </tr>
                        </table>
                    </div>

    </div><!-- /content -->

<div data-role="footer">
    <h1>© ДаЁжСофт</h1>
</div><!-- #footer -->

</div><!-- /page -->
</div><!-- /wrapper-->
</body>
</html>