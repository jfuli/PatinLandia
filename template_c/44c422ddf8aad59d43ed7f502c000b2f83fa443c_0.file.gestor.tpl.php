<?php
/* Smarty version 4.2.1, created on 2023-01-02 23:37:32
  from 'C:\xampp\htdocs\tiendaOnline1\template\gestor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b35cacdfb497_25890296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44c422ddf8aad59d43ed7f502c000b2f83fa443c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\gestor.tpl',
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
function content_63b35cacdfb497_25890296 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <div class="perfil seccionMargenes">
            <section class="separacion"></section>
            <fieldset class="cajaLogin">
                <div>
                    <h3 class="text-center text-uppercase my-4">Gestor de <?php echo $_smarty_tpl->tpl_vars['gestor']->value;?>
</h3>
                    <?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

                </div>
            </fieldset>
            <section class="separacion"></section>
        </div>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
