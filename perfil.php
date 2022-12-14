<?php

error_reporting(0);
//Añadimos las clases
require_once "Smarty.class.php";
spl_autoload_register(function($clase) {
    include "$clase.php";
});

session_start();
//Creamos un objeto para gestionar plantillas
$smarty = new Smarty();
//Configuramos los directorios
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$conexion = new BD();

//si tenemos guardados las variables de sesion usuario y contraseña 
if (isset($_SESSION['correo']) && isset($_SESSION['pass'])) {
//las guardamos en variables
    $correo = $_SESSION['correo'];
    $pass = $_SESSION['pass'];
    if (!$conexion->comprueboUsuario($correo, $pass)) {
        header("Location:login.php&error");
    }
} else {
    header("Location:login.php&error");
}



//recogemos la variable de sesion cesta
$cesta = $_SESSION['cesta'];
//recojo el contenido de la cesta con los productos que vayamos añadiendo y lo mostramos en la plantilla
$carrito = $cesta->mostrarIcono();
$smarty->assign('carrito', $carrito);

$usuario = Usuario::generaUsuario();
$gestorAdmin = $usuario->mostrarBarraAdmin($conexion, $correo);
$smarty->assign('gestorAdmin', $gestorAdmin);
mostrarDatosUser($correo);
$idUser = (integer) $usuario->getID($conexion, $correo);
historialPedidos($idUser);

if (isset($_POST['enviarInci'])) {
    $correoInci = $_SESSION['correo'];
    $nombreInci = $_POST['nombre'];
    $asuntoInci = $_POST['asunto'];
    $descripcionInci = $_POST['descripcion'];
    $idPedidoInci = $_POST['id_pedido'];
    $fecha = date("Y-m-d");

    $datos = array(':fecha_creacion' => $fecha, ':id_user' => $idUser);
    $sentencia = "INSERT INTO REGISTROS (fecha_creacion, id_user) VALUES (:fecha_creacion, :id_user)";
    $conexion->ejecutarPS($datos, $sentencia);
    $id_registro = $conexion->conexion->lastInsertId();

    $datos = array(':id_incidencia' => $id_registro, ':descripcion' => $descripcionInci, ':correo' => $correoInci, ':asunto' => $asuntoInci, ':nombre' => $nombreInci, ':id_pedido' => $idPedidoInci);
    $sentencia = "INSERT INTO INCIDENCIAS (id_incidencia, descripcion, correo, asunto, nombre, id_pedido) VALUES (:id_incidencia, :descripcion, :correo, :asunto, :nombre, :id_pedido)";
    $conexion->ejecutarPS($datos, $sentencia);
}

