<?php



/**
 * Skeleton subclass for representing a row from the 'catalog_div' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class CatalogDiv extends BaseCatalogDiv {

	public function __construct($name="", $parentDivId=NULL)
	{
		parent::__construct();
		$this->setName($name);
		$this->setParentCatalogDivId($parentDivId);
	}
	
} // CatalogDiv
