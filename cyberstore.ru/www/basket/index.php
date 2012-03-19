<?php
    include_once './../findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cyberstore - запчасти для всей семьи</title>
        <link type="text/css" href="./../css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="./../js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="./catalog.js"></script>
        <script type="text/javascript" src="./../js/jquery-ui-1.8.18.custom.min.js"></script>
        <link href="./../style.css" rel="stylesheet" type="text/css" />
    </head>
    
    <?
        include './../propel.inc.php';
        include './printGoodsRow.php';
    ?>
    
    <body>
        <div id="wrap">
            
                <div id="enter_exit" style="float:right; padding:10px;">
                <?php //Вход - выход
                    if($basket!=NULL){
                        $user_id = $basket->getUserId();
                        $user = UserQuery::create()->findOneById($user_id);
                        if($user!=NULL){
                            echo "<a style='margin-left=5px;' href='./../login/logout.php'>Выход</a>";
                        }
                        else {
                            echo "<a style='margin-left=5px;' href='./../login/'>Вход</a>";
                        }
                    }
                ?>    
                </div>
            
                <div id="user" style="float:right; padding:10px;">
                <?php
                    if($basket==NULL) {
                    }
                    else {
                        //$user_id = $basket->getUserId();
                        //$user = UserQuery::create()->findOneById($user_id);
                        if($user==NULL){
                            //echo "<a href='./login/'>Вход</a>";
                        }
                        else {
                            echo "Пользователь: ".$user->getLogin();
                            //echo "<a style='margin-left=5px;' href='./login/logout.php'>Выход</a>";
                        }
                    }
                ?>
                </div>
                
                <div id="header">
                    <div id="nav">
                        <div id="topmenu">
                            <ul>
                                <li><a href="./../">Главная</a></li>
                                <li><a href="./../catalog/">Каталог</a></li>
                                <li class="active"><a href="./">Корзина</a></li>
                                <li><a href="./../about/">Помощь</a></li>
                            </ul>
                        </div>
                    </div>
                </div>   
            
                <div class="clear"></div>
                <div id="content" style="">
                    <table class="startTable">
                        <?php                        
                            $goodInBasketQuery = GoodInBasketQuery::Create()->filterByBasket($basket);
                            $goodsInBasket = $goodInBasketQuery->find();

                            if($goodsInBasket->count()<1) {
                                echo "<h1>Корзина пуста</h1>";
                            }

                            foreach ($goodsInBasket as $goodInBasket){
                                printGoodsRow($goodInBasket);
                            }
                        ?>
                    </table>
                </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>
   </div>
</body>
</html>
    
    
