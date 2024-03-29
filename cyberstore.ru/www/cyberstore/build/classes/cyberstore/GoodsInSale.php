<?php



/**
 * Skeleton subclass for representing a row from the 'goods_in_sale' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class GoodsInSale extends BaseGoodsInSale {

	public function __construct($price=NULL, $count=NULL, $saleId=NULL, $goodId=NULL)
	{
		parent::__construct();
		$this->setPrice($price);
		$this->setCount($count);
		$this->setSaleId($saleId);
		$this->setGoodId($goodId);
	}
	
} // GoodsInSale
