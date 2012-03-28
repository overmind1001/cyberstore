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
            });
            
            function pay(){
                ssid = readCookie('cybersession');
                $.post("pay.php",
                        {
                            ssid: ssid
                        },
                        function(data, textStatus, jqXHR){
                                response = eval("(" + data + ")");
                                if (response.success) {
                                   $('#content').html('<h1>Оплата успешно произведена</h1>');
                                }
                            },
                        'text'
                        );
            }
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
                                    <td><a href="../basket">Корзина</a></td>
                                    <td><a href="./../about/">Помощь</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>   
                </div>   
            
                <div class="clear"></div>
                <div id="content" style="">
                        <center>
                            <?php
                                pay();
                            ?>
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