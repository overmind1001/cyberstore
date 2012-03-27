<?php



/**
 * Skeleton subclass for representing a row from the 'sales' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class Sales extends BaseSales {

	public function __construct($date=NULL, $userId=NULL) {
		parent::__construct();
		$this->setDate($date);
		$this->setUserId($userId);		
	}
	
} // Sales
