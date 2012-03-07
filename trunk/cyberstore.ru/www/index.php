<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - всё для киборгов</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <script src="jquery-1.6.4.min.js"></script>
        <script src="jquery.mobile-1.0.1.min.js"></script>
        <script src="./catalog/catalog.js"></script>
        <link rel="stylesheet" href="main.css" />
        <script>
            $(function(){
                $.mobile.defaultPageTransition = "fade";
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
                                <a href="#" data-role="button" data-inline="true">Вход</a>
                            </td>
                        </tr>
                            <td align="right" valign="bottom">
                                <a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 руб.</a>
                            </td>
                        <tr>
                        </td>
                    </table>
                            <div data-role="navbar" >
                                <ul>
                                <li>
                                    <a href="#" class="ui-btn-active" data-theme="a">Главная</a>
                                </li>
                                <li>
                                    <a href="./catalog/" data-theme="a">Каталог</a>
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
                        <p>Hello world</p>
                        
                        <table  class="startTable">
                            <!--tr>
                                <td>Изображение</td><td>Название</td><td>Описание</td>
                            </tr-->
                            <?php
                                include_once 'propel.inc.php';
                                
                                function printRow($good) {
                                    $name=$good->getname();
                                    $description=$good->getDescription();
                                    $price=$good->getPriceCurrent();
                                    
                                    if($good->getPictureId()!=NULL){
                                        $picture_path = './pictures/'."m".$good->getPictureId().'.jpg';
                                    }
                                    else{
                                        $picture_path='0a.jpg';
                                    }
                                    
                                    echo "<tr>";
                                    
                                    echo "
                                    <td class='pic' style='max-width:100px;'>
                                        <table style='align: center;'>
                                            <tr><td style='align:center;'><img src='$picture_path'> </td></tr>
                                            <tr><td style='align:center;'>$name </td></tr>
                                            <tr><td style='align:center;'>$price </td></tr>
                                        </table>
                                    </td>
                                    <td >$description</td>";
                                    
                                    echo '</tr>';
                                }
                                
                                $goods=GoodsQuery::create()->limit(3)->find();
                                foreach ($goods as $good) {
                                    printRow($good);
                                }
                            ?>
                        </table>
                    </div>
                                    <!-- /content -->

    <!--div data-role="footer" data-position="fixed" data-theme="c">
        copyright
    </div-->

</div><!-- /page -->
<div data-role="footer">
    <h1>© ДаЁжСофт</h1>
</div><!-- #footer -->
</div><!-- /wrapper-->
</body>
</html>