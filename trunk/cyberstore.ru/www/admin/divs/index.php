<!DOCTYPE html> 
<html> 
    <head> 
	<title>Разделы</title> 
        
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script src="jquery.treeview.js"></script>
        
        <style>
            /** {
                    margin: 0;
                    padding: 0;}*/
            html {
                    height: 100%;}
            body {
                    font: 12px/18px Arial, Tahoma, Verdana, sans-serif;
                    width: 100%;
                    height: 100%;}
            p {
                    margin: 0 0 18px}
            #wrapper {     
                    width: 1000px;
                    margin: 0 auto;
                    min-height: 100%;
                    height: auto !important;
                    height: 100%;}
            /* Header
            -----------------------------------------------------------------------------*/
            #header {
                    height: 50px;
                    background: black;
                    border-radius: 20px;
                    border: grey solid;}
            #header:hover h1 {
                    color: yellow;}
            #header h1  {
                    text-align: center;
                    padding-top: 0px;
                   
                    color: white;
                    font-family: Arial;}
            /* Middle
            -----------------------------------------------------------------------------*/
            #content {
                    /*margin: 20px;*/
                    padding: 0 0 40px;}
            /* Footer
            -----------------------------------------------------------------------------*/
            #footer {
                    width: 1000px;
                    margin: -70px auto 0;
                    height: 50px;
                    background: black;
                    position: relative;
                    border-radius: 20px;}
            #footer h1  {
                    text-align: center;
                    padding-top: 15px;
                    color: white;
                    font-family: Arial;}
            #footer:hover h1 {
                    color: yellow;}
        </style>
        
</script>
        <script>
            $(function(){
                $("input:button").button();
                $("ul.treeview").treeview({
                    animated: "slow",
                    persist: "location",
                    collapsed: false,
                    unique: true
                });
            })
        </script>
    </head> 
    <body>

<div id="wrapper">
    <div id="header" data-role="header">
        <h1>Разделы</h1>
    </div><!-- /header -->
    <div id="content" data-role="content">	
        <!--center-->
        <!--Put your content here  -->
        

<form>
    <table>
        <tr><!--Лист-->
            <ul class="treeview">
                <?php
                    function printAddEditDel($div_id) {
                        echo "<span style='margin: 3px 3px 3px 20px; font-size:0.7em;'><a href='formAddDiv.php?div_id=$div_id'>Add</a></span>";
                        echo "<span style='margin: 3px; font-size:0.7em;'><a href='formEditDiv.php?div_id=$div_id'>Edit</a></span>";
                        echo "<span style='margin: 3px; font-size:0.7em;'><a href='deleteDiv.php?div_id=$div_id'>Delete</a></span>";             
                    }
                    function printElement($div) {
                        //$div1 = new CatalogDiv();
                        if($div->countCatalogDivsRelatedById()==0) {//нет детей
                            echo "<li><span class=\"file\">";
                            echo $div->getName();printAddEditDel($div->getId());
                            echo "</span></li>";
                        }   
                        else    {//есть дети
                            echo "<li><span class=\"folder\" style='cursor:pointer;'>";
                            echo $div->getName();printAddEditDel($div->getId());
                            echo "</span>";
                            $subdivs=$div->getCatalogDivsRelatedById();
                            echo "<ul>";
                            foreach ($subdivs as $subdiv) {
                                printElement($subdiv);
                            }	
                            echo "</ul>";
                            echo "</li>";
                        }
                    }
                        
                    include_once '../../initPropel.php';
                    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
                    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
                    //получаем разделы первого уровня
                    $divs=CatalogDivQuery::create()->findByParentCatalogDivId(NULL);
                    $root=$divs[0];
                    printElement($root);
                ?>
            </ul>   
        </tr>
        
        
    </table>
</form>
<div style="padding: 20px;">
    <a href="../index.php">В админку</a>
</div>

<?php
    include '../adminFoot.php';
?>