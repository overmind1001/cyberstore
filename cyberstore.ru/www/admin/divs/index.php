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
                    padding-top: 15px;
                    color: white;
                    font-family: Arial;}
            /* Middle
            -----------------------------------------------------------------------------*/
            #content {
                    margin: 20px;
                    padding: 0 0 40px;}
            /* Footer
            -----------------------------------------------------------------------------*/
            #footer {
                    width: 1000px;
                    margin: -50px auto 0;
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
                    collapsed: true,
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
            <li><span class="folder">root</span>
                <ul>
                    <?php
                        include_once '../../initPropel.php';
                        Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
                        set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());

                        $divs=CatalogDivQuery::create()->findByParentCatalogDivId(NULL);

                    ?>
                </ul>
            </li>
        </ul>  
        <ul class="treeview">
		
		<li class="closed"><span class="folder">Folder 2</span>
			<ul>
				<li><span class="folder">Subfolder 2.1</span>
					<ul id="folder21">
						<li><span class="file">File 2.1.1</span></li>
						<li><span class="file">File 2.1.2</span></li>
						<li><span class="file">File 2.1.3</span></li>
						<li><span class="file">File 2.1.4</span></li>
						<li><span class="file">File 2.1.5</span></li>
						<li><span class="file">File 2.1.6</span></li>
						<li><span class="file">File 2.1.7</span></li>
					</ul>
				</li>
				<li><span class="file">File 2.2</span></li>
			</ul>
		</li>
		
	</ul>
        
            
            
            
        </tr>
        
        <tr><!--Кнопки-->
            <td>
                <input name="btnAdd" type="button" value="Добавить раздел" onClick="window.location = 'div_partAdd.php';"/>
            </td>
            <td>
                <input name="btnEdit" type="button" value="Редактировать раздел" onClick="window.location = 'div_partAdd.php';" />
            </td>
            <td>
                <input name="btnDelete" type="button" value="Удалить раздел" />
            </td>
        </tr>
    </table>
</form>
<div>
    <a href="adminMain.php">В админку</a>
</div>

<?php
    include '../adminFoot.php';
?>