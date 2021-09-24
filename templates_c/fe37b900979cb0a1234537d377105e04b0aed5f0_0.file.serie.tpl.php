<?php
/* Smarty version 3.1.39, created on 2021-09-23 22:42:59
  from 'C:\xampp\htdocs\TPE_Web_2\templates\serie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ce6d3045709_57099045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe37b900979cb0a1234537d377105e04b0aed5f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web_2\\templates\\serie.tpl',
      1 => 1632429767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_614ce6d3045709_57099045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
   <input type="text" name="serie" value="<?php echo $_smarty_tpl->tpl_vars['serie']->value->id_serie;?>
" class="hidden-windows">
    <h1 class="titulo tit-info"><?php echo $_smarty_tpl->tpl_vars['serie']->value->nombre;?>
</h1>
     <img src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    <label class="font">Actor principal: <?php echo $_smarty_tpl->tpl_vars['serie']->value->actor_principal;?>
</label>
    <h2 class="titulo">Sinopsis</h2>
    <p class="font"><?php echo $_smarty_tpl->tpl_vars['serie']->value->sinopsis;?>
</p> 
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
