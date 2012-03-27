<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - история покупок</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<!--
<?
    include '../propel.inc.php';
?>
-->

<body>
    <div id="wrap">
        <div id="header">
            <div id="enter_exit">
                <?php $prefix = './..'; include '../userEnterExit.php'; ?> 
            </div>
            <div id="user">
                <?php include '../userInfo.php';  ?> 
            </div>
            <div id="basketinfo">
               <?php include '../basketInfo.php';?>
            </div>
            <div id="nav">
                <div id="topmenu">
                    <table>
                        <tr>
                            <td><a href="../">Главная</a></td>
                            <td><a href="../catalog/">Каталог</a></td>
                            <td><a href="../basket/">Корзина</a></td>
                            <td><a href="../about/">Помощь</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="content" style="">
            <?php
                //$s=new Sales();
                //$s->getDate();
                //$gs=new GoodsInSale();
                //$gs->get
                $user = UserQuery::create()->findOneById($basket->getUserId());
                if($user!=NULL){//если пользователь есть 
                    $user_id = $user->getId();
                    $sales = SalesQuery::create()->findByUserId($user_id);
                    echo "<table style='width:100%; '>";
                    foreach ($sales as $sale) {
                        $goodsInSale = $sale->getGoodsInSales();
                        
                        $date = $sale->getDate("d.m.Y H:i:s");
                        foreach ($goodsInSale as $goodInSale) {
                            $good=$goodInSale->getGoods();
                            
                            if($good->getPictureId()!=NULL){
                                $picture_path = '../pictures/'."m".$good->getPictureId().'.jpg';
                            }
                            else{
                                $picture_path='../pictures/m0.jpg';
                            }
                            $good_name = $good->getName();
                            $good_descr = $good->getDescription();
                            $count=$goodInSale->getCount();
                            $price=$goodInSale->getPrice();
                            echo "<tr>";
                            echo "
                                <td class='pic'>
                                    <table style='align: center;'>
                                        <tr><td class='mainLeft'><img src='$picture_path'> </td></tr>
                                        <tr><td class='mainLeft'>$good_name </td></tr>
                                        <tr><td class='mainLeft'>Цена: $price квазибит</td></tr>
                                    </table>
                                </td>
                                <td class='descr'>$good_descr</td>
                                <td>$count</td>
                                <td>$date</td>";
                            echo '</tr>';
                        }
                    }
                    echo "</table>";
                }
                else {
                    echo "<h1>История пуста</h1>";
                }
              ?>
            
        </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>
   </div>
</body>
</html>
