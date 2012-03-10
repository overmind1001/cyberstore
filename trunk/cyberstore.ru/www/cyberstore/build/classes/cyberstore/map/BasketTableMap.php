<?php



/**
 * This class defines the structure of the 'basket' table.
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
class BasketTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'cyberstore.map.BasketTableMap';

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
		$this->setName('basket');
		$this->setPhpName('Basket');
		$this->setClassname('Basket');
		$this->setPackage('cyberstore');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', false, null, 0);
		$this->addColumn('SESSION_ID', 'SessionId', 'VARCHAR', true, 32, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'SET NULL', 'SET NULL');
    $this->addRelation('GoodInBasket', 'GoodInBasket', RelationMap::ONE_TO_MANY, array('id' => 'basket_id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

} // BasketTableMap
