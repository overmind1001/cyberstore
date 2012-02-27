<?php


/**
 * Base class that represents a query for the 'catalog_div' table.
 *
 * 
 *
 * @method     CatalogDivQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CatalogDivQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CatalogDivQuery orderByParentCatalogDivId($order = Criteria::ASC) Order by the parent_catalog_div_id column
 *
 * @method     CatalogDivQuery groupById() Group by the id column
 * @method     CatalogDivQuery groupByName() Group by the name column
 * @method     CatalogDivQuery groupByParentCatalogDivId() Group by the parent_catalog_div_id column
 *
 * @method     CatalogDivQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CatalogDivQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CatalogDivQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CatalogDiv findOne(PropelPDO $con = null) Return the first CatalogDiv matching the query
 * @method     CatalogDiv findOneOrCreate(PropelPDO $con = null) Return the first CatalogDiv matching the query, or a new CatalogDiv object populated from the query conditions when no match is found
 *
 * @method     CatalogDiv findOneById(int $id) Return the first CatalogDiv filtered by the id column
 * @method     CatalogDiv findOneByName(string $name) Return the first CatalogDiv filtered by the name column
 * @method     CatalogDiv findOneByParentCatalogDivId(int $parent_catalog_div_id) Return the first CatalogDiv filtered by the parent_catalog_div_id column
 *
 * @method     array findById(int $id) Return CatalogDiv objects filtered by the id column
 * @method     array findByName(string $name) Return CatalogDiv objects filtered by the name column
 * @method     array findByParentCatalogDivId(int $parent_catalog_div_id) Return CatalogDiv objects filtered by the parent_catalog_div_id column
 *
 * @package    propel.generator.cyberstore.om
 */
abstract class BaseCatalogDivQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCatalogDivQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'cyberstore', $modelName = 'CatalogDiv', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CatalogDivQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CatalogDivQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CatalogDivQuery) {
			return $criteria;
		}
		$query = new CatalogDivQuery();
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
	 * @return    CatalogDiv|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CatalogDivPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CatalogDivQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CatalogDivPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CatalogDivQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CatalogDivPeer::ID, $keys, Criteria::IN);
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
	 * @return    CatalogDivQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CatalogDivPeer::ID, $id, $comparison);
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
	 * @return    CatalogDivQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CatalogDivPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the parent_catalog_div_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByParentCatalogDivId(1234); // WHERE parent_catalog_div_id = 1234
	 * $query->filterByParentCatalogDivId(array(12, 34)); // WHERE parent_catalog_div_id IN (12, 34)
	 * $query->filterByParentCatalogDivId(array('min' => 12)); // WHERE parent_catalog_div_id > 12
	 * </code>
	 *
	 * @param     mixed $parentCatalogDivId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CatalogDivQuery The current query, for fluid interface
	 */
	public function filterByParentCatalogDivId($parentCatalogDivId = null, $comparison = null)
	{
		if (is_array($parentCatalogDivId)) {
			$useMinMax = false;
			if (isset($parentCatalogDivId['min'])) {
				$this->addUsingAlias(CatalogDivPeer::PARENT_CATALOG_DIV_ID, $parentCatalogDivId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentCatalogDivId['max'])) {
				$this->addUsingAlias(CatalogDivPeer::PARENT_CATALOG_DIV_ID, $parentCatalogDivId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CatalogDivPeer::PARENT_CATALOG_DIV_ID, $parentCatalogDivId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CatalogDiv $catalogDiv Object to remove from the list of results
	 *
	 * @return    CatalogDivQuery The current query, for fluid interface
	 */
	public function prune($catalogDiv = null)
	{
		if ($catalogDiv) {
			$this->addUsingAlias(CatalogDivPeer::ID, $catalogDiv->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCatalogDivQuery
