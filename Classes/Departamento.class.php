<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Departamento extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Departamento';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='departamento';
	const SQL_INSERT='INSERT INTO `departamento` (`iddepartamento`,`descricao`,`sigla`,`datacriacao`,`idutilizador`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `departamento` (`descricao`,`sigla`,`datacriacao`,`idutilizador`) VALUES (?,?,?,?)';
	const SQL_UPDATE='UPDATE `departamento` SET `iddepartamento`=?,`descricao`=?,`sigla`=?,`datacriacao`=?,`idutilizador`=? WHERE `iddepartamento`=?';
	const SQL_SELECT_PK='SELECT * FROM `departamento` WHERE `iddepartamento`=?';
	const SQL_DELETE_PK='DELETE FROM `departamento` WHERE `iddepartamento`=?';
	const FIELD_IDDEPARTAMENTO=1935494089;
	const FIELD_DESCRICAO=2090954975;
	const FIELD_SIGLA=-1123426404;
	const FIELD_DATACRIACAO=-1013475626;
	const FIELD_IDUTILIZADOR=-1121952386;
	private static $PRIMARY_KEYS=array(self::FIELD_IDDEPARTAMENTO);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IDDEPARTAMENTO);
	private static $FIELD_NAMES=array(
		self::FIELD_IDDEPARTAMENTO=>'iddepartamento',
		self::FIELD_DESCRICAO=>'descricao',
		self::FIELD_SIGLA=>'sigla',
		self::FIELD_DATACRIACAO=>'datacriacao',
		self::FIELD_IDUTILIZADOR=>'idutilizador');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDDEPARTAMENTO=>'iddepartamento',
		self::FIELD_DESCRICAO=>'descricao',
		self::FIELD_SIGLA=>'sigla',
		self::FIELD_DATACRIACAO=>'datacriacao',
		self::FIELD_IDUTILIZADOR=>'idutilizador');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDDEPARTAMENTO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DESCRICAO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SIGLA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATACRIACAO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IDUTILIZADOR=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDDEPARTAMENTO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DESCRICAO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_SIGLA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_DATACRIACAO=>array(Db2PhpEntity::JDBC_TYPE_DATE,10,0,true),
		self::FIELD_IDUTILIZADOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDDEPARTAMENTO=>null,
		self::FIELD_DESCRICAO=>null,
		self::FIELD_SIGLA=>null,
		self::FIELD_DATACRIACAO=>null,
		self::FIELD_IDUTILIZADOR=>null);
	private $iddepartamento;
	private $descricao;
	private $sigla;
	private $datacriacao;
	private $idutilizador;

	/**
	 * set value for iddepartamento 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $iddepartamento
	 * @return Departamento
	 */
	public function &setIddepartamento($iddepartamento) {
		$this->notifyChanged(self::FIELD_IDDEPARTAMENTO,$this->iddepartamento,$iddepartamento);
		$this->iddepartamento=$iddepartamento;
		return $this;
	}

	/**
	 * get value for iddepartamento 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIddepartamento() {
		return $this->iddepartamento;
	}

	/**
	 * set value for descricao 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $descricao
	 * @return Departamento
	 */
	public function &setDescricao($descricao) {
		$this->notifyChanged(self::FIELD_DESCRICAO,$this->descricao,$descricao);
		$this->descricao=$descricao;
		return $this;
	}

	/**
	 * get value for descricao 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * set value for sigla 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $sigla
	 * @return Departamento
	 */
	public function &setSigla($sigla) {
		$this->notifyChanged(self::FIELD_SIGLA,$this->sigla,$sigla);
		$this->sigla=$sigla;
		return $this;
	}

	/**
	 * get value for sigla 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getSigla() {
		return $this->sigla;
	}

	/**
	 * set value for datacriacao 
	 *
	 * type:DATE,size:10,default:null,nullable
	 *
	 * @param mixed $datacriacao
	 * @return Departamento
	 */
	public function &setDatacriacao($datacriacao) {
		$this->notifyChanged(self::FIELD_DATACRIACAO,$this->datacriacao,$datacriacao);
		$this->datacriacao=$datacriacao;
		return $this;
	}

	/**
	 * get value for datacriacao 
	 *
	 * type:DATE,size:10,default:null,nullable
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
	 * @return Departamento
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
			self::FIELD_IDDEPARTAMENTO=>$this->getIddepartamento(),
			self::FIELD_DESCRICAO=>$this->getDescricao(),
			self::FIELD_SIGLA=>$this->getSigla(),
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
			self::FIELD_IDDEPARTAMENTO=>$this->getIddepartamento());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Departamento instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Departamento $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Departamento[]
	 */
	public static function findByExample(PDO $db,Departamento $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Departamento instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Departamento[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `departamento`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Departamento instances
	 *
	 * @param PDOStatement $stmt
	 * @return Departamento[]
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
	 * returns the result as an array of Departamento instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Departamento[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Departamento();
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
	 * Execute select query and return matched rows as an array of Departamento instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Departamento[]
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
		$sql='DELETE FROM `departamento`'
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
		$this->setIddepartamento($result['iddepartamento']);
		$this->setDescricao($result['descricao']);
		$this->setSigla($result['sigla']);
		$this->setDatacriacao($result['datacriacao']);
		$this->setIdutilizador($result['idutilizador']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Departamento
	 */
	public static function findById(PDO $db,$iddepartamento) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$iddepartamento);
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
		$o=new Departamento();
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
		$stmt->bindValue(1,$this->getIddepartamento());
		$stmt->bindValue(2,$this->getDescricao());
		$stmt->bindValue(3,$this->getSigla());
		$stmt->bindValue(4,$this->getDatacriacao());
		$stmt->bindValue(5,$this->getIdutilizador());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIddepartamento()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getDescricao());
			$stmt->bindValue(2,$this->getSigla());
			$stmt->bindValue(3,$this->getDatacriacao());
			$stmt->bindValue(4,$this->getIdutilizador());
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
			$this->setIddepartamento($lastInsertId);
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
		$stmt->bindValue(6,$this->getIddepartamento());
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
		$stmt->bindValue(1,$this->getIddepartamento());
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
		return self::hashToDomDocument($this->toHash(), 'Departamento');
	}

	/**
	 * get single Departamento instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Departamento
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Departamento();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Departamento from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Departamento[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Departamento') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>