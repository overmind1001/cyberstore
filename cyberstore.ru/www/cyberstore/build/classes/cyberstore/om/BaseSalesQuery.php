<?php


/**
 * Base class that represents a query for the 'sales' table.
 *
 * 
 *
 * @method     SalesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SalesQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     SalesQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     SalesQuery groupById() Group by the id column
 * @method     SalesQuery groupByDate() Group by the date column
 * @method     SalesQuery groupByUserId() Group by the user_id column
 *
 * @method     SalesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SalesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SalesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Sales findOne(PropelPDO $con = null) Return the first Sales matching the query
 * @method     Sales findOneOrCreate(PropelPDO $con = null) Return the first Sales matching the query, or a new Sales object populated from the query conditions when no match is found
 *
 * @method     Sales findOneById(int $id) Return the first Sales filtered by the id column
 * @method     Sales findOneByDate(string $date) Return the first Sales filtered by the date column
 * @method     Sales findOneByUserId(int $user_id) Return the first Sales filtered by the user_id column
 *
 * @method     array findById(int $id) Return Sales objects filtered by the id column
 * @method     array findByDate(string $date) Return Sales objects filtered by the date column
 * @method     array findByUserId(int $user_id) Return Sales objects filtered by the user_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseSalesQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSalesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'Sales', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SalesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SalesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SalesQuery) {
			return $criteria;
		}
		$query = new SalesQuery();
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
	 * @return    Sales|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SalesPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SalesPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SalesPeer::ID, $keys, Criteria::IN);
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
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SalesPeer::ID, $id, $comparison);
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
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(SalesPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(SalesPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUserId(1234); // WHERE user_id = 1234
	 * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
	 * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
	 * </code>
	 *
	 * @param     mixed $userId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(SalesPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(SalesPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SalesPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Sales $sales Object to remove from the list of results
	 *
	 * @return    SalesQuery The current query, for fluid interface
	 */
	public function prune($sales = null)
	{
		if ($sales) {
			$this->addUsingAlias(SalesPeer::ID, $sales->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSalesQuery
