@extends('app')

@section('titulo', 'Inicio')

@section('content')

<div class="slider">
                                
    <ul>
        <li><img src="images/fondo2.jpg"/></li>
        <li><img src="images/fondo.jpg"/></li>
        <li><img src="images/fondo5.jpg"/></li>
    </ul>

</div>

<div class="container-fluid">
	
	<div class="content">

        <div class="row">

            <div class="text-center bloque somos">

                <h2>¿Quienes Somos?</h2>
                
            </div>

        </div>

        <div class="row texto">

            <p>Somos un conjunto de profesionales apasionados del Desarrollo y Diseño Web, ayudamos a las empresas que quieren automatizar sus procesos ayudandose de la tecnoogia de punta.</p>

            <p>Creamos sitios web, tiendas en linea, sistemas adminisrativos, puntos de venta y aplicaciones a su medida, todo con la ayuda de las herramientas mas actuales, siempre tomando en cuenta las necesidades de nuestros clientes.</p>

            <p>Nuestros diseños son totalmente Responsive, significa que se adaptan perfectamente a los diferentes dispositivos utilizados actualmente como Computadoras, Laptops, Tablets y Celulares.</p>

        </div>

        <div class="row centrar">
                
            <a href="contacto" class="btn btn-primary btn-lg">Contáctanos</a>
            
        </div>

        <div class="row">

            <div class="text-center bloque mision">

                <h2>Nuestra Misión</h2>

            </div>

        </div>

        <div class="row texto">

            <p>En Jesco Marketing estamos comprometidos con nuestra profesión, pero sobre todo con nuestros clientes. Es por eso que nuestra misión es crear aplicaciones que la gente necesita, con la mejor calidad, usabilidad y precio.</p>

            <p>Como empresa creadora de software estamos comprometidos con nuestra comunidad de desarrollo para realizar aplicaciones con código limpio y claro, que hace que nuestro software sea de la calidad exigida en el mercado.</p>

        </div>

    <a href="servicios"><div class="row">

        <div class="text-center up bloque nuestros">

            <h2>Nuestros Servicios</h2>

        </div>

    </div></a>

    <section class="row text-center">

        <div class="col-lg-4 espacio">

            <h2 class="azul">Landing Page</h2>

            <img src="images/landing.png" />

            <p class="planes">Es una pagina web responsive, diseñada en HTML5 y CSS3. 
                Se recomienda para empresas pequeñas que no quieren quedarse atras y estar conectados con sus posibles clientes en internet.
                Es una página Informativa, muestra el contenido de su empresa, sus servicios o productos, datos de contacto y enlaces a redes sociales.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
              Especificaciones...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header bg-verde">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h2 class="modal-title blanco" id="myModalLabel">Landing Page</h2>

                  </div>

                  <div class="modal-body bg-success">

                    <h4>Incluye:</h4>

                    <ul class="list-unstyled">

                        <li>- Diseño HTML5/CSS3</li>

                        <li>- Programación JavaScript</li>

                        <li>- 1 Página Responsive</li>
                        <small>(Ajustable a cualquier dispositivo)</small>

                        <li>- 1 Correo Electrónico</li>

                        <li>- Alta en Buscadores</li>

                        <li>- Redes Sociales Enlazadas</li>

                        <li>- Página Indexada</li>
                        <small>(SEO)</small>

                        <li>- Web Hosting Gratis</li>

                        <li>- Dominio Gratis</li>

                    </ul>

                    <br>

                    <h3>$1,500 MXN</h3>

                    <small>Tiempo de entrega 3 días</small>

                  </div>

                  <div class="modal-footer">

                    <a href="pedido" class="btn btn-primary">Realizar Pedido</a>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>

            </div>

        </div>

        <div class="col-lg-4 espacio">

            <h2 class="azul">Sitio Web</h2>

            <img src="images/sitioweb.png"/>

            <p class="planes">El Sitio Web consta de hasta 5 páginas web dinámicas, responsive, bien organizadas y diseñadas    en HTML5, CSS3, JavaScript, JQuery, PHP o Ruby On Rails y Bootstrap.
                Se recomienda para empresas con planes de crecimiento, que quieren competir en su ramo y que desean atraer más clientes e incrementar sus ventas.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal1">
              Especificaciones...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header bg-verde">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h2 class="modal-title blanco" id="myModalLabel">Sitio Web</h2>

                  </div>

                  <div class="modal-body bg-success">

                    <h4>Incluye:</h4>

                    <ul class="list-unstyled">

                        <li>- Diseño HTML5/CSS3</li>

                        <li>- JavaScript | Ruby on Rails</li>

                        <li>- Base de datos MySQL</li>

                        <li>- Bootstrap</li>

                        <li>- 5 Páginas Responsive</li>
                        <small>(Ajustable a cualquier dispositivo)</small>

                        <li>- 10 Correos Electrónicos</li>

                        <li>- Alta en Buscadores</li>

                        <li>- Redes Sociales Enlazadas</li>

                        <li>- Página Indexada</li>
                        <small>(SEO)</small>

                        <li>- Web Hosting Gratis</li>

                        <li>- Dominio Gratis</li>

                    </ul>

                    <br>

                    <h3>$3,000 MXN</h3>

                    <small>Tiempo de entrega 5 días</small>

                  </div>

                  <div class="modal-footer">

                    <a href="pedido" class="btn btn-primary">Realizar Pedido</a>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>

            </div>

        </div>

        <div class="col-lg-4 espacio">

            <h2 class="azul">Sitio Web Profesional</h2>

            <img src="images/sitioprof.png" />

            <p class="planes">El Sitio Web Profesional consta de hasta 7 páginas web dinámicas, responsive, bien organizadas y diseñadas en HTML5, CSS3, JavaScript, JQuery, PHP o Ruby On Rails y Bootstrap.
                Se recomienda para empresas con una cartera de clientes extensa, para automatizar procesos y ahorrar dinero en personal, material y traslados.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal2">
              Especificaciones...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header bg-verde">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h2 class="modal-title blanco" id="myModalLabel">Sitio Web Profesional</h2>

                  </div>

                  <div class="modal-body bg-success">

                    <h4>Incluye:</h4>

                    <ul class="list-unstyled">

                        <li>- Diseño HTML5/CSS3</li>

                        <li>- JavaScript | JQuery</li>

                        <li>- PHP | Ruby on Rails</li>

                        <li>- Base de datos MySQL</li>

                        <li>- Bootstrap</li>

                        <li>- 7 Páginas Responsive</li>
                        <small>(Ajustable a cualquier dispositivo)</small>

                        <li>- Correos Electrónicos Ilimitados</li>

                        <li>- Alta en Buscadores</li>

                        <li>- Redes Sociales Enlazadas</li>

                        <li>- Página Indexada</li>
                        <small>(SEO)</small>

                        <li>- Servicios Google</li>
                        <small>(Addwors, Analytics y Addsense)</small>

                        <li>- Anuncios Clasificados en Linea</li>

                        <li>- Web Hosting Gratis</li>

                        <li>- Dominio Gratis</li>

                    </ul>

                    <br>

                    <h3>$4,000 MXN</h3>

                    <small>Tiempo de entrega 7 días</small>

                  </div>

                  <div class="modal-footer">

                    <a href="pedido" class="btn btn-primary">Realizar Pedido</a>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>

            </div>          

        </div>

        <div class="col-lg-4 espacio">

            <h2 class="azul">CMS</h2>

            <img src="images/cms.png" />

            <p class="planes">CMS o Sistema de Gestión de Contenidos, es como su nombre lo dice un gestor de contenido integrado a su Sitio Web, para que usted mismo acceda y cree o administre los cambios en su sitio web sin tener que saber Programacion.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal3">
              Especificaciones...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header bg-verde">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h2 class="modal-title blanco" id="myModalLabel">CMS</h2>

                  </div>

                  <div class="modal-body bg-success">

                    <h4>Incluye:</h4>

                    <ul class="list-unstyled">

                        <li>- Diseño HTML5/CSS3</li>

                        <li>- JavaScript | JQuery</li>

                        <li>- PHP | Ruby on Rails</li>

                        <li>- Base de datos MySQL</li>

                        <li>- Bootstrap</li>

                    </ul>

                    <br>

                    <h3>$1,000 MXN</h3>

                    <small>Tiempo de entrega 3 días</small>

                  </div>

                  <div class="modal-footer">

                    <a href="pedido" class="btn btn-primary">Realizar Pedido</a>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>

            </div>      

        </div>

        <div class="col-lg-4 espacio">

            <h2 class="azul">Tienda en Linea</h2>

            <img src="images/store.png" />

            <p class="planes">Es un Sitio Web Profesional en donde podrás vender tus productos o servicios directamente a       tus clientes, cuenta con CMS (Sistema de Gestión de Contenidos), sistema de cobro por PayPal, cargo a           tarjeta de credito y depositios bancarios.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal4">
              Especificaciones...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header bg-verde">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h2 class="modal-title blanco" id="myModalLabel">Tienda en Linea</h2>

                  </div>

                  <div class="modal-body bg-success">

                    <h4>Incluye:</h4>

                    <ul class="list-unstyled">

                        <li>Gestor de Contenidos CMS</li>

                        <li>- Diseño HTML5/CSS3</li>

                        <li>- JavaScript | JQuery</li>

                        <li>- PHP | Ruby on Rails</li>

                        <li>- Base de datos MySQL</li>

                        <li>- Bootstrap</li>

                        <li>- 7 Páginas Responsive</li>
                        <small>(Ajustable a cualquier dispositivo)</small>

                        <li>- Correos Electrónicos Ilimitados</li>

                        <li>- Alta en Buscadores</li>

                        <li>- Redes Sociales Enlazadas</li>

                        <li>- Página Indexada</li>
                        <small>(SEO)</small>

                        <li>- Servicios Google</li>
                        <small>(Addwors, Analytics y Addsense)</small>

                        <li>- Anuncios Clasificados en Linea</li>

                        <li>- Web Hosting Gratis</li>

                        <li>- Dominio Gratis</li>

                    </ul>

                    <br>

                    <h3>$5,000 MXN</h3>

                    <small>Tiempo de entrega 7 días</small>

                  </div>

                  <div class="modal-footer">

                    <a href="pedido" class="btn btn-primary">Realizar Pedido</a>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>

            </div>          

        </div>

        <div class="col-lg-4 espacio">

            <h2 class="azul">Punto de Venta</h2>

            <img src="images/puntoventa.png" />

            <p class="planes">Es un sistema de administración de entradas y salidas, tanto en productos como en efectivo, es útil para cualquier empresa que realice ventas al por menor, con el puede tener controlado su inventario y conocer cuanto y que vende en cualquier momento.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal5">
              Especificaciones...
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header bg-verde">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h2 class="modal-title blanco" id="myModalLabel">Punto de Venta</h2>

                  </div>

                  <div class="modal-body bg-success">

                    <h4>Incluye:</h4>

                    <ul class="list-unstyled">

                        <li>- Diseño HTML5/CSS3</li>

                        <li>- JavaScript | Ruby on Rails</li>

                        <li>- Base de datos MySQL</li>

                        <li>- Bootstrap</li>

                    </ul>

                    <br>

                    <h3>$2,000 MXN</h3>

                    <small>Tiempo de entrega 5 días</small>

                  </div>

                  <div class="modal-footer">

                    <a href="pedido" class="btn btn-primary">Realizar Pedido</a>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                  </div>

                </div>

              </div>

            </div>      

        </div>

    </section>

    <section>

        <div class="row">

            <div class="text-center bloque mision">

                <h2>Proyectos Recientes</h2>

            </div>

        </div>

        <div class="row text-center proyecto">

            <div class="col-lg-3 espacio">

                <h3 class="azul">Shirts 4 Mike</h3>

                <img src="images/tienda.png" />

                <h4>Tienda en Linea</h4>

                <a href="http://www.shirts4mike.com" target="_blank">www.shirts4mike.com</a>

            </div>

            <div class="col-lg-3 espacio">

                <h3 class="azul">Sigma Capacitación</h3>

                <img src="images/sigma.png" />

                <h4>Sitio Web</h4>

                <a href="http://www.sigmacapacita.com" target="_blank">www.sigmacapacita.com</a>

            </div>

            <div class="col-lg-3 espacio">

                <h3 class="azul">Ferretería LUZ</h3>

                <img src="images/ferreteria.png" />

                <h4>Sitio Web</h4>

                <a href="http://www.jescomarketing.byethost7.com" target="_blank">www.FerreteriaLuz.com</a>

            </div>

            <div class="col-lg-3 espacio">

                <h3 class="azul">Artemex</h3>

                <img src="images/artemex.png" />

                <h4>Sitio Web</h4>

                <a href="http://www.arte-mex.com" target="_blank">www.arte-mex.com</a>

            </div>

        </div>
        
    </section>

    </div>

</div>

<div class="row cookies">

	<h2>Utilizamos cookies para una mejor interacción.</h2>

	<p>Si continuas navegando, Aceptas nuestras politicas acerca de las cookies.</p>

	<button type="button" class="close cerrar" aria-label="Close"><span aria-hidden="true">&times;</span></button>

	<p class="cerrar">Aceptar</p>

</div>

@endsection

