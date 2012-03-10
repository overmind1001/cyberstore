<!DOCTYPE html>
<html>
    <head>
        <title>Неудачная авторизация</title>

        <link type="text/css" href="../css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.8.18.custom.min.js"></script>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <script src="../jquery.mobile-1.0.1.min.js"></script>

        <script src="../catalog/catalog.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <script>
            $(function(){
                $.mobile.defaultPageTransition = "fade";
                $.mobile.ajaxLinksEnabled = false;

                $( 'div' ).live( 'pageshow', function(event, ui){
                    $('#accordion').accordion();
                    $('#accordion').css('width','200px');
                    $('#accordion').css('margin','10px');
                    $('.ui-accordion-content').css('padding-top','5px');
                    $('.ui-accordion-content').css('padding-bottom','5px');
                    $('.ui-accordion-content').css('padding-left','15px');
                    $('.ui-accordion-content').css('padding-right','15px');
                });

            });
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="mainpage">
                <div data-role="header" data-theme="c">
                    <table style="background:url('../logo.png');" padding="0" margin="0" border="0px" width="100%">
                        <tr>
                            <td rowspan="2" style="width:35%; height:130px;">
                  
                            </td>
                            <td valign="top" align="right">
                                <!--a href="#" data-role="button" data-inline="true">Вход</a-->
                            </td>
                        </tr>
                            <td align="right" valign="bottom">
                                <a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 руб.</a>
                            </td>
                        <tr>
                        </td>
                    </table>
                            <div data-role="navbar" >
                                <ul>
                                <li>
                                    <a href="#" data-theme="a">Главная</a>
                                </li>
                                <li>
                                    <a href="#" onclick="$.mobile.changePage('./catalog/index.php');" data-theme="a">Каталог</a>
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
                        <h1 align="center">Авторизация</h1>
                        <form method="POST" action="login.php">
                            <table  align="center">
                                <tr>
                                    Введенная комбинация логин/пароль не встречается. <a href="./"> Пробовать еще раз.</a>
                                </tr>
                                
                                
                        </table>
                        </form>
                    </div>
                                    <!-- /content -->
</div><!-- /page -->
<div data-role="footer">
    <h1>© ДаЁжСофт</h1>
</div><!-- #footer -->
</div><!-- /wrapper-->
</body>
</html>