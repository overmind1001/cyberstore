<?php



/**
 * This class defines the structure of the 'catalog_div' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.cyberstore.map
 */
class CatalogDivTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'cyberstore.map.CatalogDivTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('catalog_div');
		$this->setPhpName('CatalogDiv');
		$this->setClassname('CatalogDiv');
		$this->setPackage('cyberstore');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 32, null);
		$this->addForeignKey('PARENT_CATALOG_DIV_ID', 'ParentCatalogDivId', 'INTEGER', 'catalog_div', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CatalogDivRelatedByParentCatalogDivId', 'CatalogDiv', RelationMap::MANY_TO_ONE, array('parent_catalog_div_id' => 'id', ), 'SET NULL', 'SET NULL');
    $this->addRelation('CatalogDivRelatedById', 'CatalogDiv', RelationMap::ONE_TO_MANY, array('id' => 'parent_catalog_div_id', ), 'SET NULL', 'SET NULL');
	} // buildRelations()

} // CatalogDivTableMap
