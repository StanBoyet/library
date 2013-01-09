<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_ProjetDevWeb_Jx_commande_Jx_mysql extends jDaoRecordBase {
 public $NumCommande=0;
 public $CodeClient;
 public $NumEmploye;
 public $DateCommande;
 public $LivrerAvant;
 public $DateEnvoi;
 public $Destinataire;
 public $AdresseLivraison;
 public $VilleLivraison;
 public $RegionLivraison;
 public $CodePostalLivraison;
 public $PaysLivraison;
   public function getSelector() { return "ProjetDevWeb~commande"; }
   public function getProperties() { return cDao_ProjetDevWeb_Jx_commande_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_ProjetDevWeb_Jx_commande_Jx_mysql::$_pkFields; }
}

class cDao_ProjetDevWeb_Jx_commande_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'commande' => 
  array (
    'name' => 'commande',
    'realname' => 'commande',
    'pk' => 
    array (
      0 => 'NumCommande',
    ),
    'fields' => 
    array (
      0 => 'NumCommande',
      1 => 'CodeClient',
      2 => 'NumEmploye',
      3 => 'DateCommande',
      4 => 'LivrerAvant',
      5 => 'DateEnvoi',
      6 => 'Destinataire',
      7 => 'AdresseLivraison',
      8 => 'VilleLivraison',
      9 => 'RegionLivraison',
      10 => 'CodePostalLivraison',
      11 => 'PaysLivraison',
    ),
  ),
);
   protected $_primaryTable = 'commande';
   protected $_selectClause='SELECT `commande`.`NumCommande`, `commande`.`CodeClient`, `commande`.`NumEmploye`, `commande`.`DateCommande`, `commande`.`LivrerAvant`, `commande`.`DateEnvoi`, `commande`.`Destinataire`, `commande`.`AdresseLivraison`, `commande`.`VilleLivraison`, `commande`.`RegionLivraison`, `commande`.`CodePostalLivraison`, `commande`.`PaysLivraison`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_ProjetDevWeb_Jx_commande_Jx_mysql';
   protected $_daoSelector = 'ProjetDevWeb~commande';
   public static $_properties = array (
  'NumCommande' => 
  array (
    'name' => 'NumCommande',
    'fieldName' => 'NumCommande',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'commande',
    'updatePattern' => '',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => 0,
    'autoIncrement' => false,
  ),
  'CodeClient' => 
  array (
    'name' => 'CodeClient',
    'fieldName' => 'CodeClient',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 5,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'NumEmploye' => 
  array (
    'name' => 'NumEmploye',
    'fieldName' => 'NumEmploye',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'DateCommande' => 
  array (
    'name' => 'DateCommande',
    'fieldName' => 'DateCommande',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'LivrerAvant' => 
  array (
    'name' => 'LivrerAvant',
    'fieldName' => 'LivrerAvant',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'DateEnvoi' => 
  array (
    'name' => 'DateEnvoi',
    'fieldName' => 'DateEnvoi',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'date',
    'unifiedType' => 'date',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => NULL,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'Destinataire' => 
  array (
    'name' => 'Destinataire',
    'fieldName' => 'Destinataire',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 40,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'AdresseLivraison' => 
  array (
    'name' => 'AdresseLivraison',
    'fieldName' => 'AdresseLivraison',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 60,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'VilleLivraison' => 
  array (
    'name' => 'VilleLivraison',
    'fieldName' => 'VilleLivraison',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 15,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'RegionLivraison' => 
  array (
    'name' => 'RegionLivraison',
    'fieldName' => 'RegionLivraison',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 15,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'CodePostalLivraison' => 
  array (
    'name' => 'CodePostalLivraison',
    'fieldName' => 'CodePostalLivraison',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 10,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'PaysLivraison' => 
  array (
    'name' => 'PaysLivraison',
    'fieldName' => 'PaysLivraison',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'commande',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 15,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
);
   public static $_pkFields = array('NumCommande');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('commande').'` AS `commande`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `commande`.`NumCommande`'.' = '.intval($NumCommande).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `NumCommande`'.' = '.intval($NumCommande).'';
}
public function insert ($record){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('commande').'` (
`NumCommande`,`CodeClient`,`NumEmploye`,`DateCommande`,`LivrerAvant`,`DateEnvoi`,`Destinataire`,`AdresseLivraison`,`VilleLivraison`,`RegionLivraison`,`CodePostalLivraison`,`PaysLivraison`
) VALUES (
'.($record->NumCommande === null ? 'NULL' : intval($record->NumCommande)).', '.($record->CodeClient === null ? 'NULL' : $this->_conn->quote2($record->CodeClient,false)).', '.($record->NumEmploye === null ? 'NULL' : intval($record->NumEmploye)).', '.($record->DateCommande === null ? 'NULL' : $this->_conn->quote2($record->DateCommande,false)).', '.($record->LivrerAvant === null ? 'NULL' : $this->_conn->quote2($record->LivrerAvant,false)).', '.($record->DateEnvoi === null ? 'NULL' : $this->_conn->quote2($record->DateEnvoi,false)).', '.($record->Destinataire === null ? 'NULL' : $this->_conn->quote2($record->Destinataire,false)).', '.($record->AdresseLivraison === null ? 'NULL' : $this->_conn->quote2($record->AdresseLivraison,false)).', '.($record->VilleLivraison === null ? 'NULL' : $this->_conn->quote2($record->VilleLivraison,false)).', '.($record->RegionLivraison === null ? 'NULL' : $this->_conn->quote2($record->RegionLivraison,false)).', '.($record->CodePostalLivraison === null ? 'NULL' : $this->_conn->quote2($record->CodePostalLivraison,false)).', '.($record->PaysLivraison === null ? 'NULL' : $this->_conn->quote2($record->PaysLivraison,false)).'
)';
   $result = $this->_conn->exec ($query);
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('commande').'` SET 
 `CodeClient`= '.($record->CodeClient === null ? 'NULL' : $this->_conn->quote2($record->CodeClient,false)).', `NumEmploye`= '.($record->NumEmploye === null ? 'NULL' : intval($record->NumEmploye)).', `DateCommande`= '.($record->DateCommande === null ? 'NULL' : $this->_conn->quote2($record->DateCommande,false)).', `LivrerAvant`= '.($record->LivrerAvant === null ? 'NULL' : $this->_conn->quote2($record->LivrerAvant,false)).', `DateEnvoi`= '.($record->DateEnvoi === null ? 'NULL' : $this->_conn->quote2($record->DateEnvoi,false)).', `Destinataire`= '.($record->Destinataire === null ? 'NULL' : $this->_conn->quote2($record->Destinataire,false)).', `AdresseLivraison`= '.($record->AdresseLivraison === null ? 'NULL' : $this->_conn->quote2($record->AdresseLivraison,false)).', `VilleLivraison`= '.($record->VilleLivraison === null ? 'NULL' : $this->_conn->quote2($record->VilleLivraison,false)).', `RegionLivraison`= '.($record->RegionLivraison === null ? 'NULL' : $this->_conn->quote2($record->RegionLivraison,false)).', `CodePostalLivraison`= '.($record->CodePostalLivraison === null ? 'NULL' : $this->_conn->quote2($record->CodePostalLivraison,false)).', `PaysLivraison`= '.($record->PaysLivraison === null ? 'NULL' : $this->_conn->quote2($record->PaysLivraison,false)).'
 where  `NumCommande`'.' = '.intval($record->NumCommande).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>