<?php 
class cForm_ProjetDevWeb_Jx_commande extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhidden('modifcommandes');
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('NumCommande');
$ctrl->datatype= new jDatatypeinteger();
$ctrl->label='Numéro de Commande';
$ctrl->alertRequired='Le nom est obligatoire';
$ctrl->initialReadOnly=true;
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('CodeClient');
$ctrl->label='Code client';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('NumEmploye');
$ctrl->datatype= new jDatatypeinteger();
$ctrl->label='Numéro de l\'employé';
$this->addControl($ctrl);
$ctrl= new jFormsControldate('DateCommande');
$ctrl->label='Date de la commande';
$this->addControl($ctrl);
$ctrl= new jFormsControldate('LivrerAvant');
$ctrl->label='A livrer avant le';
$this->addControl($ctrl);
$ctrl= new jFormsControldate('DateEnvoi');
$ctrl->label='Date d\'envoi';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('Destinataire');
$ctrl->label='Destinataire';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('AdresseLivraison');
$ctrl->label='Adresse';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('VilleLivraison');
$ctrl->label='Ville';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('RegionLivraison');
$ctrl->label='Region';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('CodePostalLivraison');
$ctrl->label='Code Postal';
$this->addControl($ctrl);
$ctrl= new jFormsControlinput('PaysLivraison');
$ctrl->label='Pays';
$this->addControl($ctrl);
$ctrl= new jFormsControlcaptcha('antispam');
$ctrl->label='Vérification anti-spam';
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('submit');
$ctrl->label='Enregistrer';
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
} ?>