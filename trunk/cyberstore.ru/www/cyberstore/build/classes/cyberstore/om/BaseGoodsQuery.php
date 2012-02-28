<?php


/**
 * Base class that represents a query for the 'goods' table.
 *
 * 
 *
 * @method     GoodsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GoodsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     GoodsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     GoodsQuery orderByPriceCurrent($order = Criteria::ASC) Order by the price_current column
 * @method     GoodsQuery orderByCount($order = Criteria::ASC) Order by the count column
 * @method     GoodsQuery orderByPictureId($order = Criteria::ASC) Order by the picture_id column
 * @method     GoodsQuery orderByCatalogId($order = Criteria::ASC) Order by the catalog_id column
 *
 * @method     GoodsQuery groupById() Group by the id column
 * @method     GoodsQuery groupByName() Group by the name column
 * @method     GoodsQuery groupByDescription() Group by the description column
 * @method     GoodsQuery groupByPriceCurrent() Group by the price_current column
 * @method     GoodsQuery groupByCount() Group by the count column
 * @method     GoodsQuery groupByPictureId() Group by the picture_id column
 * @method     GoodsQuery groupByCatalogId() Group by the catalog_id column
 *
 * @method     GoodsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GoodsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GoodsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GoodsQuery leftJoinFeedback($relationAlias = null) Adds a LEFT JOIN clause to the query using the Feedback relation
 * @method     GoodsQuery rightJoinFeedback($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Feedback relation
 * @method     GoodsQuery innerJoinFeedback($relationAlias = null) Adds a INNER JOIN clause to the query using the Feedback relation
 *
 * @method     GoodsQuery leftJoinGoodInBasket($relationAlias = null) Adds a LEFT JOIN clause to the query using the GoodInBasket relation
 * @method     GoodsQuery rightJoinGoodInBasket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GoodInBasket relation
 * @method     GoodsQuery innerJoinGoodInBasket($relationAlias = null) Adds a INNER JOIN clause to the query using the GoodInBasket relation
 *
 * @method     GoodsQuery leftJoinGoodsInSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the GoodsInSale relation
 * @method     GoodsQuery rightJoinGoodsInSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GoodsInSale relation
 * @method     GoodsQuery innerJoinGoodsInSale($relationAlias = null) Adds a INNER JOIN clause to the query using the GoodsInSale relation
 *
 * @method     Goods findOne(PropelPDO $con = null) Return the first Goods matching the query
 * @method     Goods findOneOrCreate(PropelPDO $con = null) Return the first Goods matching the query, or a new Goods object populated from the query conditions when no match is found
 *
 * @method     Goods findOneById(int $id) Return the first Goods filtered by the id column
 * @method     Goods findOneByName(string $name) Return the first Goods filtered by the name column
 * @method     Goods findOneByDescription(string $description) Return the first Goods filtered by the description column
 * @method     Goods findOneByPriceCurrent(double $price_current) Return the first Goods filtered by the price_current column
 * @method     Goods findOneByCount(int $count) Return the first Goods filtered by the count column
 * @method     Goods findOneByPictureId(int $picture_id) Return the first Goods filtered by the picture_id column
 * @method     Goods findOneByCatalogId(int $catalog_id) Return the first Goods filtered by the catalog_id column
 *
 * @method     array findById(int $id) Return Goods objects filtered by the id column
 * @method     array findByName(string $name) Return Goods objects filtered by the name column
 * @method     array findByDescription(string $description) Return Goods objects filtered by the description column
 * @method     array findByPriceCurrent(double $price_current) Return Goods objects filtered by the price_current column
 * @method     array findByCount(int $count) Return Goods objects filtered by the count column
 * @method     array findByPictureId(int $picture_id) Return Goods objects filtered by the picture_id column
 * @method     array findByCatalogId(int $catalog_id) Return Goods objects filtered by the catalog_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseGoodsQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGoodsQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'Goods', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GoodsQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GoodsQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GoodsQuery) {
			return $criteria;
		}
		$query = new GoodsQuery();
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
	 * @return    Goods|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GoodsPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GoodsPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GoodsPeer::ID, $keys, Criteria::IN);
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
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GoodsPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GoodsPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GoodsPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the price_current column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPriceCurrent(1234); // WHERE price_current = 1234
	 * $query->filterByPriceCurrent(array(12, 34)); // WHERE price_current IN (12, 34)
	 * $query->filterByPriceCurrent(array('min' => 12)); // WHERE price_current > 12
	 * </code>
	 *
	 * @param     mixed $priceCurrent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByPriceCurrent($priceCurrent = null, $comparison = null)
	{
		if (is_array($priceCurrent)) {
			$useMinMax = false;
			if (isset($priceCurrent['min'])) {
				$this->addUsingAlias(GoodsPeer::PRICE_CURRENT, $priceCurrent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($priceCurrent['max'])) {
				$this->addUsingAlias(GoodsPeer::PRICE_CURRENT, $priceCurrent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsPeer::PRICE_CURRENT, $priceCurrent, $comparison);
	}

	/**
	 * Filter the query on the count column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCount(1234); // WHERE count = 1234
	 * $query->filterByCount(array(12, 34)); // WHERE count IN (12, 34)
	 * $query->filterByCount(array('min' => 12)); // WHERE count > 12
	 * </code>
	 *
	 * @param     mixed $count The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByCount($count = null, $comparison = null)
	{
		if (is_array($count)) {
			$useMinMax = false;
			if (isset($count['min'])) {
				$this->addUsingAlias(GoodsPeer::COUNT, $count['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($count['max'])) {
				$this->addUsingAlias(GoodsPeer::COUNT, $count['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsPeer::COUNT, $count, $comparison);
	}

	/**
	 * Filter the query on the picture_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPictureId(1234); // WHERE picture_id = 1234
	 * $query->filterByPictureId(array(12, 34)); // WHERE picture_id IN (12, 34)
	 * $query->filterByPictureId(array('min' => 12)); // WHERE picture_id > 12
	 * </code>
	 *
	 * @param     mixed $pictureId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByPictureId($pictureId = null, $comparison = null)
	{
		if (is_array($pictureId)) {
			$useMinMax = false;
			if (isset($pictureId['min'])) {
				$this->addUsingAlias(GoodsPeer::PICTURE_ID, $pictureId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pictureId['max'])) {
				$this->addUsingAlias(GoodsPeer::PICTURE_ID, $pictureId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsPeer::PICTURE_ID, $pictureId, $comparison);
	}

	/**
	 * Filter the query on the catalog_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCatalogId(1234); // WHERE catalog_id = 1234
	 * $query->filterByCatalogId(array(12, 34)); // WHERE catalog_id IN (12, 34)
	 * $query->filterByCatalogId(array('min' => 12)); // WHERE catalog_id > 12
	 * </code>
	 *
	 * @param     mixed $catalogId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByCatalogId($catalogId = null, $comparison = null)
	{
		if (is_array($catalogId)) {
			$useMinMax = false;
			if (isset($catalogId['min'])) {
				$this->addUsingAlias(GoodsPeer::CATALOG_ID, $catalogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($catalogId['max'])) {
				$this->addUsingAlias(GoodsPeer::CATALOG_ID, $catalogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsPeer::CATALOG_ID, $catalogId, $comparison);
	}

	/**
	 * Filter the query by a related Feedback object
	 *
	 * @param     Feedback $feedback  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByFeedback($feedback, $comparison = null)
	{
		if ($feedback instanceof Feedback) {
			return $this
				->addUsingAlias(GoodsPeer::ID, $feedback->getGoodId(), $comparison);
		} elseif ($feedback instanceof PropelCollection) {
			return $this
				->useFeedbackQuery()
					->filterByPrimaryKeys($feedback->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByFeedback() only accepts arguments of type Feedback or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Feedback relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function joinFeedback($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Feedback');
		
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
			$this->addJoinObject($join, 'Feedback');
		}
		
		return $this;
	}

	/**
	 * Use the Feedback relation Feedback object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    FeedbackQuery A secondary query class using the current class as primary query
	 */
	public function useFeedbackQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinFeedback($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Feedback', 'FeedbackQuery');
	}

	/**
	 * Filter the query by a related GoodInBasket object
	 *
	 * @param     GoodInBasket $goodInBasket  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByGoodInBasket($goodInBasket, $comparison = null)
	{
		if ($goodInBasket instanceof GoodInBasket) {
			return $this
				->addUsingAlias(GoodsPeer::ID, $goodInBasket->getGoodId(), $comparison);
		} elseif ($goodInBasket instanceof PropelCollection) {
			return $this
				->useGoodInBasketQuery()
					->filterByPrimaryKeys($goodInBasket->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByGoodInBasket() only accepts arguments of type GoodInBasket or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the GoodInBasket relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function joinGoodInBasket($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('GoodInBasket');
		
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
			$this->addJoinObject($join, 'GoodInBasket');
		}
		
		return $this;
	}

	/**
	 * Use the GoodInBasket relation GoodInBasket object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodInBasketQuery A secondary query class using the current class as primary query
	 */
	public function useGoodInBasketQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGoodInBasket($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GoodInBasket', 'GoodInBasketQuery');
	}

	/**
	 * Filter the query by a related GoodsInSale object
	 *
	 * @param     GoodsInSale $goodsInSale  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function filterByGoodsInSale($goodsInSale, $comparison = null)
	{
		if ($goodsInSale instanceof GoodsInSale) {
			return $this
				->addUsingAlias(GoodsPeer::ID, $goodsInSale->getGoodId(), $comparison);
		} elseif ($goodsInSale instanceof PropelCollection) {
			return $this
				->useGoodsInSaleQuery()
					->filterByPrimaryKeys($goodsInSale->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByGoodsInSale() only accepts arguments of type GoodsInSale or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the GoodsInSale relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function joinGoodsInSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('GoodsInSale');
		
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
			$this->addJoinObject($join, 'GoodsInSale');
		}
		
		return $this;
	}

	/**
	 * Use the GoodsInSale relation GoodsInSale object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodsInSaleQuery A secondary query class using the current class as primary query
	 */
	public function useGoodsInSaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGoodsInSale($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'GoodsInSale', 'GoodsInSaleQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Goods $goods Object to remove from the list of results
	 *
	 * @return    GoodsQuery The current query, for fluid interface
	 */
	public function prune($goods = null)
	{
		if ($goods) {
			$this->addUsingAlias(GoodsPeer::ID, $goods->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGoodsQuery
