<?php
/* Smarty version 4.2.1, created on 2023-01-02 22:17:35
  from 'C:\xampp\htdocs\tiendaOnline1\template\tienda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b349ef767472_79366610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '765afe8cc479b31d332101d8f09fb2ff4ba7081a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\tienda.tpl',
      1 => 1560724894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63b349ef767472_79366610 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="seccionMargenes text-center my-5">
        <div class="row contenedorProductos">
            <?php echo $_smarty_tpl->tpl_vars['listado']->value;?>

        </div>
        <div class="espacioPequeno"></div>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
