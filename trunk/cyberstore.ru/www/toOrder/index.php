<?php
    include_once './../findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cyberstore - корзина</title>
        <link href="./../style.css" rel="stylesheet" type="text/css" />
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../catalog/catalog.js"></script>
        
        <script>
            $(function(){
                $("button").button();
                $('#set').buttonset();
            });
        </script>
    </head>
    
    <body>
        <div id="wrap">
            
                <div id="header">
                    <div id="nav">
                        <div id="topmenu">
                            <table>
                                <tr>
                                    <td><a href="./../">Главная</a></td>
                                    <td><a href="./../catalog/">Каталог</a></td>
                                    <td class="active"><a href="./">Корзина</a></td>
                                    <td><a href="./../about/">Помощь</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>   
                </div>   
            
                <div class="clear"></div>
                <div id="content" style="">
                    <center>
                        <h1 align="center">Выберите средство оплаты</h1>
                        <form method="post" action="pay.php" data-ajax="false">
                            <table class="payment" align="center">
                                <tr>
                                    <td>
                                        <input type="radio" name="paytype" value="wm" checked>        
                                            <img src="./wm.png" hspace="30" align="center"> 
                                            WebMoney
                                        </input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="paytype" value="ya">        
                                            <img src="./ya.png" hspace="30" align="center"> 
                                            Яндекс Деньги
                                        </input>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>
   </div>
</body>
</html>