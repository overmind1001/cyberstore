<?php
    include '../propel.inc.php';
    
    if (isset($_POST["ssid"])) {
        $ssid = $_POST["ssid"];
    
        $basket = BasketQuery::create()->findOneBySessionId($ssid);
        $goodsInBasket = $basket->getGoodInBaskets();

        if($goodsInBasket->count() > 0) {
            // Шлем письмо (заглушка)
            mail('San4oKiselev@gmail.com', $ssid, 'оплатил');

            $user = UserQuery::create()->findOneById($basket->getUserId());
            // Обнуляем товары в корзине
            //$g=new GoodInBasket();$g->getc
            $sale = new Sales();
            $sale->setDate(date("d.m.Y H:i:s"));
            $sale->setUser($user);
            $sale->save();
            
            foreach ($goodsInBasket as $goodInBasket) {
                $count = $goodInBasket->getCount();
                
                //уменьшаем количество товара
                $good = GoodsQuery::create()->findOneById($goodInBasket->getGoodId());
                $good->setCount($good->getCount()-$count);//проверить чтобы не ушло в минус
                $good->save();
                //добавляем товар в покупку
                $goodInSale = new GoodsInSale();
                $goodInSale->setCount($count);
                $goodInSale->setGoodId($good->getId());
                $goodInSale->setPrice($good->getPriceCurrent());
                $goodInSale->setSales($sale);
                $goodInSale->save();
                
                //удаляем товар из корзины
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
