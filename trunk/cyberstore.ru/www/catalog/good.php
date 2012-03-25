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
            $picture_path='./../pictures/0.jpg';
        }
    }
?>
-->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cyberstore - каталог</title>
    <link type="text/css" href="./../css/black-tie/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="./../js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="./catalog.js"></script>
    <script type="text/javascript" src="./../js/jquery-ui-1.8.18.custom.min.js"></script>
    <link href="./../style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrap">
        <div id="header">
            <div id="enter_exit">
                <?php $prefix = './..'; include './../userEnterExit.php'; ?>
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
                            <td><a href="./">Каталог</a></td>
                            <td><a href="../basket/">Корзина</a></td>
                            <td><a href="../about/">Помощь</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="content" style="">
        <h2><?echo $good->getName();?></h2>
        <img src="<?echo $picture_path;?>" align="left"/>
<?
    echo $good->getDescription();
?>
        </div>

        <div id="footer">
            <div id="credits">
                (с) ДаЁжСофт
            </div>
        </div>

</body>
</html>
