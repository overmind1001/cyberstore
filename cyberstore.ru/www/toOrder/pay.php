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
            
            foreach ($goodsInBasket as $goodInBasket) {
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
