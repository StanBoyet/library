<!DOCTYPE html>
<link rel="stylesheet" media="screen and (max-width: 940px)" href="{$PATHSMALLSCREEN}" type="text/css" />
<div class="row-fluid">
    
 
    <div class="span12">
        <h1 class="apptitle">{$WELCOMEUSER}<br/>
            <span class="welcome">{$ADMINMESSAGE}</span>
        </h1>
        <br />
        {if($ADMINBOOL == '1')}<!-- Test si on se trouve en compte administrateur -->
            <div class="row-fluid" id="conteneur">
                <div class="span2 side" id="home">
                    <ul class="well nav nav-tabs nav-stacked" id="sidebar">
                    Accéder aux livres :<br />
                    <li class="">
                            <a href="#home">Home</a>
                        </li>
                        {foreach $ALLBOOKS as $COURANTBOOK}
                        <li class="">
                            <a href="#{$COURANTBOOK->idBook}">{$COURANTBOOK->title}</a>
                        </li>
                        {/foreach}
                    </ul>
                </div>
            
            <div class="span10">
                <div class="hero-unit">
                    <h2 class="subtitle">List of loaned books by users</h2>

                    <ul>
                    {foreach $LOANEDBOOKS as $COURANTLOANEDBOOK}
                        <li><strong>{$COURANTLOANEDBOOK->name}</strong></li>
                        <ul>
                            <li>
                                {$COURANTLOANEDBOOK->bookTitle}
                            </li>                    
                        </ul>
                    {/foreach}


                    </ul>


                </div>

                    <hr>

                    <div class="hero-unit">
                        <h2 class="subtitle">List of all the books</h2>
                        <div id="books" class="row-fluid">

                            <ul>

                                {foreach $ALLBOOKS as $COURANTBOOK}
                                    <article id="{$COURANTBOOK->idBook}">
                                        <header>
                                            <li>

                                                <strong>{$COURANTBOOK->title}</strong> - 

                                                <a href="{jurl 'Bibli~updateBook@classic', array('idBook'=>$COURANTBOOK->idBook)}">
                                                    Modifier
                                                </a>

                                                <a href="{jurl 'Bibli~deleteBook@classic', array('idBook'=>$COURANTBOOK->idBook)}"
                                                   style="visibility: 
                                                   {foreach $LOANEDBOOKS as $COURANTLOANEDBOOK}
                                                       {if $COURANTLOANEDBOOK->idBook == $COURANTBOOK->idBook}
                                                           hidden
                                                       {/if}
                                                   {/foreach}
                                                   "onClick="return confirmDelete();" class="deleteLink">
                                                   - Supprimer
                                                </a>

                                            </li>
                                        </header>
                                        <section>
                                            <ul>
                                                <li>
                                                    <ul class="inline">Author : 
                                                            <li class="authorName ">{$COURANTBOOK->authorName}</li>
                                                            <li class="authorFirstname">{$COURANTBOOK->authorFirstname}</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Edition : {$COURANTBOOK->edition}
                                                </li>
                                                <li>
                                                    Summary : <p class="summary">{$COURANTBOOK->summary}</p>
                                                </li>
                                            </ul>
                                        </section>
                                    </article>
                                {/foreach}

                            </ul>

                        </div>
                    </div>

                    <div class="alert alert-info">
                        You can only delete books which hadn't been loaned by users.
                    If so, ask (gently) them to return it in order to complete the process of deletion.
                    </div>

                </div><!-- END SPAN10 -->
                                
            </div><!-- END ROW-FLUID -->
        {/if}<!-- Fin de test admin -->
        
       <footer>
        <input type="button" value="Logout" onClick="window.location.href='{jurl 'jauth~login:out'}'" class="btn btn-small btn-danger ">
    </footer>  
    <hr>
</div>
