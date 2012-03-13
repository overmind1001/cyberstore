<?
    include_once 'propel.inc.php';
    
    function findBasket()
    {
        if (isset($_COOKIE['cybersession'])) {//если узнали чувака
                $ssid = $_COOKIE['cybersession'];
                $basket = BasketQuery::create()->findOneBySessionId($ssid);
                if ($basket == null) {
                    $basket = new Basket($ssid);
                    $basket->save();
                }
        } else {
            $str = date("d.m.Y H:i").(rand());
            $cokie = md5($str);

            $basket = new Basket($cokie);
            $basket->save();

            setcookie('cybersession', $cokie, time()+60*60*24*7);//кука живёт 7 дней
        }
        return $basket;
    }

?>