<?php
    /*
     *  Принимаемые параметры
        ssid: ssid - сессия
        count: count - текущее количество данного товара в корзине
        goodId: id - идентификатор товара
     */
    include '../propel.inc.php';

     if (isset($_POST["ssid"])) {
        $ssid = $_POST["ssid"];
        $good_id = $_POST["good_id"];//id-товара в корзине.

        $basket = BasketQuery::create()->findOneBySessionId($ssid);
        $goodsInBasket = $basket->getGoodInBaskets();
        
        $found=false;
        foreach ($goodsInBasket as $goodInBasket) {
            if($good_id == $goodInBasket->getId()) {
                $goodInBasketCount = $goodInBasket->getCount();
                if($goodInBasketCount>1){//уменьшаем количество товаров в корзине на 1
                    $goodInBasket->setCount($goodInBasketCount-1);
                    $goodInBasket->save();
                    echo '{"success": true, "count":'.($goodInBasketCount-1).'}' ;
                    $found=true;
                }
            }
        }
        if(!$found){
            echo '{"success": false }';
        }
     }
?>
