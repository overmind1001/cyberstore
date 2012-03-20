<?
    include_once 'propel.inc.php';
    
    function findBasket()
    {
        if (isset($_COOKIE['cybersession'])) {//если узнали чувака
                $ssid = $_COOKIE['cybersession'];
//                if(setcookie('cybersession', $ssid, time()+60*60*24*7,"/", ".cyberstore.ru")) { ////кука живёт 7 дней
//               
//                }
//                else {
//                    echo "Куки не установлены";
//                }
                $basket = BasketQuery::create()->findOneBySessionId($ssid);
                if ($basket == null) {
                    $basket = new Basket($ssid);
                    $basket->save();
                }
//                if(setcookie('cybersession', $ssid, time()+60*60*24*7,"/", ".cyberstore.ru")) { ////кука живёт 7 дней
//               
//                }
//                else {
//                    echo "Куки не установлены";
//                }
        } else {
            $str = date("d.m.Y H:i").(rand());
            $cokie = md5($str);

            $basket = new Basket($cokie);
            $basket->save();

            if(setcookie('cybersession', $cokie, time()+60*60*24*7,"/", ".cyberstore.ru")) { ////кука живёт 7 дней
               
            }
            else {
                echo "Куки не установлены";
            }
        }
        return $basket;
    }

?>