<?

$rootc = CatalogDivQuery::create()->findOneByName("root");
$categories = $rootc->getCatalogDivsRelatedById();
   
echo '<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-mini="true">';
foreach ($categories as $category)
{
    if ($category->getParentCatalogDivId() == $rootc->getId()) {
        echo '<div data-role="collapsible">';
        echo '<h3>'.trim($category->getName()).'</h3>';
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

?>