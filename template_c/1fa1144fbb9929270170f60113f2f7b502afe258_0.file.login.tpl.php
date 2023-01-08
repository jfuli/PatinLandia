<?php
/* Smarty version 4.2.1, created on 2022-12-07 18:58:45
  from 'C:\xampp\htdocs\PROYECTOS_XAMP\000_PATINLANDIA\tiendaOnlineTodos\PRUEBAS\tiendaOnline1\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6390d4551934c3_96027709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa1144fbb9929270170f60113f2f7b502afe258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS_XAMP\\000_PATINLANDIA\\tiendaOnlineTodos\\PRUEBAS\\tiendaOnline1\\template\\login.tpl',
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
function content_6390d4551934c3_96027709 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <div class="login seccionMargenes">
            <section class="separacion"></section>
            <fieldset class="cajaLogin">
                <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                <div class="iniciarSesion col-lg-6 col-md-12 col-sm-12">
                    <form class="formLogin" role="form" action='login.php' method='post' id="formLogin" enctype="multipart/form-data">
                        <h2>Iniciar sesión</h2>
                        <p>¿Ya conoces las ventajas que tiene tener una cuenta de usuario en la web de BEFIT? Con ella podrás comprar nuestros productos y tener un historial alimenticio. Anímate y hazte una cuenta con el formulario de registro de la derecha. Si ya tienes una cuenta, ¿a qué esperas?, accede ahora introduciendo tus credenciales en el formulario de tu izquierda.</p>
                        <div class='campo'>
                            <label>Correo:</label><br/>
                            <input class="inputData" type='text' name='correo' value='luciafffernandez@gmail.com'/><br/>
                        </div>
                        <div class='campo'>
                            <label>Contraseña:</label><br/>
                            <input class="inputData" type='password' name='pass' /><br/>
                        </div>
                        <div class='divSubmit'>
                            <input class="submit btn btn-red" type='submit' name='iniciarSesion' value='Iniciar sesión' />
                        </div>
                    </form>
                </div>
                <div class="registrarse col-lg-6 col-md-12 col-sm-12">
                    <form class="formLogin" role="form" action='login.php' method='post' id="formRegister" enctype="multipart/form-data">
                        <h2>Registrarse</h2>
                        <div class='campo'>
                            <label>Nombre:</label><br/>
                            <input class="inputData" type='text' name='name' value='Lucia'/><br/>
                        </div>
                        <div class='campo'>
                            <label>Apellidos:</label><br/>
                            <input class="inputData" type='text' name='apellidos' value='Fernandez Ulibarrena' /><br/>
                        </div>
                        <div class='campo'>
                            <label>Correo:</label><br/>
                            <input class="inputData" type='text' name='correo' value='nookdesarrollo@gmail.com'/><br/>
                        </div>
                        <div class='campo'>
                            <label>DNI:</label><br/>
                            <input class="inputData" type='text' name='dni' value='73447375A' /><br/>
                        </div>
                        <div class='campo'>
                            <label>Fecha de Nacimiento:</label><br/>
                            <input class="inputData" type='date' name='fechaNac' value='1997-06-19'/><br/>
                        </div>
                        <div class='campo'>
                            <label>Contraseña:</label><br/>
                            <input class="inputData" type='password' name='pass'/><br/>
                        </div>
                        <div class='divSubmit'>
                            <input class="submit btn btn-red" type='submit' name='crearUsuario' value='Crear usuario'/>
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
