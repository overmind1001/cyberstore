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
            function addCount(good_id) {
                ssid = readCookie('cybersession');
                $.post("addCount.php",
                        {
                            ssid: ssid,
                            good_id: good_id
                        },
                        function(data, textStatus, jqXHR){
                            response = eval("(" + data + ")");
                            if (response.success) {
                                $('#goodCount' + good_id).text(response.count);
                                updateBasketInfo_s();
                            }
                        },
                        'text'
                        );
            }
            function delCount(good_id) {
                ssid = readCookie('cybersession');
                $.post("delCount.php",
                        {
                            ssid: ssid,
                            good_id: good_id
                        },
                        function(data, textStatus, jqXHR){
                            response = eval("(" + data + ")");
                            if (response.success) {
                                $('#goodCount' + good_id).text(response.count);
                                updateBasketInfo_s();
                            }
                        },
                        'text'
                        );
            }
            function delGood(good_id) {
                ssid = readCookie('cybersession');
                $.post("delGood.php",
                        {
                            ssid: ssid,
                            good_id: good_id
                        },
                        function(data, textStatus, jqXHR){
                            response = eval("(" + data + ")");
                            if (response.success) {
                                //$('#startTable').removeData($('#goodRow' + good_id));
                                $('#goodRow' + good_id).remove();
                                updateBasketInfo_s();
                            }
                        },
                        'text'
                        );
            }
            function updateBasketInfo_s()
            {
                ssid = readCookie('cybersession');
                $.post(
                    '../catalog/basketInfo.php',
                    {
                        sessionId : ssid
                    },
                    updateBasketText,
                    'text');    
            }

            function updateBasketText(data, textStatus, jqXHR)
            {
                response = eval("(" + data + ")");
                $('#basketinfo').text('Корзина: ' + response.goodsCount + ' товаров на '
                    + response.sum + ' квазибит');
            }
        </script>
    </head>
    
    <?
        include './../propel.inc.php';
        include './printGoodsRow.php';
    ?>
    
    <body>
        <div id="wrap">
            
                <div id="header">
                    
                    <div id="enter_exit" style="float:right; padding:10px;">
                        <?php include '../userEnterExit.php'; ?> 
                    </div>

                    <div id="user" style="float:right; padding:10px;">
                        <?php include '../userInfo.php';  ?> 
                    </div>
                    <div id="basketinfo">
                        <?php include '../basketInfo.php';?>
                    </div>
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
                    <table class="startTable">
                        <?php                        
                            $goodInBasketQuery = GoodInBasketQuery::Create()->filterByBasket($basket);
                            $goodsInBasket = $goodInBasketQuery->find();

                            if($goodsInBasket->count()<1) {
                                echo "<h1>Корзина пуста</h1>";
                            }
                            
                            foreach ($goodsInBasket as $goodInBasket){
                                printGoodsRow($goodInBasket);
                            }
                        ?>
                    </table>
                </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>
   </div>
</body>
</html>
    
    
