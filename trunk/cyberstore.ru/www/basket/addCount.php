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
        $good_in_basket_id = $_POST["good_id"];//id-товара в корзине.

        $basket = BasketQuery::create()->findOneBySessionId($ssid);
        $goodsInBasket = $basket->getGoodInBaskets();
        
        //$good = GoodsQuery::create()->findOneById($good_id);
        //$goodCount = $good->getCount();//общее количество товара

        //$g=new GoodInBasket();$g->getGoods()
        
        $found=false;
        foreach ($goodsInBasket as $goodInBasket) {
            if($good_in_basket_id == $goodInBasket->getId()) {
                $goodInBasketCount = $goodInBasket->getCount();
                $goodCount = $goodInBasket->getGoods()->getCount();
                if($goodCount>$goodInBasketCount){//увеличиваем количество товаров в корзине на 1
                    $goodInBasket->setCount($goodInBasketCount+1);
                    $goodInBasket->save();
                    echo '{"success": true, "count":'.($goodInBasketCount+1).'}' ;
                    $found=true;
                }
            }
        }
        if(!$found){
            echo '{"success": false }';
        }
     }
?>
