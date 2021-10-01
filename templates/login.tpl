{include file="head.tpl"}
{include file="volver.tpl"}
<div class="box-login">    
    <form action="iniciarSesion" method="post" class="form-login">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        {if !empty($error)}
            <label class="text-info">{$error}</label>
        {/if}
        
        <input type="submit" value="Ingresar" class="btn-ingreso">
    </form>
    <a href="registro">
        <button class="btn-registrarse">Registrarse</button>
    </a>
</div>

{include file="footer.tpl"}