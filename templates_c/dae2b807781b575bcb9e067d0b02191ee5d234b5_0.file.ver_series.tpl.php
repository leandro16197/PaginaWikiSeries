<?php
/* Smarty version 3.1.39, created on 2021-09-23 23:38:07
  from 'C:\xampp\htdocs\TPE_Web_2\templates\ver_series.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cf3bf7b8079_77360605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae2b807781b575bcb9e067d0b02191ee5d234b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web_2\\templates\\ver_series.tpl',
      1 => 1632433082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_614cf3bf7b8079_77360605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="showSeries" class="nav-link">
    <button type="button" class="btn btn-danger">Lista de series</button>
</a>

<section>
    <h1 class="titulo">Series Destacadas</h1>
    <ul class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_series']->value, 'serie');
$_smarty_tpl->tpl_vars['serie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serie']->value) {
$_smarty_tpl->tpl_vars['serie']->do_else = false;
?>
            <li class="card text-white bg-info mb-3" class="margenImgIndex">
                <img class="card altura" src="public/images/img-noDisponible.png" alt="Imagen no disponible">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['serie']->value->nombre;?>
</h5>
                    <a href="infoSerie/<?php echo $_smarty_tpl->tpl_vars['serie']->value->id_serie;?>
" class="btn btn-primary">Ver informacion</a>
                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</section>

<div class="box-nuevaserie">
            <label class="titulo-agregar">AGREGAR SERIE</label>
                        <form action="addSerie" method="POST" class='form-nuevaserie' enctype="multipart/form-data" required >
                <input type="text" name="nombre" placeholder="Nombre" required>
                <textarea name="sinopsis" placeholder="Sinopsis" required></textarea>
                <input type="text" name="actor" placeholder="Actor" required>
                                <select class="opciones" name="genero" required>
                 <option value="" disable>Seleccione una opción</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_generos']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['gen']->value->id_genero;?>
><?php echo $_smarty_tpl->tpl_vars['gen']->value->nombreGen;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <input type="submit" value="Insertar" class="btn-ingreso">
            </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
