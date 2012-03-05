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

	/**
     * @return Строковое JSON-представление товара
     * Поля:
     * - name
     * - description
     * - priceCurrent
     * - count
     * - picture
     * - catalogId
     */
    public function toJSON()
    {
        $pid = $this->getPictureId();
        $result = '{';
        $result .= '"name":"'.$this->getName().'",';
        $result .= '"description":"'.$this->getDescription().'",';
        $result .= '"priceCurrent":'.$this->getPriceCurrent().',';
        $result .= '"count":'.$this->getCount().',';
        if ($pid != null)
            $result .= '"picture":'.$this->getPictureId().',';
        $result .= '"catalogId":'.$this->getCatalogId();
        $result .= '}';
        return $result;
    }

} // Goods
