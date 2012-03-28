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
                                   //$('#payform').empty();
                                   $('#payform').html('<h1>Оплата успешно произведена</h1>');
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
                            
<!--                                <table id="payform" class="payment" align="center">
                                    <tr>
                                        <h1 align="center">Выберите средство оплаты</h1>
                                    </tr>
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
                                    <tr>
                                        <td>
                                            <button onclick="pay();">Оплатить</button>
                                        </td>    
                                    </tr>

                                </table>-->
                            
                            <form id=pay name=pay method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">

                                <p><img src="./wm.png" hspace="30" align="center">Платеж через WebMoney</p>
                                
                                <?php
                                    $sum=0.0;
                                    if($basket!=NULL){
                                        $count=$basket->countGoodInBaskets();
                                        $goodsInBasket = $basket->getGoodInBaskets();

                                        foreach ($goodsInBasket as $goodInBasket) {
                                            $good_id = $goodInBasket->getGoodId();
                                            $good = GoodsQuery::create()->findOneById($good_id);
                                            if($good!=NULL){
                                                $sum += $good->getPriceCurrent()*$goodInBasket->getCount();
                                            }
                                        } 
                                    }
                                    echo   '<p>
                                                <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="'.$sum.'">
                                                <input type="hidden" name="LMI_PAYMENT_DESC" value="Pay Cyberstore">
                                                <input type="hidden" name="LMI_PAYMENT_NO" value="1">
                                                <input type="hidden" name="LMI_PAYEE_PURSE" value="Z145179295679">
                                                <input type="hidden" name="LMI_SIM_MODE" value="0">
                                            </p>';
                                ?>
                                
                                <p>	
                                        <button type="submit" value="submit" onclick="pay();">Оплатить</button>
                                </p>
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