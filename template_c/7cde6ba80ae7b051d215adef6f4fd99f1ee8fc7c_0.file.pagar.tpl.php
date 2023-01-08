<?php
/* Smarty version 4.2.1, created on 2022-12-07 19:45:57
  from 'C:\xampp\htdocs\PROYECTOS_XAMP\000_PATINLANDIA\tiendaOnlineTodos\PRUEBAS\tiendaOnline1\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6390df65ed6dc5_62701086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cde6ba80ae7b051d215adef6f4fd99f1ee8fc7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS_XAMP\\000_PATINLANDIA\\tiendaOnlineTodos\\PRUEBAS\\tiendaOnline1\\template\\pagar.tpl',
      1 => 1670117828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6390df65ed6dc5_62701086 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="separacion"></section>
    <section class="row seccionMargenes">
        <div class="col-6"><h3>Resumen de factura del usuario <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h3></div>
        <div class="col-6"><h4 style="text-align:right">Fecha: <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</h4></div>
        <hr />
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-12">
            <input name="cmd" type="hidden" value="_cart" />
            <input name="upload" type="hidden" value="1" />
            <input name="business" type="hidden" value="jorgefuli91@gmail.com" />
            <input name="shopping_url" type="hidden" value="http://tienda/ejemploPaypal/index.php" />
            <input name="currency_code" type="hidden" value="EUR" />
            <input name="return" type="hidden" value="http://localhost/PROYECTOS_XAMP/000_PATINLANDIA/tiendaOnlineTodos/PRUEBAS/tiendaOnline1/tienda.php" />
            <input name="notify_url" type="hidden" value="http://localhost/PROYECTOS_XAMP/000_PATINLANDIA/tiendaOnlineTodos/PRUEBAS/tiendaOnline1/tienda.php" />
            <input name="rm" type="hidden" value="2" />

            <table id="tablaPagar" class="w-100">
                <thead>
                    <tr class="pago">
                        <th class="pago">Cantidad</th>
                        <th class="pago">Imagen</th>
                        <th class="pago">Nombre</th>
                        <th class="pago">Número de referencia</th>
                        <th class="pago">Precio Unitario</th>
                    </tr>
                </thead>
                <?php echo $_smarty_tpl->tpl_vars['resumenPago']->value;?>

            </table>
            <hr />
            <section class="flex">
                <div class="imagenFondoCarrito col-6"></div>
                <table class="col-5 float-right">
                    <thead>
                        <tr class="pago">
                            <th class = "pago" colspan = 2><strong>RESUMEN DE LA FACTURA</strong></th>
                    </thead>
                    <tr class="pago">
                        <td class="pago">Total articulos</td>
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['cantidadProductos']->value;?>
</td>
                    </tr>
                    <tr>
                        <td class="pago">Precio total Sin iva</td>
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                    </tr>
                    <tr>
                        <td class="pago">IVA</td>
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['IVA']->value;?>
</td></td>
                    </tr>
                    <tr>
                        <td class="pago">TOTAL pagar</td>
                        <td class="pago"><?php echo $_smarty_tpl->tpl_vars['totalIVA']->value;?>
</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center botonFinalizaCompra">
                            <input type="submit" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro" class="btn btn-red mx-auto botonesPago" value="Finalizar pedido" <?php echo $_smarty_tpl->tpl_vars['deshabilitado']->value;?>
> 
                            <p class="my-4" > Para proceder a finalizar el pago necesitamos que tengas una dirección guardada</p>
                        </td>
                    </tr>
                </table>

            </section>
        </form>
        <section class="espacioPequeno"></section>
        <form method="post" action="pagar.php" class="col-12">
            <div class="col-12">
                <h3>Datos del usuario</h3>
                <?php echo $_smarty_tpl->tpl_vars['datosUsuario']->value;?>

            </div>
            </br>
            <?php echo $_smarty_tpl->tpl_vars['formularioEditorUsuario']->value;?>

            <input type="submit" name="botonDatos" class="btn btn-red botonesPago" value="<?php echo $_smarty_tpl->tpl_vars['textoBoton']->value;?>
">
        </form>

    </div>
</section>
<section class="separacion"></section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
