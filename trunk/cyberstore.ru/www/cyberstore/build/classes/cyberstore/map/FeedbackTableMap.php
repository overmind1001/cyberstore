<?php



/**
 * This class defines the structure of the 'feedback' table.
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
class FeedbackTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'cyberstore.map.FeedbackTableMap';

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
		$this->setName('feedback');
		$this->setPhpName('Feedback');
		$this->setClassname('Feedback');
		$this->setPackage('cyberstore');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('TEXT', 'Text', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DATE', 'Date', 'DATE', true, null, null);
		$this->addColumn('MARK', 'Mark', 'INTEGER', false, null, null);
		$this->addForeignKey('GOOD_ID', 'GoodId', 'INTEGER', 'goods', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Goods', 'Goods', RelationMap::MANY_TO_ONE, array('good_id' => 'id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

} // FeedbackTableMap
