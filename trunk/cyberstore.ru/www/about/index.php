<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - о нас</title>
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
                //$('#link2').addClass('ui-btn-active'); 
            }
            $(function(){
                //$.mobile.defaultPageTransition = "fade";
                //$.mobile.ajaxLinksEnabled = false;
                updateSelectedButtons();
            });            
        </script>
    </head>
    
    
<?php
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
                <div id="aboutus">
                    <h1>Ну тут типа информация о нас</h1>
                </div>
            </div><!-- /content -->

            <div data-role="footer">
                <h1>© ДаЁжСофт</h1>
            </div><!-- /footer -->

        </div><!-- /mainpage -->
    </div><!-- /wrapper-->
</body>
</html>