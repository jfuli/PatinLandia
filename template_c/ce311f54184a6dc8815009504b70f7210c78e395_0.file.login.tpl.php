<?php
/* Smarty version 4.2.1, created on 2023-01-03 00:17:15
  from 'C:\xampp\htdocs\tiendaOnline1\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b365fb28cb35_10775614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce311f54184a6dc8815009504b70f7210c78e395' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\login.tpl',
      1 => 1672700655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63b365fb28cb35_10775614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section>
    <div class="login">
        <div class="container">
            <section class="separacion"></section>
            <fieldset class="cajaLogin">
                <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
                    </span></div>
                <div class="iniciarSesion col-lg-6 col-md-12 col-sm-12">
                    <form class="formLogin" role="form" action='login.php' method='post' id="formLogin"
                        enctype="multipart/form-data">
                        <h2>Iniciar sesión</h2>
                        <p>¿Ya conoces las ventajas que tiene tener una cuenta de usuario en la web de Patinlandia? Con
                            ella podrás comprar nuestros productos y tener un historial de pedidos. Si ya tienes una
                            cuenta, accede ahora introduciendo tus credenciales en el formulario de tu izquierda.</p>
                        <div class='campo'>
                            <label>Correo:</label><br />
                            <input class="inputData" type='text' name='correo' value='jorgefuli91@gmail.com' /><br />
                        </div>
                        <div class='campo'>
                            <label>Contraseña:</label><br />
                            <input class="inputData" type='password' name='pass' /><br />
                        </div>
                        <div class='divSubmit'>
                            <input class="submit shop-btn" type='submit' name='iniciarSesion' value='Iniciar sesión' />
                        </div>
                    </form>
                </div>
                <div class="registrarse col-lg-6 col-md-12 col-sm-12">
                    <form class="formLogin" role="form" action='login.php' method='post' id="formRegister"
                        enctype="multipart/form-data">
                        <h2>Registrarse</h2>
                        <div class='campo'>
                            <label>Nombre:</label><br />
                            <input class="inputData" type='text' name='name' value='Jorge' /><br />
                        </div>
                        <div class='campo'>
                            <label>Apellidos:</label><br />
                            <input class="inputData" type='text' name='apellidos' value='Fernandez Ulibarrena' /><br />
                        </div>
                        <div class='campo'>
                            <label>Correo:</label><br />
                            <input class="inputData" type='text' name='correo' value='info@patinlandia.com' /><br />
                        </div>
                        <div class='campo'>
                            <label>DNI:</label><br />
                            <input class="inputData" type='text' name='dni' value='77132510D' /><br />
                        </div>
                        <div class='campo'>
                            <label>Fecha de Nacimiento:</label><br />
                            <input class="inputData" type='date' name='fechaNac' value='1991-10-23' /><br />
                        </div>
                        <div class='campo'>
                            <label>Contraseña:</label><br />
                            <input class="inputData" type='password' name='pass' /><br />
                        </div>
                        <div class='divSubmit'>
                            <input class="submit primary-btn" type='submit' name='crearUsuario' value='Crear usuario' />
                        </div>
                    </form>
                </div>
            </fieldset>
            <section class="separacion"></section>
        </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html><?php }
}