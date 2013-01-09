<?php 
 require_once('/Users/Stan/Dropbox/Documents/HEI/ITI/Miniprojet/jelix/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_bd9d273a161b2275012fe8333890d83e($t){

}
function template_bd9d273a161b2275012fe8333890d83e($t){
?><header>
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
                        <td align="center">Référence du produit</td>
                        <td align="center">Nom du produit</td>
                        <td align="center">Nom du fournisseur</td>
                        <td align="center">Code de la catégorie du produit</td>
                        <td align="center">Quantité unitaire</td>
                        <td align="center">Prix unitaire</td>
                        <td align="center">Unité stockée</td>
                        <td align="center">Unités commandées</td>
                        <td align="center">Niveau réaprovisionnement</td>
                        <td align="center">Indisponible</td>
                    </tr>
        <?php foreach($t->_vars['ALLPRODUITS'] as $t->_vars['CourantProduit']):?>
                    <tr align="center" valigne="center">
                        <td align="center"><?php echo $t->_vars['CourantProduit']->RefProduit; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->NomProduit; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->NumFournisseur; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->CodeCategorie; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->QuantiteUnitaire; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->PrixUnitaire; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->UnitesStock; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->UnitesCommandees; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->NiveauReapprovisionnement; ?></td>
                        <td align="center"><?php echo $t->_vars['CourantProduit']->Indisponible; ?></td>
                    </tr>
            <?php endforeach;?>
            </table>
            
    </div><?php 
}
?>