//cuando se llegue a este archivo y haya un usuario guardado en sesión y no sea el administrador
if ($usuario->comprueboAdmin($conexion, $correo) === "0") {
    if (isset($_POST['botonDatos']) && ($_POST['botonDatos'] === 'Guardar datos')) {
        $correo = $_SESSION['correo'];
        mostrarDatosUser($correo);

        $textoBoton = "Editar datos";
        $smarty->assign('textoBoton', $textoBoton);

        $formularioEditorUsuario = "";
        $smarty->assign('formularioEditorUsuario', $formularioEditorUsuario);

        $idUser = (integer) $usuario->getID($conexion, $correo);
        $correo = $_SESSION['correo'];

        $datosUser = [':nombre' => $_POST['nombre'], ':apellidos' => $_POST['apellidos'], ':correo' => $_POST['correo'], ':dni' => $_POST['dni'], ':fechaNac' => $_POST['fechaNac']];
        $sentenciaUpdate = "UPDATE USUARIOS SET correo = :correo, nombre = :nombre, apellidos = :apellidos, dni = :dni, fecha_nac = :fechaNac WHERE correo = '" . $correo . "'";
        $conexion->ejecutarPS($datosUser, $sentenciaUpdate);

        $datosDir = [':provincia' => $_POST['provincia'], ':ciudad' => $_POST['ciudad'], ':calle' => $_POST['calle'], ':numero' => $_POST['num'], ':piso' => $_POST['piso'], ':cod_postal' => $_POST['cod_postal']];
        if ($conexion->comprueboDireccion($idUser)) {
            $sentenciaUpdate = "UPDATE DIRECCIONES SET provincia = :provincia, ciudad = :ciudad, calle = :calle, numero = :numero, piso = :piso, cod_postal = :cod_postal WHERE id_dir = (SELECT id_dir FROM VIVE_EN WHERE id_user ='" . $idUser . "');";
            $conexion->ejecutarPS($datosDir, $sentenciaUpdate);
        } else {
            $sentenciaInsert = "INSERT INTO DIRECCIONES (provincia, ciudad, calle, numero, piso, cod_postal) VALUES (:provincia, :ciudad, :calle, :numero, :piso, :cod_postal)";
            $conexion->ejecutarPS($datosDir, $sentenciaInsert);
            $id_dir = $conexion->conexion->lastInsertId();

            $sentencia = "INSERT INTO VIVE_EN (id_user, id_dir) VALUES ($idUser, $id_dir)";
            $conexion->ejecutar($sentencia);
        }
        $_SESSION['correo'] = $_POST['correo'];
        $correo = $_SESSION['correo'];
        mostrarDatosUser($correo);
    } else if (isset($_POST['botonDatos']) && ($_POST['botonDatos'] === 'Editar datos')) {
        $correo = $_SESSION['correo'];
        formularioEdicionUser($correo);

        mostrarDatosUser($correo);

        $textoBoton = "Guardar datos";
        $smarty->assign('textoBoton', $textoBoton);
    } else if (!isset($_POST['botonDatos'])) {
        $textoBoton = "Editar datos";
        $smarty->assign('textoBoton', $textoBoton);
        $formularioEditorUsuario = "";
    }
} else if ($usuario->comprueboAdmin($conexion, $correo) === "1") {
//cuando se llegue a este fichero y haya un usuarios guardado en sesión y sea el administrador
    header("Location:gestorAdmin.php");
}

$smarty->display('perfil.tpl');

/** Función que muestra los datos del usuario logeado con un formato determinado
 * @global type $usuario
 * @global BD $conexion
 * @global Smarty $smarty
 * @param type $correo
 */
function mostrarDatosUser($correo) {
    global $usuario, $conexion, $smarty;
    $nombre = $usuario->getNombreCompleto($conexion, $correo);
    $DNI = $usuario->getDNI($conexion, $correo);
//mostramos en la plantilla la variable usuario o nombre

    $direccionCompleta = $usuario->getDireccion($conexion, $correo);

    if ($direccionCompleta === false) {
        $direccionUsuario = "<p>No hay ninguna dirección guardada para este usuario<p> <input type='submit' value='Editar datos' action='pagar.php'/>";
    } else {
        foreach ($direccionCompleta as $dato) {
            $calle = $dato[2];
            $provincia = $dato[0];
            $ciudad = $dato[1];
            $numero = $dato[3];
            $piso = $dato[4];
            $cod_postal = $dato[5];
            $direccionUsuario = "$calle $numero, $piso, $ciudad, $provincia, $cod_postal";
        }
    }
    $datosUsuario = "<label>Nombre y apellidos: </label> $nombre</br> <label>Correo electrónico: </label> $correo </br><label>DNI: </label> $DNI</br><label>Dirección: </label> $direccionUsuario";
    $smarty->assign('datosUsuario', $datosUsuario);
}

/** Función que recibiendo el correo del usuario logeado muestra 
 * un formulario de edición de sus datos mostrando por defecto los 
 * valores actuales de sus campos
 * @global Smarty $smarty
 * @global BD $conexion
 * @param type $correo
 */
