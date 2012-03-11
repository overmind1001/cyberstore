<?
    include_once './../propel.inc.php';
    
    $bid = isset($_POST['basketId']) ? $_POST['basketId'] : null;
    $ssid = isset($_POST['sessionId']) ? $_POST['sessionId'] : null;
    
    if ($bid != null)
        $basket = BasketQuery::create()->findOneById($bid);
    if ($ssid != null)
        $basket = BasketQuery::create()->findOneBySessionId($ssid);
    
    if ($basket != null) {
        $goodsCount = $basket->countGoodInBaskets();
        
        $goodsinbasket = $basket->getGoodInBaskets();
        $sum = 0;
        foreach ($goodsinbasket as $goodinbasket) {            
            $goodid = $goodinbasket->getGoods();
            $sum += ($goodinbasket->getCount())*($goodid->getPriceCurrent());
        }
        
        echo '{"goodsCount":'.$goodsCount.',"sum":'.$sum.'}';
    }
?>
