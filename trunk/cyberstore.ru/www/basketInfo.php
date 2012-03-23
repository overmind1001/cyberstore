<?php //need basket
    if($basket!=NULL){
        $count=$basket->countGoodInBaskets();
        $goodsInBasket = $basket->getGoodInBaskets();

        $sum=0.0;
        foreach ($goodsInBasket as $goodInBasket) {
            $good_id = $goodInBasket->getGoodId();
            $good = GoodsQuery::create()->findOneById($good_id);
            if($good!=NULL){
                $sum += $good->getPriceCurrent()*$goodInBasket->getCount();
            }
        } 
        echo "Корзина: $count товаров на $sum кб";
    }
    else {
        echo "Корзина: 0 товаров на 0 кб";
    }
?>