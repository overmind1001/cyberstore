<?

$categories = CatalogDivQuery::create()->find();

echo '<div data-role="collapsible-set" data-theme="c" data-content-theme="d">';
foreach ($categories as $category) {
	if ($category->getParentCatalogDivId() == null) {
		echo '<div data-role="collapsible">';
		echo '<h3>'.$category->getName().'</h3>';
		if ($category->countCatalogDivsRelatedById() > 0) {
			$subcatalogs = $category->getCatalogDivsRelatedById();
			foreach ($subcatalogs as $subcategory) {
				echo '<ul data-role="listview">';
				echo '<li><a href="#">'.$subcategory->getName().'</a></li>';
				echo '</ul>';
			}
		}
		echo '</div>';
	}
}
echo '</div>';

?>