function formularioEdicionUser($correo) {
    global $smarty, $conexion;
    $sentencia = "SELECT * FROM USUARIOS WHERE correo = '" . $correo . "'";
    $valores = $conexion->seleccion($sentencia);
    foreach ($valores as $valor) {
        $id = $valor['id_user'];
        $nombre = $valor['nombre'];
        $apellidos = $valor['apellidos'];
        $correo = $valor['correo'];
        $dni = $valor['dni'];
        $fechaNac = $valor['fecha_nac'];
    }

    $sentencia = "SELECT * FROM VIVE_EN AS V JOIN DIRECCIONES AS D ON V.id_dir = D.id_dir WHERE id_user = '" . $id . "'";
    $valores = $conexion->seleccion($sentencia);
    foreach ($valores as $valor) {
        $provincia = $valor['provincia'];
        $ciudad = $valor['ciudad'];
        $calle = $valor['calle'];
        $numero = $valor['numero'];
        $piso = $valor['piso'];
        $cod_postal = $valor['cod_postal'];
    }

    $formularioEditorUsuario = "<div class = 'col-lg-6 float-left'>"
            . " <label>Nombre: </label> <input class = 'inputData' type = 'text' name = 'nombre' value = '$nombre'> </br>"
            . " <label>Apellidos: </label> <input class = 'inputData' type = 'text' name = 'apellidos' value = '$apellidos'></br>"
            . " <label>Correo: </label> <input class = 'inputData' type = 'text' name = 'correo' value = '$correo' > </br>"
            . " <label>DNI: </label> <input class = 'inputData' type = 'text' name = 'dni' value = '$dni'> </br>"
            . " <label>Fecha de nacimiento: </label> <input class = 'inputData' type = 'date' name = 'fechaNac' value = '$fechaNac'/><br/></br>"
            . " </div>"
            . " <div class = 'col-lg-6 float-left'>"
            . " <label>Calle: </label> <input class = 'inputData' type = 'text' name = 'calle' value = '$calle'> </br>"
            . " <label>Número: </label> <input class = 'inputData' type = 'text' name = 'num' value = '$numero'> </br>"
            . " <label>Piso: </label> <input class = 'inputData' type = 'text' name = 'piso' value = '$piso'></br>"
            . " <label>Código postal: </label> <input class = 'inputData' type = 'text' name = 'cod_postal' value = '$cod_postal'></br>"
            . " <label>Provincia: </label> <input class = 'inputData' type = 'text' name = 'provincia' value = '$provincia'></br>"
            . " <label>Ciudad: </label> <input class = 'inputData' type = 'text' name = 'ciudad' value = '$ciudad'></br>"
            . " </div>";

    $smarty->assign('formularioEditorUsuario', $formularioEditorUsuario);
}

