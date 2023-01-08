<?php

error_reporting(0); //para que no salgan errores
//Añadimos las clases
require_once "Smarty.class.php";

spl_autoload_register(function($clase) {
    include "$clase.php";
});

session_start();

//establecemos conexion
$conexion = new BD();
//Creamos un objeto para gestionar plantillas
$smarty = new Smarty();
//Configuramos los directorios
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$productosDestacados = obtenerListado($conexion);
$smarty->assign('productosDestacados', $productosDestacados);


//creamos o recogemos cesta
$cesta = Cesta::generaCesta();
//recojo el contenido de la cesta con los productos que vayamos añadiendo y lo mostramos en la plantilla
//var_dump($cesta);
// $carrito = mostrarIcono();
$carrito = $cesta->mostrarIcono();

$smarty->assign('carrito', $carrito);

$correo = $_SESSION['correo'];
$usuario = Usuario::generaUsuario();
$gestorAdmin = $usuario->mostrarBarraAdmin($conexion, $correo);
$smarty->assign('gestorAdmin', $gestorAdmin);
if (isset($_SESSION['correo']) && isset($_SESSION['pass'])) {
    $url = "tienda.php";
    $smarty->assign('url', $url);
} else {
    $url = "login.php?error";
    $smarty->assign('url', $url);
}
$smarty->display('home.tpl');

function obtenerListado($conexion) {
    if (isset($_SESSION['correo']) && isset($_SESSION['pass'])) {
        $disabled = "";
    } else {
        $disabled = "disabled";
    }
    $i = 0;
    $listado = "";
    $datos = $conexion->seleccion("SELECT * FROM PRODUCTOS");
    foreach ($datos as $dato) {
        if ($i < 3) {
            $nomProd = $dato['nom_producto'];
            $numRef = $dato['num_ref'];
            $precio = $dato['precio'];
            $descripcion = $dato['descripcion'];
            $imagen1 = $dato['imagen1'];
            $nomCat = $dato['nom_categoria'];

            $listado .= "<div class='col-xl-4 col-lg-4 col-md-10 mb-lg-0 mb-4 mx-auto columna-producto'>"
                    . "<form action='tienda.php' method='post'>"
                    . "<a href='detalleProducto.php?numRef=$numRef'>"
                    . "<img class='card-img-top img-fluid' src='./img/$imagen1' alt=''>"
                    . "</a>"
                    . "<div class='productos card card-cascade card-ecommerce'>"
                    . "<div class='card-body card-body-cascade text-center'>"
                    . "<input type='hidden' value='$numRef' name='numRef'>"
                    . "<input type='hidden' value='$nomProd' name='nomProd'>"
                    . "<input type='hidden' value='$precio' name='precio'>"
                    . "<input type='hidden' value='$imagen1' name='imagen1'>"
                    . "<a href='detalleProducto.php?numRef=$numRef'>"
                    . " <h5>$nomCat</h5>"
                    . "<h4 class='card-title'><strong>$nomProd</a></strong></h4>"
                    . "<p class='card-text'>$descripcion...</p>"
                    . "</a>"
                    . "<div class='card-footer'>"
                    . "<span class='float-left'>$precio €</span>"
                    . "<span class='float-right'>"
                    . " <input class='shop-btn' type='submit' value='Añadir al carrito' name='cestaAccion' $disabled>"
                    . "</div>"
                    . "</div>"
                    . "</div>"
                    . "</form>"
                    . "</div>";
            $i++;
        } else {
            break;
        }
    }
    return $listado;
}

?>