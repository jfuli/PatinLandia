<?php
/* Smarty version 4.2.1, created on 2023-01-03 02:41:44
  from 'C:\xampp\htdocs\tiendaOnline1\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b387d88ada60_79997925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506bd5e43bbc355793ff7ec38f4dfe4ba274d64d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\home.tpl',
      1 => 1672702726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63b387d88ada60_79997925 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <?php $_smarty_tpl->_subTemplateRender("file:head_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <section id="bannerDestacado">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-5" id="wrapper-info">
          <h1>Siéntete libre con la<span> movilidad sostenible</span></h1>
          <div class="subtitulo">
            Tenemos una selección de vehículos de la mejor calidad
          </div>
          <p>
            Deja de buscar y comparar en mil webs, <br />en Patinlandia te lo
            ponemos facil
          </p>
          <a
            class="primary-btn"
            href="http://localhost/tiendaOnline1/tienda.php"
            >Ver nuestra selección de patines</a
          >
        </div>
        <div class="col-md-12 col-lg-12 col-xl-7" id="wrapper-product">
          <img src="./img/planta-izquierda.png" class="planta_izquierda" />
          <div class="info-patin">
            <h2>Patinete Eléctrico Bopster Sport Pro</h2>
            <p>
              Potencia máxima de 700 W, App Smartphone, Batería Intercambiable,
              autonomía ilimitada Desde 25 km.
            </p>
            <a class="shop-btn" href="http://localhost/tiendaOnline1/detalleProducto.php?numRef=6"
              >Más detalles</a
            >
          </div>
          <img src="./img/patin_banner.png" class="patin" />
          <img src="./img/chico_banner.png" class="chico" />
          <div class="circulo-precio">
            <p>390€</p>
          </div>
          <img src="./img/planta_derecha.png" class="planta_derecha" />
        </div>
      </div>
    </div>
  </section>
  <section class="espacio fondoBlanco"></section>

  <section class="fondoBlanco" id="caracteristicas">
    <div class="container">
      <div class="row titulo">
        <div class="text-center">
          <h2 class="tituloSeccion">Por qué elegir Patinlandia</h2>
          <h3 class="subtituloSeccion">Características principales</h3>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-xl-4">
            <div class="cliente caracteristica">
              <img src="./img/customer_care.svg" class="iconosHome" />
              <div class="info">
                <h4><strong>SUPERATENCIÓN AL CLIENTE</strong></h4>
                <p class="textoNormal">
                  Gracias a nuestro gran equipo te ofrecemos la mejor atención
                  personalizada y buscamos la mejor solución a tus
                  necesidades. Una atención cercana, humana y de calidad. No
                  somos robots, somos personas y sabemos que nuestros clientes
                  también.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="distribucion caracteristica">
              <img src="./img/distribution.svg" class="iconosHome" />
              <div class="info">
                <h4><strong>ENVÍOS Y DEVOLUCIONES GRATIS</strong></h4>
                <p class="textoNormal">
                  Enviamos gratis todos nuestros productos a cualquier punto
                  de España Peninsular. En el caso de Baleares, Canarias,
                  Ceuta y Melilla tendrá un costo mínimo. Las devoluciones
                  también serán gratuitas a través de Celeritas
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="garantia caracteristica">
              <img src="./img/guarantee.svg" class="iconosHome" />
              <div class="info">
                <h4>
                  <strong>GARANTÍA OFICIAL <br />DE LA MARCA 2 AÑOS</strong>
                </h4>
                <p class="textoNormal">
                  En patinlandia.es gracias a la colaboración con
                  distribuidores y marcas nacionales, te ofrecemos garantía
                  oficial de la marca de 2 años en todos nuestros productos (6
                  meses a 2 años en baterías en función de la marca)
                </p>
              </div>
            </div>
          </div>
          <div class="info-nosotros">
            <h4 class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
              Quieres conocernos un poco mejor o tienes alguna duda de los
              productos que ofrecemos. Haz click en el botón y visita ya nuestra
              sección.
            </h4>
            <button
              class="primary-btn"
              onclick="location.href = 'nosotros.php'"
            >
              Conócenos
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="espacio fondoBlanco"></section>
  <section class="espacioPequeno"></section>

  <section class="seccionMargenes" id="destacados">
    <div class="espacioPequeno"></div>
    <h2 class="text-center col-12">Productos destacados</h2>
    <div class="row contenedorProductos">
      <?php echo $_smarty_tpl->tpl_vars['productosDestacados']->value;?>

    </div>
    <button class="primary-btn" onclick="location.href = 'tienda.php'">
      Ver todos los productos
    </button>
    <div class="espacio"></div>
  </section>

  <!--<section class="espacioPequeno"></section>
    <section class="row seccionEnlaceContacto">
        <div class="espacio"></div>
        <div class="seccionMargenes textoEnlaceContacto">
            <div class="espacioPequeno"></div>
            <h4 class="float-left col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">Quieres conocernos un poco mejor o tienes alguna duda de los servicios que ofrecemos. Haz click en el botón y visita ya nuestra sección.</h4>
            <button class="btn-complejo col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12" onclick="location.href = 'contacto.php'">
                <div class="circle">
                    <span class="icon arrow"></span>
                </div>
                <p class="button-text btn-sobre-nosotros">CONTACTO</p>
            </button>
            <div class="espacioPequeno"></div>
        </div>
        <div class="espacio"></div>
    </section>-->
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html>
<?php }
}
