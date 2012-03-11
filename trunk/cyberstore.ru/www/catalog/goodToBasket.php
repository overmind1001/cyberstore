<?
    include_once './../propel.inc.php';

    if (isset($_POST["ssid"])) {
        $ssid = $_POST["ssid"];
        $goodId = $_POST["goodId"];
        $count = $_POST["count"];

        $basket = BasketQuery::create()->findOneBySessionId($ssid);
        
        $goodInBasket = new GoodInBasket($count, $goodId, $basket->getId());
        $rows = $goodInBasket->save();
        
        $answer = '{"success":';
        
        if ($rows > 0) {
            $answer .= 'true';
            $answer .= ',"basketId":'.$basket->getId();
        } else $answer .= 'false';
        
        $answer .= '}';
        
        echo $answer;
    }
?>