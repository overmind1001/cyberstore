<?php



/**
 * Skeleton subclass for representing a row from the 'good_in_basket' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class GoodInBasket extends BaseGoodInBasket {

	public function __construct($count = 0, $goodId = 0, $basketId = 0) 
	{
		parent::__construct();
		$this->setCount($count);
		$this->setGoodId($goodId);
		$this->setBasketId($basketId);		
	}

} // GoodInBasket
