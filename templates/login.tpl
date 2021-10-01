{include file="head.tpl"}
<div class="box-login">
    {include file="volver.tpl"}
    
    <form action="iniciarSesion" method="post" class="form-login">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        {if !empty($error)}
            <label class="msj-error">{$error}</label>
        {/if}
        
        <input type="submit" value="Ingresar" class="btn-ingreso">
    </form>
    <a href="registro">
        <button class="btn-registrarse">Registrarse</button>
    </a>
</div>

{include file="footer.tpl"}