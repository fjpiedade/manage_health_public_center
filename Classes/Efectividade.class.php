<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Efectividade extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Efectividade';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='efectividade';
	const SQL_INSERT='INSERT INTO `efectividade` (`idefectividade`,`mes`,`ano`,`ficheiro`,`datacriacao`,`idutilizador`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `efectividade` (`mes`,`ano`,`ficheiro`,`datacriacao`,`idutilizador`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `efectividade` SET `idefectividade`=?,`mes`=?,`ano`=?,`ficheiro`=?,`datacriacao`=?,`idutilizador`=? WHERE `idefectividade`=?';
	const SQL_SELECT_PK='SELECT * FROM `efectividade` WHERE `idefectividade`=?';
	const SQL_DELETE_PK='DELETE FROM `efectividade` WHERE `idefectividade`=?';
	const FIELD_IDEFECTIVIDADE=2133783977;
	const FIELD_MES=1826179090;
	const FIELD_ANO=1826167833;
	const FIELD_FICHEIRO=-1787352462;
	const FIELD_DATACRIACAO=1355683063;
	const FIELD_IDUTILIZADOR=-692477059;
	private static $PRIMARY_KEYS=array(self::FIELD_IDEFECTIVIDADE);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IDEFECTIVIDADE);
	private static $FIELD_NAMES=array(
		self::FIELD_IDEFECTIVIDADE=>'idefectividade',
		self::FIELD_MES=>'mes',
		self::FIELD_ANO=>'ano',
		self::FIELD_FICHEIRO=>'ficheiro',
		self::FIELD_DATACRIACAO=>'datacriacao',
		self::FIELD_IDUTILIZADOR=>'idutilizador');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDEFECTIVIDADE=>'idefectividade',
		self::FIELD_MES=>'mes',
		self::FIELD_ANO=>'ano',
		self::FIELD_FICHEIRO=>'ficheiro',
		self::FIELD_DATACRIACAO=>'datacriacao',
		self::FIELD_IDUTILIZADOR=>'idutilizador');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDEFECTIVIDADE=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_MES=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ANO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_FICHEIRO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATACRIACAO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IDUTILIZADOR=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDEFECTIVIDADE=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_MES=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_ANO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_FICHEIRO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_DATACRIACAO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_IDUTILIZADOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDEFECTIVIDADE=>null,
		self::FIELD_MES=>null,
		self::FIELD_ANO=>null,
		self::FIELD_FICHEIRO=>null,
		self::FIELD_DATACRIACAO=>null,
		self::FIELD_IDUTILIZADOR=>null);
	private $idefectividade;
	private $mes;
	private $ano;
	private $ficheiro;
	private $datacriacao;
	private $idutilizador;

	/**
	 * set value for idefectividade 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idefectividade
	 * @return Efectividade
	 */
	public function &setIdefectividade($idefectividade) {
		$this->notifyChanged(self::FIELD_IDEFECTIVIDADE,$this->idefectividade,$idefectividade);
		$this->idefectividade=$idefectividade;
		return $this;
	}

	/**
	 * get value for idefectividade 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdefectividade() {
		return $this->idefectividade;
	}

	/**
	 * set value for mes 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $mes
	 * @return Efectividade
	 */
	public function &setMes($mes) {
		$this->notifyChanged(self::FIELD_MES,$this->mes,$mes);
		$this->mes=$mes;
		return $this;
	}

	/**
	 * get value for mes 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getMes() {
		return $this->mes;
	}

	/**
	 * set value for ano 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $ano
	 * @return Efectividade
	 */
	public function &setAno($ano) {
		$this->notifyChanged(self::FIELD_ANO,$this->ano,$ano);
		$this->ano=$ano;
		return $this;
	}

	/**
	 * get value for ano 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getAno() {
		return $this->ano;
	}

	/**
	 * set value for ficheiro 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $ficheiro
	 * @return Efectividade
	 */
	public function &setFicheiro($ficheiro) {
		$this->notifyChanged(self::FIELD_FICHEIRO,$this->ficheiro,$ficheiro);
		$this->ficheiro=$ficheiro;
		return $this;
	}

	/**
	 * get value for ficheiro 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFicheiro() {
		return $this->ficheiro;
	}

	/**
	 * set value for datacriacao 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $datacriacao
	 * @return Efectividade
	 */
	public function &setDatacriacao($datacriacao) {
		$this->notifyChanged(self::FIELD_DATACRIACAO,$this->datacriacao,$datacriacao);
		$this->datacriacao=$datacriacao;
		return $this;
	}

	/**
	 * get value for datacriacao 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDatacriacao() {
		return $this->datacriacao;
	}

	/**
	 * set value for idutilizador 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $idutilizador
	 * @return Efectividade
	 */
	public function &setIdutilizador($idutilizador) {
		$this->notifyChanged(self::FIELD_IDUTILIZADOR,$this->idutilizador,$idutilizador);
		$this->idutilizador=$idutilizador;
		return $this;
	}

	/**
	 * get value for idutilizador 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getIdutilizador() {
		return $this->idutilizador;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_IDEFECTIVIDADE=>$this->getIdefectividade(),
			self::FIELD_MES=>$this->getMes(),
			self::FIELD_ANO=>$this->getAno(),
			self::FIELD_FICHEIRO=>$this->getFicheiro(),
			self::FIELD_DATACRIACAO=>$this->getDatacriacao(),
			self::FIELD_IDUTILIZADOR=>$this->getIdutilizador());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDEFECTIVIDADE=>$this->getIdefectividade());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (null===self::$stmts[$statement][$dbInstanceId]) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of Efectividade instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Efectividade $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Efectividade[]
	 */
	public static function findByExample(PDO $db,Efectividade $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of Efectividade instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Efectividade[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `efectividade`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Efectividade instances
	 *
	 * @param PDOStatement $stmt
	 * @return Efectividade[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of Efectividade instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Efectividade[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Efectividade();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of Efectividade instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Efectividade[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `efectividade`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setIdefectividade($result['idefectividade']);
		$this->setMes($result['mes']);
		$this->setAno($result['ano']);
		$this->setFicheiro($result['ficheiro']);
		$this->setDatacriacao($result['datacriacao']);
		$this->setIdutilizador($result['idutilizador']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Efectividade
	 */
	public static function findById(PDO $db,$idefectividade) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idefectividade);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new Efectividade();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getIdefectividade());
		$stmt->bindValue(2,$this->getMes());
		$stmt->bindValue(3,$this->getAno());
		$stmt->bindValue(4,$this->getFicheiro());
		$stmt->bindValue(5,$this->getDatacriacao());
		$stmt->bindValue(6,$this->getIdutilizador());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdefectividade()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getMes());
			$stmt->bindValue(2,$this->getAno());
			$stmt->bindValue(3,$this->getFicheiro());
			$stmt->bindValue(4,$this->getDatacriacao());
			$stmt->bindValue(5,$this->getIdutilizador());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setIdefectividade($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(7,$this->getIdefectividade());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getIdefectividade());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Efectividade');
	}

	/**
	 * get single Efectividade instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Efectividade
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Efectividade();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Efectividade from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Efectividade[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Efectividade') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>