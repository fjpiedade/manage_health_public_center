<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Notificacao extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Notificacao';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='notificacao';
	const SQL_INSERT='INSERT INTO `notificacao` (`idnotificacao`,`descricao`,`datacriado`,`idfuncionario`,`idutilizador`) VALUES (?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `notificacao` (`idnotificacao`,`descricao`,`datacriado`,`idfuncionario`,`idutilizador`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `notificacao` SET `idnotificacao`=?,`descricao`=?,`datacriado`=?,`idfuncionario`=?,`idutilizador`=? WHERE `idnotificacao`=?';
	const SQL_SELECT_PK='SELECT * FROM `notificacao` WHERE `idnotificacao`=?';
	const SQL_DELETE_PK='DELETE FROM `notificacao` WHERE `idnotificacao`=?';
	const FIELD_IDNOTIFICACAO=1868001099;
	const FIELD_DESCRICAO=-1676503947;
	const FIELD_DATACRIADO=2049691664;
	const FIELD_IDFUNCIONARIO=1116985868;
	const FIELD_IDUTILIZADOR=-1405318616;
	private static $PRIMARY_KEYS=array(self::FIELD_IDNOTIFICACAO);
	private static $AUTOINCREMENT_FIELDS=array();
	private static $FIELD_NAMES=array(
		self::FIELD_IDNOTIFICACAO=>'idnotificacao',
		self::FIELD_DESCRICAO=>'descricao',
		self::FIELD_DATACRIADO=>'datacriado',
		self::FIELD_IDFUNCIONARIO=>'idfuncionario',
		self::FIELD_IDUTILIZADOR=>'idutilizador');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDNOTIFICACAO=>'idnotificacao',
		self::FIELD_DESCRICAO=>'descricao',
		self::FIELD_DATACRIADO=>'datacriado',
		self::FIELD_IDFUNCIONARIO=>'idfuncionario',
		self::FIELD_IDUTILIZADOR=>'idutilizador');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDNOTIFICACAO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_DESCRICAO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATACRIADO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IDFUNCIONARIO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_IDUTILIZADOR=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_IDNOTIFICACAO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_DESCRICAO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_DATACRIADO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_IDFUNCIONARIO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_IDUTILIZADOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDNOTIFICACAO=>0,
		self::FIELD_DESCRICAO=>null,
		self::FIELD_DATACRIADO=>null,
		self::FIELD_IDFUNCIONARIO=>null,
		self::FIELD_IDUTILIZADOR=>null);
	private $idnotificacao;
	private $descricao;
	private $datacriado;
	private $idfuncionario;
	private $idutilizador;

	/**
	 * set value for idnotificacao 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @param mixed $idnotificacao
	 * @return Notificacao
	 */
	public function &setIdnotificacao($idnotificacao) {
		$this->notifyChanged(self::FIELD_IDNOTIFICACAO,$this->idnotificacao,$idnotificacao);
		$this->idnotificacao=$idnotificacao;
		return $this;
	}

	/**
	 * get value for idnotificacao 
	 *
	 * type:INT,size:10,default:null,primary,unique
	 *
	 * @return mixed
	 */
	public function getIdnotificacao() {
		return $this->idnotificacao;
	}

	/**
	 * set value for descricao 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $descricao
	 * @return Notificacao
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
	 * set value for datacriado 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $datacriado
	 * @return Notificacao
	 */
	public function &setDatacriado($datacriado) {
		$this->notifyChanged(self::FIELD_DATACRIADO,$this->datacriado,$datacriado);
		$this->datacriado=$datacriado;
		return $this;
	}

	/**
	 * get value for datacriado 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDatacriado() {
		return $this->datacriado;
	}

	/**
	 * set value for idfuncionario 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $idfuncionario
	 * @return Notificacao
	 */
	public function &setIdfuncionario($idfuncionario) {
		$this->notifyChanged(self::FIELD_IDFUNCIONARIO,$this->idfuncionario,$idfuncionario);
		$this->idfuncionario=$idfuncionario;
		return $this;
	}

	/**
	 * get value for idfuncionario 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getIdfuncionario() {
		return $this->idfuncionario;
	}

	/**
	 * set value for idutilizador 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $idutilizador
	 * @return Notificacao
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
			self::FIELD_IDNOTIFICACAO=>$this->getIdnotificacao(),
			self::FIELD_DESCRICAO=>$this->getDescricao(),
			self::FIELD_DATACRIADO=>$this->getDatacriado(),
			self::FIELD_IDFUNCIONARIO=>$this->getIdfuncionario(),
			self::FIELD_IDUTILIZADOR=>$this->getIdutilizador());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDNOTIFICACAO=>$this->getIdnotificacao());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Notificacao instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Notificacao $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Notificacao[]
	 */
	public static function findByExample(PDO $db,Notificacao $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Notificacao instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Notificacao[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `notificacao`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Notificacao instances
	 *
	 * @param PDOStatement $stmt
	 * @return Notificacao[]
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
	 * returns the result as an array of Notificacao instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Notificacao[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Notificacao();
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
	 * Execute select query and return matched rows as an array of Notificacao instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Notificacao[]
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
		$sql='DELETE FROM `notificacao`'
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
		$this->setIdnotificacao($result['idnotificacao']);
		$this->setDescricao($result['descricao']);
		$this->setDatacriado($result['datacriado']);
		$this->setIdfuncionario($result['idfuncionario']);
		$this->setIdutilizador($result['idutilizador']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Notificacao
	 */
	public static function findById(PDO $db,$idnotificacao) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idnotificacao);
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
		$o=new Notificacao();
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
		$stmt->bindValue(1,$this->getIdnotificacao());
		$stmt->bindValue(2,$this->getDescricao());
		$stmt->bindValue(3,$this->getDatacriado());
		$stmt->bindValue(4,$this->getIdfuncionario());
		$stmt->bindValue(5,$this->getIdutilizador());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_INSERT);
		$this->bindValues($stmt);
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
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(6,$this->getIdnotificacao());
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
		$stmt->bindValue(1,$this->getIdnotificacao());
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
		return self::hashToDomDocument($this->toHash(), 'Notificacao');
	}

	/**
	 * get single Notificacao instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Notificacao
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Notificacao();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Notificacao from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Notificacao[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Notificacao') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>