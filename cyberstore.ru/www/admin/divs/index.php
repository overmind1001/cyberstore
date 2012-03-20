<?php
    include '../protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }
    include '../adminHead.php';
    $name="Разделы";
    $script="$(function(){
                $(\"input:button\").button();
                $(\"ul.treeview\").treeview({
                    animated: \"slow\",
                    persist: \"location\",
                    collapsed: false
                });
            })";
    generateHead($name, $name,$script,"<script src='jquery.treeview.js'></script>");
?>


<form>
    <table>
        <tr>
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
<center>
<div style="padding: 20px;">
    <a href="../">В админку</a>
</div>
</center>

<?php
    include '../adminFoot.php';
?>