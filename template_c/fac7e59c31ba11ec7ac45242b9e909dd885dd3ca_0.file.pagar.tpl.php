<?php
/* Smarty version 4.2.1, created on 2023-01-03 04:35:23
  from 'C:\xampp\htdocs\tiendaOnline1\template\pagar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b3a27bc437c6_81936975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac7e59c31ba11ec7ac45242b9e909dd885dd3ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\pagar.tpl',
      1 => 1672716336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63b3a27bc437c6_81936975 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section class="separacion"></section>
    <section class="container">
        <div class="row">
            <div class="col-6"><h3>Carrito de la compra de <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h3></div>
            <div class="col-6"><h4 style="text-align:right">Fecha: <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</h4></div>
            <hr />
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-12">
                <input name="cmd" type="hidden" value="_cart" />
                <input name="upload" type="hidden" value="1" />
                <input name="business" type="hidden" value="jorgefernandez91@hotmail.com" />
                <input name="shopping_url" type="hidden" value="http://tienda/ejemploPaypal/index.php" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="return" type="hidden" value="http://localhost/tiendaOnline1/tienda.php" />
                <input name="notify_url" type="hidden" value="http://localhost/tiendaOnline1/tienda.php" />
                <input name="rm" type="hidden" value="2" />
                <section class="d-flex flex-wrap align-items-start">
                    <table id="tablaPagar" class="col-8 float-left carrito">
                        <thead>
                            <tr class="pago">
                                <th class="pago">Cantidad</th>
                                <th class="pago">Imagen</th>
                                <th class="pago">Nombre</th>
                                <th class="pago">Referencia</th>
                                <th class="pago">Precio Unitario</th>
                            </tr>
                        </thead>
                        <?php echo $_smarty_tpl->tpl_vars['resumenPago']->value;?>

                    </table>
                    <table class="col-3 float-right offset-1">
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
 €</td>
                        </tr>
                        <tr>
                            <td class="pago">IVA</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['IVA']->value;?>
 €</td></td>
                        </tr>
                        <tr>
                            <td class="pago">TOTAL pagar</td>
                            <td class="pago"><?php echo $_smarty_tpl->tpl_vars['totalIVA']->value;?>
 €</td>
                        </tr>
                    </table>
                    <div class="w-100 text-right finalizar-compra">
                    <input type="submit" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro" class="shop-btn mx-auto botonesPago" value="Finalizar pedido" <?php echo $_smarty_tpl->tpl_vars['deshabilitado']->value;?>
> 
                                <p class="my-4" > Para proceder a finalizar el pago necesitamos que tengas una dirección guardada</p>
                    </div>
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

                <input type="submit" name="botonDatos" class="primary-btn botonesPago" value="<?php echo $_smarty_tpl->tpl_vars['textoBoton']->value;?>
">
            </form>

        </div>
    </section>
    <section class="separacion"></section>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
