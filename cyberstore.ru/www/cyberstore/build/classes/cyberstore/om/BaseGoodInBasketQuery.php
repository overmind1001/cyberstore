<?php


/**
 * Base class that represents a query for the 'good_in_basket' table.
 *
 * 
 *
 * @method     GoodInBasketQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GoodInBasketQuery orderByCount($order = Criteria::ASC) Order by the count column
 * @method     GoodInBasketQuery orderByGoodId($order = Criteria::ASC) Order by the good_id column
 * @method     GoodInBasketQuery orderByBasketId($order = Criteria::ASC) Order by the basket_id column
 *
 * @method     GoodInBasketQuery groupById() Group by the id column
 * @method     GoodInBasketQuery groupByCount() Group by the count column
 * @method     GoodInBasketQuery groupByGoodId() Group by the good_id column
 * @method     GoodInBasketQuery groupByBasketId() Group by the basket_id column
 *
 * @method     GoodInBasketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GoodInBasketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GoodInBasketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GoodInBasketQuery leftJoinBasket($relationAlias = null) Adds a LEFT JOIN clause to the query using the Basket relation
 * @method     GoodInBasketQuery rightJoinBasket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Basket relation
 * @method     GoodInBasketQuery innerJoinBasket($relationAlias = null) Adds a INNER JOIN clause to the query using the Basket relation
 *
 * @method     GoodInBasketQuery leftJoinGoods($relationAlias = null) Adds a LEFT JOIN clause to the query using the Goods relation
 * @method     GoodInBasketQuery rightJoinGoods($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Goods relation
 * @method     GoodInBasketQuery innerJoinGoods($relationAlias = null) Adds a INNER JOIN clause to the query using the Goods relation
 *
 * @method     GoodInBasket findOne(PropelPDO $con = null) Return the first GoodInBasket matching the query
 * @method     GoodInBasket findOneOrCreate(PropelPDO $con = null) Return the first GoodInBasket matching the query, or a new GoodInBasket object populated from the query conditions when no match is found
 *
 * @method     GoodInBasket findOneById(int $id) Return the first GoodInBasket filtered by the id column
 * @method     GoodInBasket findOneByCount(int $count) Return the first GoodInBasket filtered by the count column
 * @method     GoodInBasket findOneByGoodId(int $good_id) Return the first GoodInBasket filtered by the good_id column
 * @method     GoodInBasket findOneByBasketId(int $basket_id) Return the first GoodInBasket filtered by the basket_id column
 *
 * @method     array findById(int $id) Return GoodInBasket objects filtered by the id column
 * @method     array findByCount(int $count) Return GoodInBasket objects filtered by the count column
 * @method     array findByGoodId(int $good_id) Return GoodInBasket objects filtered by the good_id column
 * @method     array findByBasketId(int $basket_id) Return GoodInBasket objects filtered by the basket_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseGoodInBasketQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGoodInBasketQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'GoodInBasket', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GoodInBasketQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GoodInBasketQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GoodInBasketQuery) {
			return $criteria;
		}
		$query = new GoodInBasketQuery();
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
	 * @return    GoodInBasket|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GoodInBasketPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GoodInBasketPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GoodInBasketPeer::ID, $keys, Criteria::IN);
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
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GoodInBasketPeer::ID, $id, $comparison);
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
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByCount($count = null, $comparison = null)
	{
		if (is_array($count)) {
			$useMinMax = false;
			if (isset($count['min'])) {
				$this->addUsingAlias(GoodInBasketPeer::COUNT, $count['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($count['max'])) {
				$this->addUsingAlias(GoodInBasketPeer::COUNT, $count['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodInBasketPeer::COUNT, $count, $comparison);
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
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByGoodId($goodId = null, $comparison = null)
	{
		if (is_array($goodId)) {
			$useMinMax = false;
			if (isset($goodId['min'])) {
				$this->addUsingAlias(GoodInBasketPeer::GOOD_ID, $goodId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($goodId['max'])) {
				$this->addUsingAlias(GoodInBasketPeer::GOOD_ID, $goodId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodInBasketPeer::GOOD_ID, $goodId, $comparison);
	}

	/**
	 * Filter the query on the basket_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByBasketId(1234); // WHERE basket_id = 1234
	 * $query->filterByBasketId(array(12, 34)); // WHERE basket_id IN (12, 34)
	 * $query->filterByBasketId(array('min' => 12)); // WHERE basket_id > 12
	 * </code>
	 *
	 * @see       filterByBasket()
	 *
	 * @param     mixed $basketId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByBasketId($basketId = null, $comparison = null)
	{
		if (is_array($basketId)) {
			$useMinMax = false;
			if (isset($basketId['min'])) {
				$this->addUsingAlias(GoodInBasketPeer::BASKET_ID, $basketId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($basketId['max'])) {
				$this->addUsingAlias(GoodInBasketPeer::BASKET_ID, $basketId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodInBasketPeer::BASKET_ID, $basketId, $comparison);
	}

	/**
	 * Filter the query by a related Basket object
	 *
	 * @param     Basket|PropelCollection $basket The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByBasket($basket, $comparison = null)
	{
		if ($basket instanceof Basket) {
			return $this
				->addUsingAlias(GoodInBasketPeer::BASKET_ID, $basket->getId(), $comparison);
		} elseif ($basket instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(GoodInBasketPeer::BASKET_ID, $basket->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByBasket() only accepts arguments of type Basket or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Basket relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function joinBasket($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Basket');
		
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
			$this->addJoinObject($join, 'Basket');
		}
		
		return $this;
	}

	/**
	 * Use the Basket relation Basket object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BasketQuery A secondary query class using the current class as primary query
	 */
	public function useBasketQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBasket($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Basket', 'BasketQuery');
	}

	/**
	 * Filter the query by a related Goods object
	 *
	 * @param     Goods|PropelCollection $goods The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function filterByGoods($goods, $comparison = null)
	{
		if ($goods instanceof Goods) {
			return $this
				->addUsingAlias(GoodInBasketPeer::GOOD_ID, $goods->getId(), $comparison);
		} elseif ($goods instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(GoodInBasketPeer::GOOD_ID, $goods->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    GoodInBasketQuery The current query, for fluid interface
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
	 * @param     GoodInBasket $goodInBasket Object to remove from the list of results
	 *
	 * @return    GoodInBasketQuery The current query, for fluid interface
	 */
	public function prune($goodInBasket = null)
	{
		if ($goodInBasket) {
			$this->addUsingAlias(GoodInBasketPeer::ID, $goodInBasket->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGoodInBasketQuery
