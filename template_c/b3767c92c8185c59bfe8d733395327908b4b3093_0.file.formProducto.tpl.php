<?php
/* Smarty version 4.2.1, created on 2023-01-03 00:12:14
  from 'C:\xampp\htdocs\tiendaOnline1\template\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b364ce51a854_31448105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3767c92c8185c59bfe8d733395327908b4b3093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\formProducto.tpl',
      1 => 1672701132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63b364ce51a854_31448105 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <div class="perfil seccionMargenes">
            <section class="separacion"></section>
            <fieldset class="cajaLogin">
                <div class="registrarse col-12 px-auto">
                    <h3 class="text-center text-uppercase my-4">Formulario de productos</h3>
                    <form action="formProducto.php" role="form" method="post" class="formLogin mx-auto row" id="formContact" enctype="multipart/form-data">
                        <?php echo $_smarty_tpl->tpl_vars['formulario']->value;?>

                        <div class='text-center mx-auto'>
                            <input type="submit" value='<?php echo $_smarty_tpl->tpl_vars['btn']->value;?>
' name='enviar' class='shop-btn botonesPago mx-3'>
                            <input type="submit" value="Cancelar" name='enviar' class='primary-btn botonesPago mx-3'>
                        </div>
                    </form>
                </div>
            </fieldset>
            <section class="separacion"></section>
        </div>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
