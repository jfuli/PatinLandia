<!DOCTYPE html>
<html>
    {include file = "head_header.tpl"}
    <section class="espacioPequeno"></section>
    <section class="ficha">
        <div class="container">
            <div class="card">
                <div class="wrapper d-flex">
                    <div class="preview col-md-5">

                        <div class="preview-pic tab-content">
                            <div class="productImg tab-pane active" id="pic-1" style="background-image: url(./img/{$imagen1})"></div>
                            <div class="productImg tab-pane" id="pic-2" style="background-image: url(./img/{$imagen1})"></div>
                            <div class="productImg tab-pane" id="pic-3" style="background-image: url(./img/{$imagen1})"></div>
                        </div>
                    </div>
                    <div class="details col-md-7">
                        <form action='detalleProducto.php' method='post'>
                            <h3 class="product-title">{$nombre}</h3>
                            <h5>{$categoria}</h5>

                            <p class="product-description">{$descripcion}</p>
                            <h4 class="price">Precio: <span>{$precio} €</span></h4>
                            <strong>Características</strong>
                            <p>Unidades disponibles: {$uniDisp}</br>
                                Costes de envío: {$costes_envio}</br>
                                Dimensiones: {$dimensiones}</br>
                                Peso: {$peso}</br>
                            <div class="action">
                                <input type='hidden' value='{$numRef}' name='numRef'>
                                <input type='hidden' value='{$nombre}' name='nomProd'>
                                <input type='hidden' value='{$precio}' name='precio'>
                                <input type='hidden' value='{$imagen1}' name='imagen1'>
                                <input class='shop-btn' type='submit' value='Añadir al carrito' name='cestaAccion' {$disabled}>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="espacioPequeno"></section>
    <section class="seccionMargenes" id="destacados">
        <div class="espacioPequeno"></div>
        <h2 class="text-center col-12">Productos destacados</h2>
        <div class="row contenedorProductos">
            {$productosDestacados}
        </div>
        <button class="primary-btn" onclick="location.href = 'tienda.php'">
        Ver todos los productos
        </button>
        <div class="espacio"></div>
    </section>

    <section class="espacioPequeno"></section>

    {include file = "footer.tpl"}
</html>