<?php  require_once ( JELIX_LIB_PATH .'dao/jDaoRecordBase.class.php');
 require_once ( JELIX_LIB_PATH .'dao/jDaoFactoryBase.class.php');

class cDaoRecord_ProjetDevWeb_Jx_produit_Jx_mysql extends jDaoRecordBase {
 public $RefProduit=0;
 public $NomProduit;
 public $NumFournisseur;
 public $CodeCategorie;
 public $QuantiteUnitaire;
 public $PrixUnitaire;
 public $UnitesStock;
 public $UnitesCommandees;
 public $NiveauReapprovisionnement;
 public $Indisponible;
   public function getSelector() { return "ProjetDevWeb~produit"; }
   public function getProperties() { return cDao_ProjetDevWeb_Jx_produit_Jx_mysql::$_properties; }
   public function getPrimaryKeyNames() { return cDao_ProjetDevWeb_Jx_produit_Jx_mysql::$_pkFields; }
}

class cDao_ProjetDevWeb_Jx_produit_Jx_mysql extends jDaoFactoryBase {
   protected $_tables = array (
  'produit' => 
  array (
    'name' => 'produit',
    'realname' => 'produit',
    'pk' => 
    array (
      0 => 'RefProduit',
    ),
    'fields' => 
    array (
      0 => 'RefProduit',
      1 => 'NomProduit',
      2 => 'NumFournisseur',
      3 => 'CodeCategorie',
      4 => 'QuantiteUnitaire',
      5 => 'PrixUnitaire',
      6 => 'UnitesStock',
      7 => 'UnitesCommandees',
      8 => 'NiveauReapprovisionnement',
      9 => 'Indisponible',
    ),
  ),
);
   protected $_primaryTable = 'produit';
   protected $_selectClause='SELECT `produit`.`RefProduit`, `produit`.`NomProduit`, `produit`.`NumFournisseur`, `produit`.`CodeCategorie`, `produit`.`QuantiteUnitaire`, `produit`.`PrixUnitaire`, `produit`.`UnitesStock`, `produit`.`UnitesCommandees`, `produit`.`NiveauReapprovisionnement`, `produit`.`Indisponible`';
   protected $_fromClause;
   protected $_whereClause='';
   protected $_DaoRecordClassName='cDaoRecord_ProjetDevWeb_Jx_produit_Jx_mysql';
   protected $_daoSelector = 'ProjetDevWeb~produit';
   public static $_properties = array (
  'RefProduit' => 
  array (
    'name' => 'RefProduit',
    'fieldName' => 'RefProduit',
    'regExp' => NULL,
    'required' => true,
    'requiredInConditions' => true,
    'isPK' => true,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
  'NomProduit' => 
  array (
    'name' => 'NomProduit',
    'fieldName' => 'NomProduit',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'produit',
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
  'NumFournisseur' => 
  array (
    'name' => 'NumFournisseur',
    'fieldName' => 'NumFournisseur',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
  'CodeCategorie' => 
  array (
    'name' => 'CodeCategorie',
    'fieldName' => 'CodeCategorie',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'int',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
  'QuantiteUnitaire' => 
  array (
    'name' => 'QuantiteUnitaire',
    'fieldName' => 'QuantiteUnitaire',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'varchar',
    'unifiedType' => 'varchar',
    'table' => 'produit',
    'updatePattern' => '%s',
    'insertPattern' => '%s',
    'selectPattern' => '%s',
    'sequenceName' => '',
    'maxlength' => 30,
    'minlength' => NULL,
    'ofPrimaryTable' => true,
    'defaultValue' => NULL,
    'autoIncrement' => false,
  ),
  'PrixUnitaire' => 
  array (
    'name' => 'PrixUnitaire',
    'fieldName' => 'PrixUnitaire',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'double',
    'unifiedType' => 'decimal',
    'table' => 'produit',
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
  'UnitesStock' => 
  array (
    'name' => 'UnitesStock',
    'fieldName' => 'UnitesStock',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'smallint',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
  'UnitesCommandees' => 
  array (
    'name' => 'UnitesCommandees',
    'fieldName' => 'UnitesCommandees',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'smallint',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
  'NiveauReapprovisionnement' => 
  array (
    'name' => 'NiveauReapprovisionnement',
    'fieldName' => 'NiveauReapprovisionnement',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'smallint',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
  'Indisponible' => 
  array (
    'name' => 'Indisponible',
    'fieldName' => 'Indisponible',
    'regExp' => NULL,
    'required' => false,
    'requiredInConditions' => false,
    'isPK' => false,
    'isFK' => false,
    'datatype' => 'bit',
    'unifiedType' => 'integer',
    'table' => 'produit',
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
);
   public static $_pkFields = array('RefProduit');
 
public function __construct($conn){
   parent::__construct($conn);
   $this->_fromClause = ' FROM `'.$this->_conn->prefixTable('produit').'` AS `produit`';
}
   public function getProperties() { return self::$_properties; }
   public function getPrimaryKeyNames() { return self::$_pkFields;}
 
 protected function _getPkWhereClauseForSelect($pk){
   extract($pk);
 return ' WHERE  `produit`.`RefProduit`'.' = '.intval($RefProduit).'';
}
 
protected function _getPkWhereClauseForNonSelect($pk){
   extract($pk);
   return ' where  `RefProduit`'.' = '.intval($RefProduit).'';
}
public function insert ($record){
    $query = 'INSERT INTO `'.$this->_conn->prefixTable('produit').'` (
`RefProduit`,`NomProduit`,`NumFournisseur`,`CodeCategorie`,`QuantiteUnitaire`,`PrixUnitaire`,`UnitesStock`,`UnitesCommandees`,`NiveauReapprovisionnement`,`Indisponible`
) VALUES (
'.($record->RefProduit === null ? 'NULL' : intval($record->RefProduit)).', '.($record->NomProduit === null ? 'NULL' : $this->_conn->quote2($record->NomProduit,false)).', '.($record->NumFournisseur === null ? 'NULL' : intval($record->NumFournisseur)).', '.($record->CodeCategorie === null ? 'NULL' : intval($record->CodeCategorie)).', '.($record->QuantiteUnitaire === null ? 'NULL' : $this->_conn->quote2($record->QuantiteUnitaire,false)).', '.($record->PrixUnitaire === null ? 'NULL' : jDb::floatToStr($record->PrixUnitaire)).', '.($record->UnitesStock === null ? 'NULL' : intval($record->UnitesStock)).', '.($record->UnitesCommandees === null ? 'NULL' : intval($record->UnitesCommandees)).', '.($record->NiveauReapprovisionnement === null ? 'NULL' : intval($record->NiveauReapprovisionnement)).', '.($record->Indisponible === null ? 'NULL' : intval($record->Indisponible)).'
)';
   $result = $this->_conn->exec ($query);
    return $result;
}
public function update ($record){
   $query = 'UPDATE `'.$this->_conn->prefixTable('produit').'` SET 
 `NomProduit`= '.($record->NomProduit === null ? 'NULL' : $this->_conn->quote2($record->NomProduit,false)).', `NumFournisseur`= '.($record->NumFournisseur === null ? 'NULL' : intval($record->NumFournisseur)).', `CodeCategorie`= '.($record->CodeCategorie === null ? 'NULL' : intval($record->CodeCategorie)).', `QuantiteUnitaire`= '.($record->QuantiteUnitaire === null ? 'NULL' : $this->_conn->quote2($record->QuantiteUnitaire,false)).', `PrixUnitaire`= '.($record->PrixUnitaire === null ? 'NULL' : jDb::floatToStr($record->PrixUnitaire)).', `UnitesStock`= '.($record->UnitesStock === null ? 'NULL' : intval($record->UnitesStock)).', `UnitesCommandees`= '.($record->UnitesCommandees === null ? 'NULL' : intval($record->UnitesCommandees)).', `NiveauReapprovisionnement`= '.($record->NiveauReapprovisionnement === null ? 'NULL' : intval($record->NiveauReapprovisionnement)).', `Indisponible`= '.($record->Indisponible === null ? 'NULL' : intval($record->Indisponible)).'
 where  `RefProduit`'.' = '.intval($record->RefProduit).'
';
   $result = $this->_conn->exec ($query);
   return $result;
 }


}
?>