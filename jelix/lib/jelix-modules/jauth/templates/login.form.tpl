<h1 class="apptitle">Welcome in your library<br/>
    <span class="welcome">- 2.0</span>
</h1>

<div id="auth_login_zone">
{if $failed}
<p>{@jauth~auth.failedToLogin@}</p>
{/if}

{if ! $isLogged}
    <div class="row-fluid">
        <div class="span4 offset4 hero-unit">
<form action="{formurl 'jauth~login:in'}" method="post" id="loginForm">
<fieldset>

    <div class="span12">

        <label for="login">{@jauth~auth.login@}</label>
        <input type="text" name="login" id="login" size="9" value="{$login|eschtml}" />
        <label for="password">{@jauth~auth.password@}</label>
        <input type="password" name="password" id="password" size="9" />
        <label class="checkbox">
            <input type="checkbox" name="rememberMe" id="rememberMe" value="1" class="checkbox" />
            {@jauth~auth.rememberMe@}
        </label>
        
        <br />

        {formurlparam 'jauth~login:in'}
        {if !empty($auth_url_return)}
        <input type="hidden" name="auth_url_return" value="{$auth_url_return|eschtml}" />
        {/if}
        <input type="submit" value="{@jauth~auth.buttons.login@}" class="btn btn-primary"/>
    
    </div>
    
</fieldset>
</form>
        </div>
    </div>
{else}
    <p>{$user->login} | <a href="{jurl 'jauth~login:out'}" >{@jauth~auth.buttons.logout@}</a></p>
{/if}
</div>
