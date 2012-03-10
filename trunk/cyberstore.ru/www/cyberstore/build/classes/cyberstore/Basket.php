<?php



/**
 * Skeleton subclass for representing a row from the 'basket' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class Basket extends BaseBasket {

	public function __construct($ssid = '', $userId = '')
	{
		parent::__construct();
		$this->setUserId($userId);
		$this->setSessionId($ssid);
	}

} // Basket
