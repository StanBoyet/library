<?php 
 require_once('/Users/Stan/Dropbox/Documents/HEI/ITI/Miniprojet/jelix/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_f24941938556a7d752c81f10f38626b5($t){

}
function template_f24941938556a7d752c81f10f38626b5($t){
?><head><script type="text/javascript" src="../../../js/mes_scripts.js"></script></head>

<header>
    <h1 class="apptitle" align="center"><?php echo $t->_vars['TITLE']; ?>
    </h1>
</header>
    
    <div class="menu">
        <h1>Menu</h1><br>
    <ul>
        <li><a href="http://127.0.0.1/ProjetDevWeb/www/index.php">Accueil</a></li>
        <li><a href=<?php jtpl_function_html_jurl( $t,'ProjetDevWeb~commandes@classic');?>>Liste des Commandes passées</a></li>
        <li><a href=<?php jtpl_function_html_jurl( $t,'ProjetDevWeb~produits@classic');?>>Liste des Produits</a></li>
    </ul>
</div>
    <div class="content">
        <table border="1" align="left">
            <tr align="center" valigne="center">
                        <td align="center">Numéro de commande</td>
                        <td align="center">Code client</td>
                        <td align="center">Numéro employé</td>
                        <td align="center">Date de la commande</td>
                        <td align="center">Livrer avant le</td>
                        <td align="center">Date d'envoi</td>
                        <td align="center">Destinataire</td>
                        <td align="center">Adresse de livraison</td>
                    </tr>
        <?php foreach($t->_vars['ALLCOMMANDE'] as $t->_vars['CourantCommande']):?>
                    <tr align="center" valigne="center">
                        <td align="center"><?php echo $t->_vars['CourantCommande']->NumCommande; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->CodeClient; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->NumEmploye; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->DateCommande; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->LivrerAvant; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->DateEnvoi; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->Destinataire; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantCommande']->AdresseLivraison; ?> <?php echo $t->_vars['CourantCommande']->VilleLivraison; ?> <?php echo $t->_vars['CourantCommande']->RegionLivraison; ?> <?php echo $t->_vars['CourantCommande']->CodePostalLivraison; ?> <?php echo $t->_vars['CourantCommande']->PaysLivraison; ?></td>
                        <td><a href=<?php jtpl_function_html_jurl( $t,'ProjetDevWeb~modifcommandes@classic', array('NumCommande'=>$t->_vars['CourantCommande']->NumCommande));?>><img src="../../../src/modif.png" title="modifier la commande" width="23"></a></td>
                        <td><a onclick="confirmdelete (<?php echo $t->_vars['CourantCommande']->NumCommande; ?>)">Supprimer la commande</a></td>
                    </tr>
            <?php endforeach;?>
            </table>      
    </div><?php 
}
?>