{if isset($user)}
    <a href="logout">
        <button class="linea colorFondo">Salir</button>
    </a>
{else}
    <a href="login">
        <button type="button" class="linea colorFondo">Iniciar Sesión</button>
    </a>
{/if}