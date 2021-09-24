<?php
/* Smarty version 3.1.39, created on 2021-09-24 00:06:08
  from 'C:\xampp\htdocs\TPE_Web_2\templates\listaSeries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cfa502c9e02_50224827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b338de1d3b49d599a64207563542dffb12aedbe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web_2\\templates\\listaSeries.tpl',
      1 => 1632434766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_614cfa502c9e02_50224827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="titulo">Lista De Series</h1>
        <table class="tableListaSerie" >
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Sinopsis</th>
                <th>Actor</th>
                <th>Portada</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
            <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['gen']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['gen']->value->sinopsis;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['gen']->value->actor_principal;?>
</td>
                <td>
                    <img src="public/images/img-noDisponible.png" alt="Imagen no disponible" class="imagen-tabla">
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
