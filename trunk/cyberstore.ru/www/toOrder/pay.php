<?php
    include '../propel.inc.php';
    
    if (isset($_POST["ssid"])) {
        $ssid = $_POST["ssid"];
    
        $basket = BasketQuery::create()->findOneBySessionId($ssid);
        $goodsInBasket = $basket->getGoodInBaskets();

        if($goodsInBasket->count() > 0) {
            // Шлем письмо (заглушка)
            mail('San4oKiselev@gmail.com', $ssid, 'оплатил');

            // Обнуляем товары в корзине
            //$g=new GoodInBasket();$g->getc
            
            foreach ($goodsInBasket as $goodInBasket) {
                $count = $goodInBasket->getCount();
                
                //уменьшаем количество товара
                $good = GoodsQuery::create()->findOneById($goodInBasket->getGoodId());
                $good->setCount($good->getCount()-$count);//проверить чтобы не ушло в минус
                $good->save();
                
                $goodInBasket->delete();
            }
            
            
            echo '{"success": true }';
        }
        else
        {
            echo '{"success": false }';
        }
    }
?>
