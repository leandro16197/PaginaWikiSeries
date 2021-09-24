<?php
/* Smarty version 3.1.39, created on 2021-09-24 00:00:36
  from 'C:\xampp\htdocs\TPE_Web_2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cf904c86b29_08132374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd64663021a1b8c75de6de263ec2324bd1e8cbc3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web_2\\templates\\header.tpl',
      1 => 1632434433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614cf904c86b29_08132374 (Smarty_Internal_Template $_smarty_tpl) {
?><header>  
    <nav class=" navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="btn-secondary nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_smarty_tpl->tpl_vars['tituloNav']->value;?>

            </div>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_generos']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
                    <a class="btn btn-secondary dropdown-item" href=seriePorGenero/<?php echo $_smarty_tpl->tpl_vars['gen']->value-'id_genero';?>
><?php echo $_smarty_tpl->tpl_vars['gen']->value->nombreGen;?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>
    </nav>
</header><?php }
}
