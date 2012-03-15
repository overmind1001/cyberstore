<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - каталог</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />

        <link type="text/css" href="./../css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="./../js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="./../js/jquery-ui-1.8.18.custom.min.js"></script>
        
        <script src="./../jquery.mobile-1.0.1.min.js"></script>
        <script src="./catalog.js"></script>
        <link rel="stylesheet" href="./../main.css" />
        
        <script>
            function updateSelectedButtons(){
                $('#link1,link2').removeClass('ui-btn-active');
                $('#link2').addClass('ui-btn-active'); 
            }
            $(function(){
                //$.mobile.defaultPageTransition = "fade";
                //$.mobile.ajaxLinksEnabled = false;
                updateSelectedButtons();
                $( 'div' ).live( 'pageshow', function(event, ui){
                    $('#accordion').accordion();
                    $('#accordion').css('width','200px');
                    $('#accordion').css('margin','10px');
                    $('.ui-accordion-content').css('padding-top','5px');
                    $('.ui-accordion-content').css('padding-bottom','5px');
                    $('.ui-accordion-content').css('padding-left','15px');
                    $('.ui-accordion-content').css('padding-right','15px');
                    <?php
                        if ($basket != null)
                            echo 'updateBasketInfo_b('.$basket->getId().');';
                    ?>
                });
            });            
        </script>
    </head>
    
    
<?
    require_once './../vendor/propel/runtime/lib/Propel.php';
    Propel::init("./../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("./../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
?>
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
                            <a href="../login" data-role="button" data-inline="true">Вход</a>
                        </td>
                    </tr>
                        <td align="right" valign="bottom">
                            <a id="basket" href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 квазибит</a>
                        </td>
                    <tr>
                </table>
                <div data-role="navbar" >
                    <ul>
                        <li>
                            <!--a id="link1" href="#" onclick="$.mobile.changePage('./../index.php'); $('#link1').addClass('ui-btn-active'); $('#link2').removeClass('ui-btn-active');" data-theme="a">Главная</a-->
                            <a id="link1" href="../" data-theme="a">Главная</a>
                        </li>
                        <li>
                            <a id="link2" href="../catalog" data-theme="a">Каталог</a>
                        </li>
                        <li>
                            <a id="3" href="../basket" data-theme="a">Корзина</a>
                        </li>
                        <li>
                            <a id="4" href="../about" data-theme="a">Помощь</a>
                        </li>
                    </ul>
                </div>
            </div><!-- /header -->
            <div data-role="content">
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
            </div><!-- /content -->

            <div data-role="footer">
                <h1>© ДаЁжСофт</h1>
            </div><!-- /footer -->

        </div><!-- /mainpage -->
    </div><!-- /wrapper-->
</body>
</html>