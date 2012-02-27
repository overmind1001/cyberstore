<?php


/**
 * Base class that represents a query for the 'basket' table.
 *
 * 
 *
 * @method     BasketQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BasketQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 *
 * @method     BasketQuery groupById() Group by the id column
 * @method     BasketQuery groupBySessionId() Group by the session_id column
 *
 * @method     BasketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BasketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BasketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Basket findOne(PropelPDO $con = null) Return the first Basket matching the query
 * @method     Basket findOneOrCreate(PropelPDO $con = null) Return the first Basket matching the query, or a new Basket object populated from the query conditions when no match is found
 *
 * @method     Basket findOneById(int $id) Return the first Basket filtered by the id column
 * @method     Basket findOneBySessionId(int $session_id) Return the first Basket filtered by the session_id column
 *
 * @method     array findById(int $id) Return Basket objects filtered by the id column
 * @method     array findBySessionId(int $session_id) Return Basket objects filtered by the session_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseBasketQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBasketQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'Basket', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BasketQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BasketQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BasketQuery) {
			return $criteria;
		}
		$query = new BasketQuery();
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
	 * @return    Basket|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BasketPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BasketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BasketPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BasketQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BasketPeer::ID, $keys, Criteria::IN);
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
	 * @return    BasketQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BasketPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the session_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySessionId(1234); // WHERE session_id = 1234
	 * $query->filterBySessionId(array(12, 34)); // WHERE session_id IN (12, 34)
	 * $query->filterBySessionId(array('min' => 12)); // WHERE session_id > 12
	 * </code>
	 *
	 * @param     mixed $sessionId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BasketQuery The current query, for fluid interface
	 */
	public function filterBySessionId($sessionId = null, $comparison = null)
	{
		if (is_array($sessionId)) {
			$useMinMax = false;
			if (isset($sessionId['min'])) {
				$this->addUsingAlias(BasketPeer::SESSION_ID, $sessionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sessionId['max'])) {
				$this->addUsingAlias(BasketPeer::SESSION_ID, $sessionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BasketPeer::SESSION_ID, $sessionId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Basket $basket Object to remove from the list of results
	 *
	 * @return    BasketQuery The current query, for fluid interface
	 */
	public function prune($basket = null)
	{
		if ($basket) {
			$this->addUsingAlias(BasketPeer::ID, $basket->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBasketQuery
