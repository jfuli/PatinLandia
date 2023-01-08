<?php
/* Smarty version 4.2.1, created on 2022-12-07 19:31:26
  from 'C:\xampp\htdocs\PROYECTOS_XAMP\000_PATINLANDIA\tiendaOnlineTodos\PRUEBAS\tiendaOnline1\template\gestorAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6390dbfe04b507_38718706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce88ce08651f7ade51c245422224ece2f8eb8ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS_XAMP\\000_PATINLANDIA\\tiendaOnlineTodos\\PRUEBAS\\tiendaOnline1\\template\\gestorAdmin.tpl',
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
function content_6390dbfe04b507_38718706 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <div class="perfil seccionMargenes">
            <section class="separacion"></section>
            <fieldset class="cajaLogin">
                <div class="my-5">
                    <h1 class="text-center">Gestor de la web</h1>
                    <p class="text-center">Bienvenido de nuevo administrador</p>
                    <form method="post" action="gestorAdmin.php" class="col-12 text-center">
                        <input type="submit" name="botonGestor" class="btn btn-red botonesPago mx-3" value="Productos">
                        <input type="submit" name="botonGestor" class="btn btn-red botonesPago mx-3" value="Mensajes">
                        <input type="submit" name="botonGestor" class="btn btn-red botonesPago mx-3" value="Incidencias">
                        <input type="submit" name="botonGestor" class="btn btn-red botonesPago mx-3" value="Pedidos">
                    </form>
                </div>
                <hr>
                <form action="login.php" method="POST" class="text-center ">
                    <input class="btn btn-red botonesPago my-2 py-2" type="submit" name="desconectar" value="Desconectar">
                </form>
            </fieldset>
            <section class="separacion"></section>
        </div>
    </section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
