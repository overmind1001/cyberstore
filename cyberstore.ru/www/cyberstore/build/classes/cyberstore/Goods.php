<?php



/**
 * Skeleton subclass for representing a row from the 'goods' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class Goods extends BaseGoods {

	public function __construct($name="", $description="", $priceCurrent=0,
							$count=0, $pictureId=NULL, $catalogId=NULL) 
	{
		parent::__construct();
		$this->setName($name);
		$this->setDescription($description);
		$this->setPriceCurrent($priceCurrent);
		$this->setCount($count);
		$this->setPictureId($pictureId);
		$this->setCatalogId($catalogId);
	}

} // Goods
