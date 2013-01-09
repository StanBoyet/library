<?php 
function template_meta_5672a8e20e1d48652efe2bb5a1422847($t){
if(isset($t->_vars['FORMULAIRE'])) { $t->_vars['FORMULAIRE']->getBuilder('html')->outputMetaContent($t);}

}
function template_5672a8e20e1d48652efe2bb5a1422847($t){
?><div class="block">
<h2>Modifier un module</h2>
    <div class="blockcontent">
    <?php  $formfull = $t->_vars['FORMULAIRE'];
    $formfullBuilder = $formfull->getBuilder('html');
    $formfullBuilder->setAction( 'ProjetDevWeb~savecommandes@classic',array());
    $formfullBuilder->outputHeader(array());
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>
    </div>   
    </div><?php 
}
?>