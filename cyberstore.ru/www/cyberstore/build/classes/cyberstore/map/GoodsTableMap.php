<?php



/**
 * This class defines the structure of the 'goods' table.
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
class GoodsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'cyberstore.map.GoodsTableMap';

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
		$this->setName('goods');
		$this->setPhpName('Goods');
		$this->setClassname('Goods');
		$this->setPackage('cyberstore');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null, null);
		$this->addColumn('PRICE_CURRENT', 'PriceCurrent', 'FLOAT', true, null, null);
		$this->addColumn('COUNT', 'Count', 'INTEGER', true, null, null);
		$this->addColumn('PICTURE_ID', 'PictureId', 'INTEGER', false, null, null);
		$this->addColumn('CATALOG_ID', 'CatalogId', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GoodsTableMap