function historialPedidos($idUser) {
    global $conexion, $smarty;
    $historial = "";
    $sentencia = "SELECT * FROM PEDIDOS AS P JOIN REGISTROS AS R ON P.id_pedido = R.id_registro WHERE R.id_user = '" . $idUser . "';";
    $datosPedido = $conexion->seleccion($sentencia);
    foreach ($datosPedido as $datoPedido) {
        $id_pedido = $datoPedido['id_pedido'];
        $total = $datoPedido['total'];
        $fecha_entrega = $datoPedido['fecha_entrega'];
        $estado = $datoPedido['estado'];

        $sentencia = "SELECT * FROM REGISTROS WHERE id_registro = '" . $id_pedido . "';";
        $datosRegistro = $conexion->seleccion($sentencia);

        foreach ($datosRegistro as $datoRegistro) {
            $fecha_creacion = $datoRegistro['fecha_creacion'];
        }

        $historial .= "<div id='fecha' class='text-center my-3'><h4>" . $fecha_creacion . "</h4></div>"
                . "<table id='tablaPagar' class='pago col-8 mx-auto'>"
                . "<thead>"
                . "<tr class='bg-none border-top border-bottom'>"
                . "<th class='py-3 px-3'><h5>Identificador de pedido</h5></th>"
                . "<th class='py-3 px-3'><h5>Fecha de entrega</h5></th>"
                . "</tr>"
                . "</thead>"
                . "<tbody>"
                . "<tr class='pago my-5'>"
                . "<td class='py-3 px-3'>" . $id_pedido . "</td>"
                . "<td class='py-3 px-3'>" . $fecha_entrega . "</td>"
                . "</tr>"
                . "</tbody>"
                . "</table>"
                . "<table id='tablaPagar' class='pago col-8 mx-auto'>"
                . "<thead>"
                . "<tr class='pago' >"
                . "<th class='pago productos text-center ' colspan = 6><h6>Productos</h6></th>"
                . "</tr>"
                . "<tr class='pago'>"
                . "<th class='pago'>Ud</th>"
                . "<th class='pago'>Imagen</th>"
                . "<th class='pago'>Nombre</th>"
                . "<th class='pago'>Nº Ref</th>"
                . "<th class='pago'>PVP</th>"
                . "<th class='pago'>Total</th>"
                . "</tr>"
                . "</thead>"
                . "<tbody>";

        $sentencia = "SELECT * FROM DETALLES_PEDIDOS WHERE id_pedido = '" . $id_pedido . "';";
        $datosDetalles = $conexion->seleccion($sentencia);
        foreach ($datosDetalles as $datoDetalles) {
            $cantidad = $datoDetalles['cantidad'];
            $precio = $datoDetalles['precio'];
            $num_ref = $datoDetalles['num_ref'];

            $sentencia = "SELECT * FROM PRODUCTOS WHERE num_ref = '" . $num_ref . "';";
            $datosProducto = $conexion->seleccion($sentencia);
            foreach ($datosProducto as $datoProducto) {
                $imagen = $datoProducto['imagen1'];
                $precioUni = $datoProducto['precio'];
                $nom = $datoProducto['nom_producto'];
            }
            $historial .= "<tr class='pago'>"
                    . "<td class='pago'>" . $cantidad . "</td>"
                    . "<td class='pago'><img src='./img/$imagen' class='imagenCesta'/></td>"
                    . "<td class='pago'>" . $nom . "</td>"
                    . "<td class='pago'>" . $num_ref . "</td>"
                    . "<td class='pago'>" . $precioUni . "</td>"
                    . "<td class='pago'>" . $precio . "</td>"
                    . "</tr>";
        }


        $historial .= "<tr class='bg-none border-bottom border-top'>"
                . "<td class='pago' colspan=2><strong> " . $estado . "</strong></td>"
                . "<td class='pago text-center' colspan=2>"
                . "<input type='submit' class='shop-btn botonesPago my-2' data-toggle='modal' data-target='#exampleModalCenter$id_pedido' value='Abrir incidencia'></td>"
                . "<td class='pago text-right' colspan=2><strong>Total: " . $total . "</strong></td>"
                . "</tr>"
                . "</tbody></table><section class='espacioPequeno'></section>"
                . htmlModal($id_pedido);
    }
    $smarty->assign('historial', $historial);
}

function htmlModal($id_pedido) {
    $modal = "<div class='modal fade' id='exampleModalCenter$id_pedido' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
        <div class='modal-dialog modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title ' id='exampleModalLongTitle'>DESCRÍBENOS EL PROBLEMA</h5>
                    <button type='button' class='close ' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    
                </div>
                <div class='modal-body'>
                <p>Te responderemos lo antes posible</p>
                    <form name='registro' id='registro-form' method='POST' action='perfil.php' enctype='multipart/form-data'>
                        <div class='campo-incidencia'>
                            <label>Nombre</label>
                            <input type='text' id='nombre' class='form-control' name='nombre' value=''>

                        </div>
                        <div class='campo-incidencia'>
                            <label for='form5'>Correo</label>
                            <input type='text' id='correo' class='form-control' name='correo' value='" . $_SESSION['correo'] . "'>
                        </div>
                         <div class='campo-incidencia'>
                            <label>Asunto</label>
                            <input type='text' id='asunto' class='form-control' name='asunto' value=''>

                        </div>
                        <div class='campo-incidencia'>
                            <label>Descripción</label>
                            <textarea id='descripcion' class='form-control' rows=9 name='descripcion'></textarea>
                        </div>
                        <input type='hidden' name='id_pedido' value='" . $id_pedido . "'/>
                        <div class='modal-footer text-center'>
                        <input type='submit' class='shop-btn' data-dismiss='modal' value='Cancelar'>
                        <input type='submit' class='shop-btn' name='enviarInci' value='Enviar'>
                         </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>";
    return $modal;
}