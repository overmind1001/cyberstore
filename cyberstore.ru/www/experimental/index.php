<!DOCTYPE html>
<html>
    <head>
        <title>CyberStore - всё для киборгов</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
        <script src="catalog.js"></script>
        <style>
            .ui-page
            {
            min-height:100%;
            height:100%;
            background:white;
            }
            .ui-content
            {
            background:#eee;
            }
            .ui-footer
            {
            width:900px;
            }
            body
            {
            height:100%;
            min-height:100%;
            }
            #mainpage
            {
            height:100%;
            min-height:100%;
            }
            #wrapper
            {
            background:white;
            height:auto !important;
            margin-bottom:0;
            margin-left:auto;
            margin-right:auto;
            margin-top:0;
            min-height:100%;
            width:900px;
            }
            #my_footer {
            width: 1000px;
            margin: -50px auto 0;
            height: 50px;
            background: black;
            position: relative;
            border-radius: 20px;}
            #my_footer h1  {
            text-align: center;
            padding-top: 15px;
            color: white;
            font-family: Arial;
            }
            #my_footer:hover h1
            {
            color: yellow;
            }
        </style>
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
                    <table padding="0" margin="0" border="0" width="100%">
                        <tr>
                        <td rowspan="2" style="width:30%;">
                            <img src="logo.gif">
                            </td>
                            <td valign="top" align="right">
                                <a href="#" data-role="button" data-inline="true">Корзина: 0 товаров на 0 руб.</a>
                                <a href="#" data-role="button" data-inline="true">Вход</a>
                            </td>
                        </tr>
                        <tr>
                            <td valign="bottom">
                                <div data-role="navbar">
                                    <ul>
                                    <li>
                                        <a href="#" class="ui-btn-active">Главная</a>
                                    </li>
                                    <li>
                                        <a href="./catalog.php">Каталог</a>
                                    </li>
                                    <li>
                                        <a href="#">Помощь</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </table>
                    </div>
                    <!-- /header -->
                    
                    <div data-role="content">
                        <?
                        for ($i=0; $i < 10; $i++)
                            echo "<p>Hello world</p>";
                                ?>
                                    <p>Hello world</p>
                                    </div>
                                    <!-- /content -->

    <!--div data-role="footer" data-position="fixed" data-theme="c">
        copyright
    </div-->

</div><!-- /page -->
<div data-role="footer">
    <h1>Админка</h1>
</div><!-- #footer -->
</div><!-- /wrapper-->
</body>
</html>