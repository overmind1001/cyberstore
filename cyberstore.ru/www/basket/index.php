<!DOCTYPE html>
<html>

    <head>
        <title>Всё для киборгов</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <link type="text/css" href="./css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="./js/jquery-ui-1.8.18.custom.min.js"></script>  
        <script src="./jquery.mobile-1.0.1.min.js"></script>
        <script src="./catalog/catalog.js"></script>
        <link rel="stylesheet" href="./main.css" />
        <script>
            $(function()
                {
                    $.mobile.defaultPageTransition = "fade";
                    $.mobile.ajaxLinksEnabled = false;
                });
        </script>
    </head>
    
    <body>
        <div id="wrapper">
            <div id="mainpage">
                <div data-role="header" data-theme="c">
                    
                    <table style="background: url('./logo.png')" border="0px" width="100%">
                        <tr>
                            <td rowspan="2" style="width:35%; height:130px;"></td>
                            <td valign="top" align="right">
                                <a href="#" data-role="button" data-inline="true">Вход</a>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="bottom">
                                <a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 квазибит</a>
                            </td>                            
                        </tr>
                    </table>
                    
                    <div data-role="navbar" >
                        <ul>
                            <li>
                                <a id="link1" href="#" data-theme="a">Главная</a>
                            </li>
                            <li>
                                <a id="link2" href="" onclick="$.mobile.changePage('./catalog/index.php'); $('#link2').addClass('ui-btn-active'); $('#link1').removeClass('ui-btn-active');" data-theme="a">Каталог</a>
                            </li>
                            <li>
                                <a id="link3" href="#" onclick="$.mobile.changePage('./basket/index.php'); $('#link3').addClass('ui-btn-active'); $('#link3').removeClass('ui-btn-active');" data-theme="a">Корзина</a>
                            </li>
                            <li>
                                <a href="#" data-theme="a">Помощь</a>
                            </li>
                        </ul>
                    </div><!--navbar-->   
                    
                </div><!--header-->
            </div><!--mainpage-->
            
            <div data-role="footer">
                <h1>© ДаЁжСофт</h1>
            </div><!--footer-->
            
        </div><!--wrapper-->
    </body>
    
</html>
    
    
