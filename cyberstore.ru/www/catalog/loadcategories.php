<?

include_once './../propel.inc.php';

$rootc = CatalogDivQuery::create()->findOneByName("root");
$categories = $rootc->getCatalogDivsRelatedById();
   
echo '<div id="accordion" data-theme="c" data-content-theme="d" data-mini="true" style="width=100px">';
foreach ($categories as $category)
{
    if ($category->getParentCatalogDivId() == $rootc->getId()) {
        echo '<h3><a href="#" >'.trim($category->getName()).'</a></h3>';
        echo '<div>';
        if ($category->countCatalogDivsRelatedById() > 0) {
            $subcatalogs = $category->getCatalogDivsRelatedById();
            echo '<div id="topcategory'.$category->getId().'" data-role="controlgroup" data-mini="true">';
            foreach ($subcatalogs as $subcategory) {
                $cid = $subcategory->getId();
                echo '<li><a href="#" id="category'
                        .$cid.'" data-role="button" onclick="categoryClicked('
                        .$cid.');">'
                        .trim($subcategory->getName()).'</a></li>';
            }
            echo '</div>';
        }
        echo '</div>';
    }
}
echo '</div>';
echo '<script>';
echo '$("accordion").accordion();';
echo '</script>';

?>