<?php
/* Smarty version 4.2.1, created on 2023-01-03 00:05:04
  from 'C:\xampp\htdocs\tiendaOnline1\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b36320cacd26_82085481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48eb8d6d99c4fb2b8f96b7fc7c78083d009aa132' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaOnline1\\template\\footer.tpl',
      1 => 1672700658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b36320cacd26_82085481 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Footer -->
<footer class="page-footer font-small pt-4">

    <!-- Footer Links -->
    <div class="container text-center ">
        <div class="row d-flex align-items-center ">
            <div class="text-left col-sm-10 col-md-4 col-lg-4 col-xl-4 col-xs-10 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Únete a Patinlandia</h6>
                <p>¿Quién está detrás de todo esto? Somos un grupo
                    de personas apasionadas por el deporte. Siempre hemos estado sobre
                    ruedas, y hemos estado involucrados desde años en proyectos del
                    más alto nivel en el mundo del roller y el skate. A raíz de esto,
                    decidimos fundar Patinlandia, un lugar en el que la información es
                    primordial y donde puedas encontrar la máxima calidad en nuestros
                    productos..</p>
            </div>
            <!-- Grid column -->
            <div class="text-left col-sm-10 col-md-5 col-lg-5 col-xl-5 col-xs-10 mx-auto mt-3 ">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                <p><i class="fas fa-home mr-3"></i> Calle Instalación, 22 bajo, Instalación, Instalación</p>
                <p><i class="fas fa-envelope mr-3"></i> info@patinlandia.com</p>
                <p><i class="fas fa-phone mr-3"></i> 976 99 55 22</p>
                <p><i class="fas fa-phone mr-3"></i> 666 00 11 33</p>
            </div>
            <!-- Grid column -->
        </div>
        <hr>
        <div class="col-md-12 col-lg-12 d-flex">
            <p class="copyright col-lg-6 col-md-6">
                © 2022 Copyright -<strong> patinlandia.com</strong>
            </p>
            <div class="col-lg-6 col-md-6">
                <nav class="redesSociales">
                    <a href="www.facebook.com" target="_blank"><img src="img/facebook.png"/></a>
                    <a href="www.instagram.com" target="_blank"><img src="img/instagram.png"/></a>
                    <a href="www.twitter.com" target="_blank"><img src="img/twitter.png"/></a
                    <a href="www.google+.com" target="_blank"><img src="img/google-plus.png"/></a>
                </nav>
            </div>
        </div>


    </div>
    <!-- Footer Links -->

</footer>

<!-- JQuery -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.4.0.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap tooltips -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/popper.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- MDB core JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/mdb.min.js"><?php echo '</script'; ?>
>

<!-- JS Validate -->

    <?php echo '<script'; ?>
 src="js/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $("#formLogin").validate({
                rules: {
                    correo: {
                        required: true,
                        email: true
                    },
                    pass: {
                        required: true,
                        minlength: 5,
                        maxlength: 20
                    }
                },
                messages: {
                    correo: {
                        required: "Campo obligatorio",
                        email: "Introduce un correo válido",
                    },
                    pass: {
                        required: "Campo obligatorio",
                        minlength: "Contraseña demasiado corto",
                        maxlength: "Contraseña demasiado larga",
                    }
                },
                errorElement: "em",
            });
            $("#formContact").validate({
                rules: {
                    correo: {
                        required: true,
                        email: true
                    },
                    name: {
                        minlength: 2,
                        maxlength: 20
                    },
                    mensaje: {
                        required: true,
                        minlength: 10,
                        maxlength: 255
                    },
                    asunto: {
                        minlength: 5,
                        maxlength: 50
                    }
                },
                messages: {
                    correo: {
                        required: "Campo obligatorio",
                        email: "Introduce un correo válido",
                    },
                    name: {
                        minlength: "Nombre demasiado corto",
                        maxlength: "Nombre demasiado largo",
                    },
                    mensaje: {
                        required: "Campo obligatorio",
                        minlength: "Introduce un mensaje más largo",
                        maxlength: "Introduce un mensaje más corto",
                    },
                    asunto: {
                        minlength: "Asunto demasiado corto",
                        maxlength: "Asunto demasiado largo",
                    }
                },
                errorElement: "em",
            });
            $("#formRegister").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2,
                        maxlength: 20
                    },
                    apellidos: {
                        required: true,
                        maxlength: 100,
                        minlength: 2
                    },
                    correo: {
                        required: true,
                        email: true
                    },
                    fechaNac: {
                        required: true,
                        date: true
                    },
                    dni: {
                        required: true,
                        minlength: 6,
                        maxlength: 9
                    },
                    pass: {
                        required: true,
                        minlength: 5,
                        maxlength: 20
                    }
                },
                messages: {
                    name: {
                        required: "Campo obligatorio",
                        minlength: "Nombre demasiado corto",
                        maxlength: "Nombre demasiado largo",
                    },
                    apellidos: {
                        required: "Campo obligatorio",
                        minlength: "Apellidos demasiado cortos",
                    },
                    correo: {
                        required: "Campo obligatorio",
                        email: "Introduce un correo válido",
                    },
                    fechaNac: {
                        required: "Campo obligatorio",
                        minlength: "Introduce una fecha",
                    },
                    dni: {
                        required: "Campo obligatorio",
                        minlength: "Introduce un DNI válido",
                    },
                    pass: {
                        required: "Campo obligatorio",
                        minlength: "Contraseña demasiado corta",
                        maxlength: "Contraseña demasiado larga",
                    }
                },
                errorElement: "em",
            });
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        /*********************
         *	Helpers Code
         ********************/
        /**
         *  @function   DOMReady
         *
         *  @param callback
         *  @param element
         *  @param listener
         *  @returns {*}
         *  @constructor
         */
        const DOMReady = ((
                callback = () => {},
                element = document,
                listener = 'addEventListener'
                ) => {
            return (element[listener]) ? element[listener]('DOMContentLoaded', callback) : window.attachEvent('onload', callback);
        });

        /**
         *  @function   ProjectAPI
         *
         *  @type {{hasClass, addClass, removeClass}}
         */
        const ProjectAPI = (() => {
            let hasClass,
                    addClass,
                    removeClass;

            hasClass = ((el, className) => {
                if (el === null) {
                    return;
                }

                if (el.classList) {
                    return el.classList.contains(className);
                } else {
                    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
                }
            });

            addClass = ((el, className) => {
                if (el === null) {
                    return;
                }

                if (el.classList) {
                    el.classList.add(className);
                } else if (!hasClass(el, className)) {
                    el.className += ' ' + className
                }
            });

            removeClass = ((el, className) => {
                if (el === null) {
                    return;
                }

                if (el.classList) {
                    el.classList.remove(className);
                } else if (hasClass(el, className)) {
                    let reg = new RegExp('(\\s|^)' + className + '(\\s|$)');

                    el.className = el.className.replace(reg, ' ');
                }
            });

            return {
                hasClass: hasClass,
                addClass: addClass,
                removeClass: removeClass
            };
        })();


        /*********************
         *	Application Code
         ********************/
        /**
         *  @function   readyFunction
         *
         *  @type {Function}
         */
        const readyFunction = (() => {

            const KEY_UP = 38;
            const KEY_DOWN = 40;

            let scrollingClass = 'js-scrolling',
                    scrollingActiveClass = scrollingClass + '--active',
                    scrollingInactiveClass = scrollingClass + '--inactive',
                    scrollingTime = 1350,
                    scrollingIsActive = false,
                    currentPage = 1,
                    countOfPages = document.querySelectorAll('.' + scrollingClass + '__page').length,
                    prefixPage = '.' + scrollingClass + '__page-',
                    _switchPages,
                    _scrollingUp,
                    _scrollingDown,
                    _mouseWheelEvent,
                    _keyDownEvent,
                    init;

            /**
             *  @function _switchPages
             *
             *  @private
             */
            _switchPages = () => {

                let _getPageDomEl;

                /**
                 *  @function _getPageDomEl
                 *
                 *  @param page
                 *  @returns {Element}
                 *  @private
                 */
                _getPageDomEl = (page = currentPage) => {
                    return document.querySelector(prefixPage + page);
                };

                scrollingIsActive = true;


                ProjectAPI.removeClass(
                        _getPageDomEl(),
                        scrollingInactiveClass
                        );
                ProjectAPI.addClass(
                        _getPageDomEl(),
                        scrollingActiveClass
                        );

                ProjectAPI.addClass(
                        _getPageDomEl(currentPage - 1),
                        scrollingInactiveClass
                        );

                ProjectAPI.removeClass(
                        _getPageDomEl(currentPage + 1),
                        scrollingActiveClass
                        );


                setTimeout(
                        () => {
                    return scrollingIsActive = false;
                },
                        scrollingTime
                        );
            };
            /**
             *  @function _scrollingUp
             *
             *  @private
             */
            _scrollingUp = () => {
                if (currentPage === 1) {
                    return;
                }

                currentPage--;

                _switchPages();
            };
            /**
             *  @function _scrollingDown
             *
             *  @private
             */
            _scrollingDown = () => {
                if (currentPage === countOfPages) {
                    return;
                }

                currentPage++;

                _switchPages();
            };
            /**
             *  @function _mouseWheelEvent
             *
             *  @param e
             *  @private
             */
            _mouseWheelEvent = (e) => {
                if (scrollingIsActive) {
                    return;
                }

                if (e.wheelDelta > 0 || e.detail < 0) {
                    _scrollingUp();
                } else if (e.wheelDelta < 0 || e.detail > 0) {
                    _scrollingDown();
                }
            };
            /**
             *  @function _keyDownEvent
             *
             *  @param e
             *  @private
             */
            _keyDownEvent = (e) => {
                if (scrollingIsActive) {
                    return;
                }

                let keyCode = e.keyCode || e.which;

                if (keyCode === KEY_UP) {
                    _scrollingUp();
                } else if (keyCode === KEY_DOWN) {
                    _scrollingDown();
                }
            };

            /**
             *  @function init
             *
             *  @note     auto-launch
             */
            init = (() => {
                document.addEventListener(
                        'mousewheel',
                        _mouseWheelEvent,
                        false
                        );
                document.addEventListener(
                        'DOMMouseScroll',
                        _mouseWheelEvent,
                        false
                        );

                document.addEventListener(
                        'keydown',
                        _keyDownEvent,
                        false
                        );
            })();

        });


        /**
         *  Launcher
         */
        DOMReady(readyFunction);

    <?php echo '</script'; ?>
>

</body><?php }
}
