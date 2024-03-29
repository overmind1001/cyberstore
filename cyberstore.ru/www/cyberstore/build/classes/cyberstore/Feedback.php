<?php



/**
 * Skeleton subclass for representing a row from the 'feedback' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class Feedback extends BaseFeedback {

	public function __construct($text, $date, $mark, $goodId)
	{
		parent::__construct();
		$this->setText($text);
		$this->setDate($date);
		$this->setMark($mark);
		$this->setGoodId($goodId);
	}

} // Feedback
