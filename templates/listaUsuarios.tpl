{include file="head.tpl"}   
{include file="volver.tpl"}
<a href="modificar">
    <button class="btn-admin">Volver</button>
</a>

<h1 class="titulo">Lista De Usuarios</h1>
        <table class="table-admin" >
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Perfil</th>
                <th>Admin/Invitado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$lista_usuarios item=user}
            <tr>
                <td>{$user->user}</td>
                <td>{$user->nombre}</td>

                {if {$user->admin} == 1}
                    <td>Administrador</td>
                {else}
                    <td>Invitado</td>
                {/if}
                {if {$user->admin} == 1}
                    <td>
                    <a href="modificarperfil/{$user->id_usuario}/0">
                        <button class="btn-admin">Cambiar a Invitado</button>
                    </a>
                </td>
                {else}
                    <td>
                    <a href="modificarperfil/{$user->id_usuario}/1">
                        <button class="btn-admin">Cambiar a Administrador</button>
                    </a>
                </td>
                {/if}
                <td>
                    <a href="eliminarusuario/{$user->id_usuario}">
                        <button class="btn-admin" >Eliminar</button>
                    </a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>

{include file="footer.tpl"}