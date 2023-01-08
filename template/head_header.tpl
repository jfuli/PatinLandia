<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Tienda Online - Lucía</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-xl menuPrincipal">
            <div class="container">
                <!--Las rutas hacia las imagenes y demás las pondremos con directorios relativos,
                    para que no de problema el tener otro tipo de estructura de carpetas-->
                <a href="http://localhost/tiendaOnline1/home.php" class="logo">Patin<span>landia</span></a>
                <div class="navegacion">
                    <div class="navbar-header">
                        <button button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <a class="hamburger" href="#">
                                <span><i class="fas fa-bars fa-1x"></i></span>
                            </a>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="http://localhost/tiendaOnline1/tienda.php">Nuestros patines</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/tiendaOnline1/nosotros.php">Sobre nosotros</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/tiendaOnline1/contacto.php">Contacto</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" >
                            {$carrito}
                            <form action="head_header.php" method="post">
                                <button class="enlaceUser" formmethod="post" name="areaClientes" role="button" aria-expanded="false"><i class="fas fa-user white-text iconosNav areaClientes"></i></span></button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        {$gestorAdmin}
    </header>