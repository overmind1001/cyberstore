<?php
function printSideLeft($activeLink) {
    print "<div id=\"sideLeft\">";
    print "    <ul>";
    if($activeLink=="main")
    {
        print "     <li>Главная</li>";
    }
    else
    {
        print "	<li><a data-transition=\"none\" href=\"./../index.php\">Главная</a></li>";
    }
    print "	<li>Новости</li>";
    
    if($activeLink=="catalog")
    {
        print "	<li>Каталог</li>";
    }
    else 
    {
        print "	<li><a data-transition=\"none\" href=\"./catalog/index.php\">Каталог</a></li>";
    }
    
    print "    </ul>";
    print "</div>";
}

?>
