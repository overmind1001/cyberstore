<?php



/**
 * This class defines the structure of the 'goods_in_sale' table.
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
class GoodsInSaleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'cyberstore.map.GoodsInSaleTableMap';

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
		$this->setName('goods_in_sale');
		$this->setPhpName('GoodsInSale');
		$this->setClassname('GoodsInSale');
		$this->setPackage('cyberstore');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('PRICE', 'Price', 'FLOAT', true, null, null);
		$this->addColumn('COUNT', 'Count', 'INTEGER', true, null, null);
		$this->addColumn('SALE_ID', 'SaleId', 'INTEGER', true, null, null);
		$this->addColumn('GOOD_ID', 'GoodId', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // GoodsInSaleTableMap
