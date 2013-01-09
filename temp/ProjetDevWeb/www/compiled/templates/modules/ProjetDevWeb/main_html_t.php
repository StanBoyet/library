<?php 
 require_once('/Users/Stan/Dropbox/Documents/HEI/ITI/Miniprojet/jelix/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_231ef5883b1aeb9c89d8d543b6941baa($t){

}
function template_231ef5883b1aeb9c89d8d543b6941baa($t){
?><header>
    <h1 class="apptitle">Bonjour monsieur sur ce projet
    </h1>
</header>

<div class="menu">
    <h1>Menu</h1><br>
    <ul>
        <li><a href=<?php jtpl_function_html_jurl( $t,'ProjetDevWeb~commandes@classic');?>>Liste des Commandes passées</a></li>
        <li><a href=<?php jtpl_function_html_jurl( $t,'ProjetDevWeb~produits@classic');?>>Liste des Produits</a></li>
    </ul>
</div>
    
    <div class="content">
        <h1>Voici un aperçu graphique de la base de donnée utilisée : (passez votre sourie dessus pour un zoom)</h1>
        <img src="src/bdd.jpg" title="bdd" onmouseover="this.height=this.height*1.3; this.width=this.width*1.3;" onmouseout="this.height=this.height/1.3; this.width=this.width/1.3"/>
    </div><?php 
}
?>