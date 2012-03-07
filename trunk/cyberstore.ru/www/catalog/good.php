<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - всё для киборгов</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <script src="./../jquery-1.6.4.min.js"></script>
        <script src="./../jquery.mobile-1.0.1.min.js"></script>
        <link rel="stylesheet" href="./../main.css" />
    </head>

<!--
<?
    require_once './../vendor/propel/runtime/lib/Propel.php';
    Propel::init("./../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("./../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());

    $gid = $_GET["goodId"];

    if ($gid != null) {
        $good = GoodsQuery::create()->findOneById($gid);
        if($good->getPictureId() != NULL){
            $picture_path = './../pictures/'.$good->getPictureId().'.jpg';
        } else {
            $picture_path='./../0a.jpg';
        }
    }
?>
-->
<body>
    <div id="wrapper">
        <div id="mainpage">
            <div data-role="header" data-theme="c">
                <table style="background:url('./../logo.png');" padding="0" margin="0" border="0px" width="100%">
                    <tr>
                        <td rowspan="2" style="width:35%; height:130px;">
                            <!--img src="logo.gif"-->
                        </td>
                        <td valign="top" align="right">
                            <!--a href="#" data-role="button" data-inline="true">Вход</a-->
                        </td>
                    </tr>
                        <td align="right" valign="bottom">
                            <!--a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 квазибит</a-->
                        </td>
                    <tr>
                </table>
                <div data-role="header" align="center">
                    <h1>Просмотр товара</h1>
                    <a href="#" onclick="window.close();" data-role="button" data-theme="b">Закрыть окно</a>
                </div>
            </div><!-- /header -->
            <div data-role="content">
            <h1 align="center">
<?
    echo $good->getName();
?>
            </h1>
            
            <img src="<?echo $picture_path;?>" align="left" width="350px" height="350px" style="margin-right:15px;"></img>
<?
    echo $good->getDescription();
?>
            </div><!-- /content -->

            <div data-role="footer">
                <h1>© ДаЁжСофт</h1>
            </div><!-- /footer -->

        </div><!-- /mainpage -->
    </div><!-- /wrapper-->
</body>
</html>