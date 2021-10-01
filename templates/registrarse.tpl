{include file="head.tpl"}
{include file="volver.tpl"}

<form action="registrarusuario" method="POST">
    <div class="form-register">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
        <input type="text" class="form-control" name="user" placeholder="Usuario" required>
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
        <button type="submit" class="btn btn-primary">Registrarse</button>

    </div>
</form>


{include file="footer.tpl"}