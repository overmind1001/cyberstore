<?php
    include_once '../findBasket.php';
    $basket = findBasket();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - всё для киборгов</title>

        <link type="text/css" href="../css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.8.18.custom.min.js"></script>

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <script src="../jquery.mobile-1.0.1.min.js"></script>

        <script src="../catalog/catalog.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <script>
            $(function(){
                $.mobile.defaultPageTransition = "fade";
                $.mobile.ajaxLinksEnabled = false;

                $( 'div' ).live( 'pageshow', function(event, ui){
                    $('#accordion').accordion();
                    $('#accordion').css('width','200px');
                    $('#accordion').css('margin','10px');
                    $('.ui-accordion-content').css('padding-top','5px');
                    $('.ui-accordion-content').css('padding-bottom','5px');
                    $('.ui-accordion-content').css('padding-left','15px');
                    $('.ui-accordion-content').css('padding-right','15px');
                    updateBasketInfo_s();
                });

            });
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="mainpage">
                <div data-role="header" data-theme="c">
                    <table style="background:url('./logo.png');" padding="0" margin="0" border="0px" width="100%">
                        <tr>
                        <td rowspan="2" style="width:35%; height:130px;">
                            <!--img src="logo.gif"-->
                            </td>
                            <td valign="top" align="right">
                                <a href="./login/" data-role="button" data-inline="true">Вход</a>
                            </td>
                        </tr>
                            <td align="right" valign="bottom">
                                <!--a id="basket" href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 квазибит</a-->
                            </td>
                        <tr>
                        </td>
                    </table>
                            <div data-role="navbar" >
                                <ul>
                                <li>
                                    <a id="link1" href="#" data-theme="a">Главная</a>
                                </li>
                                <li>
                                    <a id="link2" href="" onclick="$.mobile.changePage('./catalog/index.php'); $('#link2').addClass('ui-btn-active'); $('#link1').removeClass('ui-btn-active');" data-theme="a">Каталог</a>
                                </li>
                                <li>
                                    <a href="#" data-theme="a">Корзина</a>
                                </li>
                                <li>
                                    <a href="#" data-theme="a">Помощь</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /header -->
                    
                    <div data-role="content">
                        <p>
                            <?php 
                                if($basket==NULL) {
                                    echo "Корзина = NULL";
                                }
                                else {
                                    echo " Сессия: ".$basket->getSessionId(). " Корзина: ".$basket->getId()." ";
                                    $user_id = $basket->getUserId();
                                    $user = UserQuery::create()->findOneById($user_id);
                                    if($user==NULL){
                                        echo "Пользователь=NULL";
                                    }
                                    else {
                                        echo "Пользователь: ".$user->getLogin();
                                    }
                                }
                            ?>
                        </p>
                        
                        <table  class="startTable">
                            <?php
                                
                                function printRow($good) {
                                    $name=$good->getname();
                                    $description=$good->getDescription();
                                    $price=$good->getPriceCurrent();
                                    
                                    if($good->getPictureId()!=NULL){
                                        $picture_path = './pictures/'."m".$good->getPictureId().'.jpg';
                                    }
                                    else{
                                        $picture_path='./pictures/m0.jpg';
                                    }
                                    
                                    echo "<tr>";
                                    
                                    echo "
                                    <td class='pic'>
                                        <table style='align: center;'>
                                            <tr><td class='mainLeft'><img src='$picture_path'> </td></tr>
                                            <tr><td class='mainLeft'>$name </td></tr>
                                            <tr><td class='mainLeft'>Цена: $price квазибит</td></tr>
                                        </table>
                                    </td>
                                    <td class='descr'>$description</td>";
                                    
                                    echo '</tr>';
                                }
                                
                                $goods=GoodsQuery::create()->limit(3)->find();
                                foreach ($goods as $good) {
                                    printRow($good);
                                }
                            ?>
                        </table>
                    </div>
</div><!-- /page -->
<div data-role="footer">
    <h1>© ДаЁжСофт</h1>
</div><!-- #footer -->
</div><!-- /wrapper-->
</body>
</html>