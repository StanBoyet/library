<h1>{@jelix~crud.title.view@}</h1>
{formdatafull $form}


<ul class="crud-links-list">
    <li><a href="{jurl $editAction, array('id'=>$id, $offsetParameterName=>$page)}" class="crud-link">{@jelix~crud.link.edit.record@}</a></li>
    <li><a href="{jurl $deleteAction, array('id'=>$id, $offsetParameterName=>$page)}" class="crud-link" onclick="return confirm('{@jelix~crud.confirm.deletion@}')">{@jelix~crud.link.delete.record@}</a></li>
    <li><a href="{jurl $listAction, array($offsetParameterName=>$page)}" class="crud-link">{@jelix~crud.link.return.to.list@}</a></li>
</ul>

