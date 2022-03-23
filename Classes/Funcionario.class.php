<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Funcionario extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Funcionario';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='funcionario';
	const SQL_INSERT='INSERT INTO `funcionario` (`idfuncionario`,`nome`,`nomepai`,`nomemae`,`genero`,`provincia`,`datanascimento`,`estadocivil`,`idcategoria`,`iddepartamento`,`idutilizador`,`telefone`,`endereco`,`email`,`foto`,`bi`,`banco`,`conta`,`iban`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `funcionario` (`nome`,`nomepai`,`nomemae`,`genero`,`provincia`,`datanascimento`,`estadocivil`,`idcategoria`,`iddepartamento`,`idutilizador`,`telefone`,`endereco`,`email`,`foto`,`bi`,`banco`,`conta`,`iban`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `funcionario` SET `idfuncionario`=?,`nome`=?,`nomepai`=?,`nomemae`=?,`genero`=?,`provincia`=?,`datanascimento`=?,`estadocivil`=?,`idcategoria`=?,`iddepartamento`=?,`idutilizador`=?,`telefone`=?,`endereco`=?,`email`=?,`foto`=?,`bi`=?,`banco`=?,`conta`=?,`iban`=? WHERE `idfuncionario`=?';
	const SQL_SELECT_PK='SELECT * FROM `funcionario` WHERE `idfuncionario`=?';
	const SQL_DELETE_PK='DELETE FROM `funcionario` WHERE `idfuncionario`=?';
	const FIELD_IDFUNCIONARIO=1429856013;
	const FIELD_NOME=-860144820;
	const FIELD_NOMEPAI=-799333940;
	const FIELD_NOMEMAE=-799336827;
	const FIELD_GENERO=2119910277;
	const FIELD_PROVINCIA=213407578;
	const FIELD_DATANASCIMENTO=1250965672;
	const FIELD_ESTADOCIVIL=-1484180294;
	const FIELD_IDCATEGORIA=265373413;
	const FIELD_IDDEPARTAMENTO=1312526610;
	const FIELD_IDUTILIZADOR=405889287;
	const FIELD_TELEFONE=-1751603811;
	const FIELD_ENDERECO=1339925116;
	const FIELD_EMAIL=-903068215;
	const FIELD_FOTO=-860382921;
	const FIELD_BI=-715978438;
	const FIELD_BANCO=-906183960;
	const FIELD_CONTA=-904842852;
	const FIELD_IBAN=-860306631;
	private static $PRIMARY_KEYS=array(self::FIELD_IDFUNCIONARIO);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_IDFUNCIONARIO);
	private static $FIELD_NAMES=array(
		self::FIELD_IDFUNCIONARIO=>'idfuncionario',
		self::FIELD_NOME=>'nome',
		self::FIELD_NOMEPAI=>'nomepai',
		self::FIELD_NOMEMAE=>'nomemae',
		self::FIELD_GENERO=>'genero',
		self::FIELD_PROVINCIA=>'provincia',
		self::FIELD_DATANASCIMENTO=>'datanascimento',
		self::FIELD_ESTADOCIVIL=>'estadocivil',
		self::FIELD_IDCATEGORIA=>'idcategoria',
		self::FIELD_IDDEPARTAMENTO=>'iddepartamento',
		self::FIELD_IDUTILIZADOR=>'idutilizador',
		self::FIELD_TELEFONE=>'telefone',
		self::FIELD_ENDERECO=>'endereco',
		self::FIELD_EMAIL=>'email',
		self::FIELD_FOTO=>'foto',
		self::FIELD_BI=>'bi',
		self::FIELD_BANCO=>'banco',
		self::FIELD_CONTA=>'conta',
		self::FIELD_IBAN=>'iban');
	private static $PROPERTY_NAMES=array(
		self::FIELD_IDFUNCIONARIO=>'idfuncionario',
		self::FIELD_NOME=>'nome',
		self::FIELD_NOMEPAI=>'nomepai',
		self::FIELD_NOMEMAE=>'nomemae',
		self::FIELD_GENERO=>'genero',
		self::FIELD_PROVINCIA=>'provincia',
		self::FIELD_DATANASCIMENTO=>'datanascimento',
		self::FIELD_ESTADOCIVIL=>'estadocivil',
		self::FIELD_IDCATEGORIA=>'idcategoria',
		self::FIELD_IDDEPARTAMENTO=>'iddepartamento',
		self::FIELD_IDUTILIZADOR=>'idutilizador',
		self::FIELD_TELEFONE=>'telefone',
		self::FIELD_ENDERECO=>'endereco',
		self::FIELD_EMAIL=>'email',
		self::FIELD_FOTO=>'foto',
		self::FIELD_BI=>'bi',
		self::FIELD_BANCO=>'banco',
		self::FIELD_CONTA=>'conta',
		self::FIELD_IBAN=>'iban');
	private static $PROPERTY_TYPES=array(
		self::FIELD_IDFUNCIONARIO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NOME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NOMEPAI=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_NOMEMAE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_GENERO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PROVINCIA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_DATANASCIMENTO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ESTADOCIVIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IDCATEGORIA=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_IDDEPARTAMENTO=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_IDUTILIZADOR=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_TELEFONE=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ENDERECO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_EMAIL=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FOTO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_BI=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_BANCO=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_CONTA=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_IBAN=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_IDFUNCIONARIO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NOME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_NOMEPAI=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_NOMEMAE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_GENERO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_PROVINCIA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_DATANASCIMENTO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_ESTADOCIVIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_IDCATEGORIA=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_IDDEPARTAMENTO=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_IDUTILIZADOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_TELEFONE=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_ENDERECO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_EMAIL=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_FOTO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_BI=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_BANCO=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_CONTA=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true),
		self::FIELD_IBAN=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,45,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_IDFUNCIONARIO=>null,
		self::FIELD_NOME=>null,
		self::FIELD_NOMEPAI=>null,
		self::FIELD_NOMEMAE=>null,
		self::FIELD_GENERO=>null,
		self::FIELD_PROVINCIA=>null,
		self::FIELD_DATANASCIMENTO=>null,
		self::FIELD_ESTADOCIVIL=>null,
		self::FIELD_IDCATEGORIA=>null,
		self::FIELD_IDDEPARTAMENTO=>null,
		self::FIELD_IDUTILIZADOR=>null,
		self::FIELD_TELEFONE=>null,
		self::FIELD_ENDERECO=>null,
		self::FIELD_EMAIL=>null,
		self::FIELD_FOTO=>null,
		self::FIELD_BI=>null,
		self::FIELD_BANCO=>null,
		self::FIELD_CONTA=>null,
		self::FIELD_IBAN=>null);
	private $idfuncionario;
	private $nome;
	private $nomepai;
	private $nomemae;
	private $genero;
	private $provincia;
	private $datanascimento;
	private $estadocivil;
	private $idcategoria;
	private $iddepartamento;
	private $idutilizador;
	private $telefone;
	private $endereco;
	private $email;
	private $foto;
	private $bi;
	private $banco;
	private $conta;
	private $iban;

	/**
	 * set value for idfuncionario 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $idfuncionario
	 * @return Funcionario
	 */
	public function &setIdfuncionario($idfuncionario) {
		$this->notifyChanged(self::FIELD_IDFUNCIONARIO,$this->idfuncionario,$idfuncionario);
		$this->idfuncionario=$idfuncionario;
		return $this;
	}

	/**
	 * get value for idfuncionario 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getIdfuncionario() {
		return $this->idfuncionario;
	}

	/**
	 * set value for nome 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $nome
	 * @return Funcionario
	 */
	public function &setNome($nome) {
		$this->notifyChanged(self::FIELD_NOME,$this->nome,$nome);
		$this->nome=$nome;
		return $this;
	}

	/**
	 * get value for nome 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * set value for nomepai 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $nomepai
	 * @return Funcionario
	 */
	public function &setNomepai($nomepai) {
		$this->notifyChanged(self::FIELD_NOMEPAI,$this->nomepai,$nomepai);
		$this->nomepai=$nomepai;
		return $this;
	}

	/**
	 * get value for nomepai 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNomepai() {
		return $this->nomepai;
	}

	/**
	 * set value for nomemae 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $nomemae
	 * @return Funcionario
	 */
	public function &setNomemae($nomemae) {
		$this->notifyChanged(self::FIELD_NOMEMAE,$this->nomemae,$nomemae);
		$this->nomemae=$nomemae;
		return $this;
	}

	/**
	 * get value for nomemae 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getNomemae() {
		return $this->nomemae;
	}

	/**
	 * set value for genero 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $genero
	 * @return Funcionario
	 */
	public function &setGenero($genero) {
		$this->notifyChanged(self::FIELD_GENERO,$this->genero,$genero);
		$this->genero=$genero;
		return $this;
	}

	/**
	 * get value for genero 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getGenero() {
		return $this->genero;
	}

	/**
	 * set value for provincia 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $provincia
	 * @return Funcionario
	 */
	public function &setProvincia($provincia) {
		$this->notifyChanged(self::FIELD_PROVINCIA,$this->provincia,$provincia);
		$this->provincia=$provincia;
		return $this;
	}

	/**
	 * get value for provincia 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getProvincia() {
		return $this->provincia;
	}

	/**
	 * set value for datanascimento 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $datanascimento
	 * @return Funcionario
	 */
	public function &setDatanascimento($datanascimento) {
		$this->notifyChanged(self::FIELD_DATANASCIMENTO,$this->datanascimento,$datanascimento);
		$this->datanascimento=$datanascimento;
		return $this;
	}

	/**
	 * get value for datanascimento 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getDatanascimento() {
		return $this->datanascimento;
	}

	/**
	 * set value for estadocivil 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $estadocivil
	 * @return Funcionario
	 */
	public function &setEstadocivil($estadocivil) {
		$this->notifyChanged(self::FIELD_ESTADOCIVIL,$this->estadocivil,$estadocivil);
		$this->estadocivil=$estadocivil;
		return $this;
	}

	/**
	 * get value for estadocivil 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEstadocivil() {
		return $this->estadocivil;
	}

	/**
	 * set value for idcategoria 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $idcategoria
	 * @return Funcionario
	 */
	public function &setIdcategoria($idcategoria) {
		$this->notifyChanged(self::FIELD_IDCATEGORIA,$this->idcategoria,$idcategoria);
		$this->idcategoria=$idcategoria;
		return $this;
	}

	/**
	 * get value for idcategoria 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getIdcategoria() {
		return $this->idcategoria;
	}

	/**
	 * set value for iddepartamento 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $iddepartamento
	 * @return Funcionario
	 */
	public function &setIddepartamento($iddepartamento) {
		$this->notifyChanged(self::FIELD_IDDEPARTAMENTO,$this->iddepartamento,$iddepartamento);
		$this->iddepartamento=$iddepartamento;
		return $this;
	}

	/**
	 * get value for iddepartamento 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getIddepartamento() {
		return $this->iddepartamento;
	}

	/**
	 * set value for idutilizador 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $idutilizador
	 * @return Funcionario
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
	 * set value for telefone 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $telefone
	 * @return Funcionario
	 */
	public function &setTelefone($telefone) {
		$this->notifyChanged(self::FIELD_TELEFONE,$this->telefone,$telefone);
		$this->telefone=$telefone;
		return $this;
	}

	/**
	 * get value for telefone 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * set value for endereco 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $endereco
	 * @return Funcionario
	 */
	public function &setEndereco($endereco) {
		$this->notifyChanged(self::FIELD_ENDERECO,$this->endereco,$endereco);
		$this->endereco=$endereco;
		return $this;
	}

	/**
	 * get value for endereco 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}

	/**
	 * set value for email 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $email
	 * @return Funcionario
	 */
	public function &setEmail($email) {
		$this->notifyChanged(self::FIELD_EMAIL,$this->email,$email);
		$this->email=$email;
		return $this;
	}

	/**
	 * get value for email 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * set value for foto 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $foto
	 * @return Funcionario
	 */
	public function &setFoto($foto) {
		$this->notifyChanged(self::FIELD_FOTO,$this->foto,$foto);
		$this->foto=$foto;
		return $this;
	}

	/**
	 * get value for foto 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFoto() {
		return $this->foto;
	}

	/**
	 * set value for bi 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $bi
	 * @return Funcionario
	 */
	public function &setBi($bi) {
		$this->notifyChanged(self::FIELD_BI,$this->bi,$bi);
		$this->bi=$bi;
		return $this;
	}

	/**
	 * get value for bi 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getBi() {
		return $this->bi;
	}

	/**
	 * set value for banco 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $banco
	 * @return Funcionario
	 */
	public function &setBanco($banco) {
		$this->notifyChanged(self::FIELD_BANCO,$this->banco,$banco);
		$this->banco=$banco;
		return $this;
	}

	/**
	 * get value for banco 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getBanco() {
		return $this->banco;
	}

	/**
	 * set value for conta 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $conta
	 * @return Funcionario
	 */
	public function &setConta($conta) {
		$this->notifyChanged(self::FIELD_CONTA,$this->conta,$conta);
		$this->conta=$conta;
		return $this;
	}

	/**
	 * get value for conta 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getConta() {
		return $this->conta;
	}

	/**
	 * set value for iban 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @param mixed $iban
	 * @return Funcionario
	 */
	public function &setIban($iban) {
		$this->notifyChanged(self::FIELD_IBAN,$this->iban,$iban);
		$this->iban=$iban;
		return $this;
	}

	/**
	 * get value for iban 
	 *
	 * type:VARCHAR,size:45,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getIban() {
		return $this->iban;
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
			self::FIELD_IDFUNCIONARIO=>$this->getIdfuncionario(),
			self::FIELD_NOME=>$this->getNome(),
			self::FIELD_NOMEPAI=>$this->getNomepai(),
			self::FIELD_NOMEMAE=>$this->getNomemae(),
			self::FIELD_GENERO=>$this->getGenero(),
			self::FIELD_PROVINCIA=>$this->getProvincia(),
			self::FIELD_DATANASCIMENTO=>$this->getDatanascimento(),
			self::FIELD_ESTADOCIVIL=>$this->getEstadocivil(),
			self::FIELD_IDCATEGORIA=>$this->getIdcategoria(),
			self::FIELD_IDDEPARTAMENTO=>$this->getIddepartamento(),
			self::FIELD_IDUTILIZADOR=>$this->getIdutilizador(),
			self::FIELD_TELEFONE=>$this->getTelefone(),
			self::FIELD_ENDERECO=>$this->getEndereco(),
			self::FIELD_EMAIL=>$this->getEmail(),
			self::FIELD_FOTO=>$this->getFoto(),
			self::FIELD_BI=>$this->getBi(),
			self::FIELD_BANCO=>$this->getBanco(),
			self::FIELD_CONTA=>$this->getConta(),
			self::FIELD_IBAN=>$this->getIban());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_IDFUNCIONARIO=>$this->getIdfuncionario());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Funcionario instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Funcionario $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Funcionario[]
	 */
	public static function findByExample(PDO $db,Funcionario $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Funcionario instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Funcionario[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `funcionario`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Funcionario instances
	 *
	 * @param PDOStatement $stmt
	 * @return Funcionario[]
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
	 * returns the result as an array of Funcionario instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Funcionario[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Funcionario();
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
	 * Execute select query and return matched rows as an array of Funcionario instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Funcionario[]
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
		$sql='DELETE FROM `funcionario`'
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
		$this->setIdfuncionario($result['idfuncionario']);
		$this->setNome($result['nome']);
		$this->setNomepai($result['nomepai']);
		$this->setNomemae($result['nomemae']);
		$this->setGenero($result['genero']);
		$this->setProvincia($result['provincia']);
		$this->setDatanascimento($result['datanascimento']);
		$this->setEstadocivil($result['estadocivil']);
		$this->setIdcategoria($result['idcategoria']);
		$this->setIddepartamento($result['iddepartamento']);
		$this->setIdutilizador($result['idutilizador']);
		$this->setTelefone($result['telefone']);
		$this->setEndereco($result['endereco']);
		$this->setEmail($result['email']);
		$this->setFoto($result['foto']);
		$this->setBi($result['bi']);
		$this->setBanco($result['banco']);
		$this->setConta($result['conta']);
		$this->setIban($result['iban']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Funcionario
	 */
	public static function findById(PDO $db,$idfuncionario) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$idfuncionario);
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
		$o=new Funcionario();
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
		$stmt->bindValue(1,$this->getIdfuncionario());
		$stmt->bindValue(2,$this->getNome());
		$stmt->bindValue(3,$this->getNomepai());
		$stmt->bindValue(4,$this->getNomemae());
		$stmt->bindValue(5,$this->getGenero());
		$stmt->bindValue(6,$this->getProvincia());
		$stmt->bindValue(7,$this->getDatanascimento());
		$stmt->bindValue(8,$this->getEstadocivil());
		$stmt->bindValue(9,$this->getIdcategoria());
		$stmt->bindValue(10,$this->getIddepartamento());
		$stmt->bindValue(11,$this->getIdutilizador());
		$stmt->bindValue(12,$this->getTelefone());
		$stmt->bindValue(13,$this->getEndereco());
		$stmt->bindValue(14,$this->getEmail());
		$stmt->bindValue(15,$this->getFoto());
		$stmt->bindValue(16,$this->getBi());
		$stmt->bindValue(17,$this->getBanco());
		$stmt->bindValue(18,$this->getConta());
		$stmt->bindValue(19,$this->getIban());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getIdfuncionario()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getNome());
			$stmt->bindValue(2,$this->getNomepai());
			$stmt->bindValue(3,$this->getNomemae());
			$stmt->bindValue(4,$this->getGenero());
			$stmt->bindValue(5,$this->getProvincia());
			$stmt->bindValue(6,$this->getDatanascimento());
			$stmt->bindValue(7,$this->getEstadocivil());
			$stmt->bindValue(8,$this->getIdcategoria());
			$stmt->bindValue(9,$this->getIddepartamento());
			$stmt->bindValue(10,$this->getIdutilizador());
			$stmt->bindValue(11,$this->getTelefone());
			$stmt->bindValue(12,$this->getEndereco());
			$stmt->bindValue(13,$this->getEmail());
			$stmt->bindValue(14,$this->getFoto());
			$stmt->bindValue(15,$this->getBi());
			$stmt->bindValue(16,$this->getBanco());
			$stmt->bindValue(17,$this->getConta());
			$stmt->bindValue(18,$this->getIban());
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
			$this->setIdfuncionario($lastInsertId);
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
		$stmt->bindValue(20,$this->getIdfuncionario());
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
		$stmt->bindValue(1,$this->getIdfuncionario());
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
		return self::hashToDomDocument($this->toHash(), 'Funcionario');
	}

	/**
	 * get single Funcionario instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Funcionario
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Funcionario();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of Funcionario from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Funcionario[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Funcionario') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>