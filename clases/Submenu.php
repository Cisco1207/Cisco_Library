<?php

class Submenu {

    public function getMenu() {

        $menu = '<header class="masthead" style="background-image: url(\'assets/img/home-bg.jpg\')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Bienvenido a Cisco Library</h1>
                            <span class="subheading">Donde cada página es un nuevo horizonte.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>';

        return $menu;

    }

            public function getMenuLibros() {

                $menulibros = '<header class="masthead" style="background-image: url(\'assets/img/libros1.jpg\')">
                <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                            <div class="page-heading">
                                <h1>Tenemos los Mejores Libros para solo ti</h1>
                                <span class="subheading">Elige cuantos quieras.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>';
            
            return $menulibros;
              }

    
    public function getMenuAutor() {

        $menuautor = '<header class="masthead" style="background-image: url(\'assets/img/escritores.jpg\')">
        <div class="container position-relative px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Escritores con Talentos Innatos</h1>
                        <h2 class="subheading">Donde hay un libro, hay una mente excepcional.</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>';

        return $menuautor;

    }

    public function getMenuContacto(){

            $menucontacto = '<header class="masthead" style="background-image: url(\'assets/img/contact-bg.jpg\')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Contacto</h1>
                            <span class="subheading">¿Tienes algo que decir o preguntar? ¡Este espacio está abierto para ti!.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>';

            return $menucontacto;


    } 
        

}


?>