<?php


/**
 * Base class that represents a query for the 'goods_in_sale' table.
 *
 * 
 *
 * @method     GoodsInSaleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GoodsInSaleQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     GoodsInSaleQuery orderByCount($order = Criteria::ASC) Order by the count column
 * @method     GoodsInSaleQuery orderBySaleId($order = Criteria::ASC) Order by the sale_id column
 * @method     GoodsInSaleQuery orderByGoodId($order = Criteria::ASC) Order by the good_id column
 *
 * @method     GoodsInSaleQuery groupById() Group by the id column
 * @method     GoodsInSaleQuery groupByPrice() Group by the price column
 * @method     GoodsInSaleQuery groupByCount() Group by the count column
 * @method     GoodsInSaleQuery groupBySaleId() Group by the sale_id column
 * @method     GoodsInSaleQuery groupByGoodId() Group by the good_id column
 *
 * @method     GoodsInSaleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GoodsInSaleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GoodsInSaleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GoodsInSaleQuery leftJoinGoods($relationAlias = null) Adds a LEFT JOIN clause to the query using the Goods relation
 * @method     GoodsInSaleQuery rightJoinGoods($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Goods relation
 * @method     GoodsInSaleQuery innerJoinGoods($relationAlias = null) Adds a INNER JOIN clause to the query using the Goods relation
 *
 * @method     GoodsInSaleQuery leftJoinSales($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sales relation
 * @method     GoodsInSaleQuery rightJoinSales($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sales relation
 * @method     GoodsInSaleQuery innerJoinSales($relationAlias = null) Adds a INNER JOIN clause to the query using the Sales relation
 *
 * @method     GoodsInSale findOne(PropelPDO $con = null) Return the first GoodsInSale matching the query
 * @method     GoodsInSale findOneOrCreate(PropelPDO $con = null) Return the first GoodsInSale matching the query, or a new GoodsInSale object populated from the query conditions when no match is found
 *
 * @method     GoodsInSale findOneById(int $id) Return the first GoodsInSale filtered by the id column
 * @method     GoodsInSale findOneByPrice(double $price) Return the first GoodsInSale filtered by the price column
 * @method     GoodsInSale findOneByCount(int $count) Return the first GoodsInSale filtered by the count column
 * @method     GoodsInSale findOneBySaleId(int $sale_id) Return the first GoodsInSale filtered by the sale_id column
 * @method     GoodsInSale findOneByGoodId(int $good_id) Return the first GoodsInSale filtered by the good_id column
 *
 * @method     array findById(int $id) Return GoodsInSale objects filtered by the id column
 * @method     array findByPrice(double $price) Return GoodsInSale objects filtered by the price column
 * @method     array findByCount(int $count) Return GoodsInSale objects filtered by the count column
 * @method     array findBySaleId(int $sale_id) Return GoodsInSale objects filtered by the sale_id column
 * @method     array findByGoodId(int $good_id) Return GoodsInSale objects filtered by the good_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseGoodsInSaleQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGoodsInSaleQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'GoodsInSale', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GoodsInSaleQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GoodsInSaleQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GoodsInSaleQuery) {
			return $criteria;
		}
		$query = new GoodsInSaleQuery();
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
	 * @return    GoodsInSale|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GoodsInSalePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GoodsInSalePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GoodsInSalePeer::ID, $keys, Criteria::IN);
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
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GoodsInSalePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the price column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPrice(1234); // WHERE price = 1234
	 * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
	 * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
	 * </code>
	 *
	 * @param     mixed $price The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(GoodsInSalePeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(GoodsInSalePeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsInSalePeer::PRICE, $price, $comparison);
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
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterByCount($count = null, $comparison = null)
	{
		if (is_array($count)) {
			$useMinMax = false;
			if (isset($count['min'])) {
				$this->addUsingAlias(GoodsInSalePeer::COUNT, $count['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($count['max'])) {
				$this->addUsingAlias(GoodsInSalePeer::COUNT, $count['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsInSalePeer::COUNT, $count, $comparison);
	}

	/**
	 * Filter the query on the sale_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySaleId(1234); // WHERE sale_id = 1234
	 * $query->filterBySaleId(array(12, 34)); // WHERE sale_id IN (12, 34)
	 * $query->filterBySaleId(array('min' => 12)); // WHERE sale_id > 12
	 * </code>
	 *
	 * @see       filterBySales()
	 *
	 * @param     mixed $saleId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterBySaleId($saleId = null, $comparison = null)
	{
		if (is_array($saleId)) {
			$useMinMax = false;
			if (isset($saleId['min'])) {
				$this->addUsingAlias(GoodsInSalePeer::SALE_ID, $saleId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($saleId['max'])) {
				$this->addUsingAlias(GoodsInSalePeer::SALE_ID, $saleId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsInSalePeer::SALE_ID, $saleId, $comparison);
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
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterByGoodId($goodId = null, $comparison = null)
	{
		if (is_array($goodId)) {
			$useMinMax = false;
			if (isset($goodId['min'])) {
				$this->addUsingAlias(GoodsInSalePeer::GOOD_ID, $goodId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($goodId['max'])) {
				$this->addUsingAlias(GoodsInSalePeer::GOOD_ID, $goodId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GoodsInSalePeer::GOOD_ID, $goodId, $comparison);
	}

	/**
	 * Filter the query by a related Goods object
	 *
	 * @param     Goods|PropelCollection $goods The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterByGoods($goods, $comparison = null)
	{
		if ($goods instanceof Goods) {
			return $this
				->addUsingAlias(GoodsInSalePeer::GOOD_ID, $goods->getId(), $comparison);
		} elseif ($goods instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(GoodsInSalePeer::GOOD_ID, $goods->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    GoodsInSaleQuery The current query, for fluid interface
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
	 * Filter the query by a related Sales object
	 *
	 * @param     Sales|PropelCollection $sales The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function filterBySales($sales, $comparison = null)
	{
		if ($sales instanceof Sales) {
			return $this
				->addUsingAlias(GoodsInSalePeer::SALE_ID, $sales->getId(), $comparison);
		} elseif ($sales instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(GoodsInSalePeer::SALE_ID, $sales->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterBySales() only accepts arguments of type Sales or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the Sales relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function joinSales($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Sales');
		
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
			$this->addJoinObject($join, 'Sales');
		}
		
		return $this;
	}

	/**
	 * Use the Sales relation Sales object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SalesQuery A secondary query class using the current class as primary query
	 */
	public function useSalesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSales($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Sales', 'SalesQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     GoodsInSale $goodsInSale Object to remove from the list of results
	 *
	 * @return    GoodsInSaleQuery The current query, for fluid interface
	 */
	public function prune($goodsInSale = null)
	{
		if ($goodsInSale) {
			$this->addUsingAlias(GoodsInSalePeer::ID, $goodsInSale->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGoodsInSaleQuery
