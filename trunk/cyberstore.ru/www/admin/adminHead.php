<!DOCTYPE html>
<?php
    function printTitle($title) {
        echo "<title>"; echo $title ; echo "</title>";
    }
?>

<?php
    function printLinks($additional) {
?>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../admin_style.css" rel="stylesheet" type="text/css"/>
        <link href="admin_style.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<?php
        echo $additional;
}
?>
<?php
function printScript($script) {
    
    if($script=="default"){
?>
        <script>
        $(function(){
                $("input:button,input:submit,input:reset").button();
            })
        </script>
<?php
    }
    else{
        echo "<script>";
        echo $script;
        echo "</script>";
    }
}
?>


<?php 
    function generateHead($title,$headerText,$script,$additionalLinks) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--DOCTYPE html--> 
<html> 
    <head> 
<?php
        printTitle($title);
        printLinks($additionalLinks); 
        printScript($script);
?>
    </head> 
    <body>

<div id="wrapper">
    <div id="header" data-role="header">
        
        <h1><?php echo $headerText; ?></h1>
    </div><!-- /header -->
    <div id="content" data-role="content">	
<?php
}
?>
