<?php


/**
 * Base class that represents a query for the 'feedback' table.
 *
 * 
 *
 * @method     FeedbackQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     FeedbackQuery orderByText($order = Criteria::ASC) Order by the text column
 * @method     FeedbackQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     FeedbackQuery orderByMark($order = Criteria::ASC) Order by the mark column
 * @method     FeedbackQuery orderByGoodId($order = Criteria::ASC) Order by the good_id column
 *
 * @method     FeedbackQuery groupById() Group by the id column
 * @method     FeedbackQuery groupByText() Group by the text column
 * @method     FeedbackQuery groupByDate() Group by the date column
 * @method     FeedbackQuery groupByMark() Group by the mark column
 * @method     FeedbackQuery groupByGoodId() Group by the good_id column
 *
 * @method     FeedbackQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     FeedbackQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     FeedbackQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     FeedbackQuery leftJoinGoods($relationAlias = null) Adds a LEFT JOIN clause to the query using the Goods relation
 * @method     FeedbackQuery rightJoinGoods($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Goods relation
 * @method     FeedbackQuery innerJoinGoods($relationAlias = null) Adds a INNER JOIN clause to the query using the Goods relation
 *
 * @method     Feedback findOne(PropelPDO $con = null) Return the first Feedback matching the query
 * @method     Feedback findOneOrCreate(PropelPDO $con = null) Return the first Feedback matching the query, or a new Feedback object populated from the query conditions when no match is found
 *
 * @method     Feedback findOneById(int $id) Return the first Feedback filtered by the id column
 * @method     Feedback findOneByText(string $text) Return the first Feedback filtered by the text column
 * @method     Feedback findOneByDate(string $date) Return the first Feedback filtered by the date column
 * @method     Feedback findOneByMark(int $mark) Return the first Feedback filtered by the mark column
 * @method     Feedback findOneByGoodId(int $good_id) Return the first Feedback filtered by the good_id column
 *
 * @method     array findById(int $id) Return Feedback objects filtered by the id column
 * @method     array findByText(string $text) Return Feedback objects filtered by the text column
 * @method     array findByDate(string $date) Return Feedback objects filtered by the date column
 * @method     array findByMark(int $mark) Return Feedback objects filtered by the mark column
 * @method     array findByGoodId(int $good_id) Return Feedback objects filtered by the good_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseFeedbackQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseFeedbackQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'Feedback', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new FeedbackQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    FeedbackQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof FeedbackQuery) {
			return $criteria;
		}
		$query = new FeedbackQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Feedback|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = FeedbackPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(FeedbackPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(FeedbackPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(FeedbackPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the text column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByText('fooValue');   // WHERE text = 'fooValue'
	 * $query->filterByText('%fooValue%'); // WHERE text LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $text The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByText($text = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($text)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $text)) {
				$text = str_replace('*', '%', $text);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(FeedbackPeer::TEXT, $text, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
	 * $query->filterByDate('now'); // WHERE date = '2011-03-14'
	 * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $date The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(FeedbackPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(FeedbackPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FeedbackPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the mark column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMark(1234); // WHERE mark = 1234
	 * $query->filterByMark(array(12, 34)); // WHERE mark IN (12, 34)
	 * $query->filterByMark(array('min' => 12)); // WHERE mark > 12
	 * </code>
	 *
	 * @param     mixed $mark The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByMark($mark = null, $comparison = null)
	{
		if (is_array($mark)) {
			$useMinMax = false;
			if (isset($mark['min'])) {
				$this->addUsingAlias(FeedbackPeer::MARK, $mark['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($mark['max'])) {
				$this->addUsingAlias(FeedbackPeer::MARK, $mark['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FeedbackPeer::MARK, $mark, $comparison);
	}

	/**
	 * Filter the query on the good_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByGoodId(1234); // WHERE good_id = 1234
	 * $query->filterByGoodId(array(12, 34)); // WHERE good_id IN (12, 34)
	 * $query->filterByGoodId(array('min' => 12)); // WHERE good_id > 12
	 * </code>
	 *
	 * @see       filterByGoods()
	 *
	 * @param     mixed $goodId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByGoodId($goodId = null, $comparison = null)
	{
		if (is_array($goodId)) {
			$useMinMax = false;
			if (isset($goodId['min'])) {
				$this->addUsingAlias(FeedbackPeer::GOOD_ID, $goodId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($goodId['max'])) {
				$this->addUsingAlias(FeedbackPeer::GOOD_ID, $goodId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(FeedbackPeer::GOOD_ID, $goodId, $comparison);
	}

	/**
	 * Filter the query by a related Goods object
	 *
	 * @param     Goods|PropelCollection $goods The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function filterByGoods($goods, $comparison = null)
	{
		if ($goods instanceof Goods) {
			return $this
				->addUsingAlias(FeedbackPeer::GOOD_ID, $goods->getId(), $comparison);
		} elseif ($goods instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(FeedbackPeer::GOOD_ID, $goods->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByGoods() only accepts arguments of type Goods or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Goods relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function joinGoods($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Goods');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Goods');
		}
		
		return $this;
	}

	/**
	 * Use the Goods relation Goods object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodsQuery A secondary query class using the current class as primary query
	 */
	public function useGoodsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGoods($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Goods', 'GoodsQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Feedback $feedback Object to remove from the list of results
	 *
	 * @return    FeedbackQuery The current query, for fluid interface
	 */
	public function prune($feedback = null)
	{
		if ($feedback) {
			$this->addUsingAlias(FeedbackPeer::ID, $feedback->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseFeedbackQuery
