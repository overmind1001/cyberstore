<?
    include_once 'propel.inc.php';

    function findBasket()
    {
        if ($_COOKIE['cybersession']!='') {//если узнали чувака
                $ssid = $_COOKIE['cybersession'];
                $basket = BasketQuery::create()->findOneBySessionId($ssid);
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