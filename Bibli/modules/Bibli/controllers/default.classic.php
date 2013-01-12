<?php
/**
* @package   Bibli
* @subpackage Bibli
* @author    Stanislas BOYET
* @copyright 2012 BOYET
* @link      https://github.com/StanBoyet/
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        
        /* -----------------------------------------------------
         * On charge les différentes feuilles CSS et fichiers JS
           ----------------------------------------------------- */
        
        $rep = $this->getResponse('html');

        $rep->bodyTpl = "main";

        $path = jApp::config()->urlengine['jelixWWWPath'];

        //Importation du thème CSS de Jelix
        $rep->AddCssLink($path . 'design/jelix.css');

        //Importation du thème CSS de jQuery
        $rep->AddCssLink($path . 'design/jquery-ui.css');

        //Importation du thème CSS de Bootstrap
        $rep->AddCssLink($path . 'design/bootstrap.css');
        
        //Importation du thème CSS de style
        $rep->AddCssLink($path . 'design/style.css');

        //Importation du script jQuery
        $rep->AddJsLink($path . 'js/jquery.js');        

        //Importation du script jQuery
        $rep->AddJsLink($path . 'js/bootstrap.js');

        //Importation du script jQuery UI
        $rep->AddJsLink($path . 'js/jquery-ui.js');

        //Importation du script dédié
        $rep->AddJsLink($path . 'js/script.js');
        
        //Importation du CSS pour les petits écrans (utilisation en média queries)
        $pathSmallScreen = $path . 'design/styleSmall.css';
        
        
        /* -----------------------------------------------------
         * -- On vérifie que l'utilisateur soit bien connecté --
           ----------------------------------------------------- */
        
        if (jAuth::isConnected()) {
            $user = jAuth::getUserSession();
            $admin = $user->admin;
            
            if($admin == '1'){
                $rep->body->assign('ADMINBOOL',$admin);
                
                $rep->body->assign('ADMINMESSAGE', 'You are currently connected in administrator mode');
                
                // On crée une condition sur la DAO afin de charge les users en ordre alphabétique
                $orderASC = jDao::createConditions();
                $orderASC->addItemOrder('name', 'asc');

                $loanBookFactory = jDao::get("loanBook");
                $listOfAllLoanedBooks = $loanBookFactory->findBy($orderASC);
                
                
                $booksFactory = jDao::get("book");
                $listOfAllBooks = $booksFactory->findAll();
                
                
                $rep->body->assign('LOANEDBOOKS', $listOfAllLoanedBooks);
                $rep->body->assign('ALLBOOKS', $listOfAllBooks);
                
                                
            }  else {
                //Si l'utilisateur n'a pas les droits d'admin
                $rep->body->assign('ADMINMESSAGE', '');
            }
            
        }
        
        
        //Message d'accueil
        $rep->body->assign('WELCOMEUSER', 'Welcome '. $user->firstname . ' ' . $user->name);
        
        $rep->body->assign('PATHSMALLSCREEN', $pathSmallScreen);
        
        return $rep;
    }
    
    function updateBook(){
        
        
        $rep = $this->getResponse('html');

        $rep->bodyTpl = "book";
        
        $path = jApp::config()->urlengine['jelixWWWPath'];
        
        //Importation du thème CSS de Jelix
        $rep->AddCssLink($path . 'design/jelix.css');
        
        //Importation du thème CSS de jQuery
        $rep->AddCssLink($path . 'design/jquery-ui.css');

        //Importation du thème CSS de Bootstrap
        $rep->AddCssLink($path . 'design/bootstrap.css');
        
        //Importation du thème CSS de style
        $rep->AddCssLink($path . 'design/style.css');
        
        //Importation du script jQuery
        $rep->AddJsLink($path . 'js/jquery-1.8.3.js');
        
        //Importation du script jQuery UI
        $rep->AddJsLink($path . 'js/jquery-ui-1.9.2.js');
        
        //Importation du script dédié
        $rep->AddJsLink($path . 'js/script.js');
               
        // Récupère l'idBook passé en paramètre, sinon 1.
        $paramIdBook = $this->param('idBook', 1);
        
        //Création du formulaire à partir du .xml
        $bookForm = jForms::create("Bibli~book", $paramIdBook);
        
        $bookForm->initFromDao("Bibli~book");
        
        $rep->body->assign('BOOKFORM', $bookForm);
        
        return $rep;
        
    }
    
    function saveForm(){
        
        $bookForm = jForms::fill("Bibli~book", $this->param('idBook'));
        $bookForm->initFromRequest();
        
        if ($bookForm->check()){
            $result = $bookForm->prepareDaoFromControls('Bibli~book');
            
            $bookFactory = $result['dao'];
            $courantBook = $result['daorec'];
            
            $bookFactory->update($courantBook);
        }
        
        //Que le formulaire soit correcte ou non, on redirige vers l'accueil
        
        return $this->index();
        
    }
    
    function deleteBook(){
        
        $bookToDeleteFactory = jDao::get("book");
        $bookToDeleteFactory->delete($this->param('idBook'));
        
        return $this->index();
        
    }
    
    function newUser(){
        
        $rep = $this->getResponse('html');

        $rep->bodyTpl = "newUser";
        
        $path = jApp::config()->urlengine['jelixWWWPath'];
        
        //Importation du thème CSS de Jelix
        $rep->AddCssLink($path . 'design/jelix.css');
        
        //Importation du thème CSS de jQuery
        $rep->AddCssLink($path . 'design/jquery-ui.css');

        //Importation du thème CSS de Bootstrap
        $rep->AddCssLink($path . 'design/bootstrap.css');
        
        //Importation du thème CSS de style
        $rep->AddCssLink($path . 'design/style.css');
        
        //Importation du script jQuery
        $rep->AddJsLink($path . 'js/jquery-1.8.3.js');
        
        //Importation du script jQuery UI
        $rep->AddJsLink($path . 'js/jquery-ui-1.9.2.js');
        
        //Importation du script dédié
        $rep->AddJsLink($path . 'js/script.js');
               
              
        //Création du formulaire à partir du .xml
        $newUserForm = jForms::create("Bibli~newUser");
        
        //$newUserForm->initFromDao("Bibli~user");
        
        $rep->body->assign('NEWUSERFORM', $newUserForm);
        
        return $rep;
        
    }
    
    function saveNewUser(){
        
        $newUserForm = jForms::fill("Bibli~newUser");
        $newUserForm->initFromRequest();
        
        if ($newUserForm->check()){
            $result = $newUserForm->prepareDaoFromControls('Bibli~user');
            
            $newUserFactory = $result['dao'];
            $courantUser = $result['daorec'];
            
            $newUserFactory->insert($courantUser);
        }
        
        //Que le formulaire soit correcte ou non, on redirige vers l'accueil
        
        return $this->index();
        
    }
   
}
