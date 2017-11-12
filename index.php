<!Doctype html>
<html lang="es">
    <head>
        <?php include 'assets/head.php'; ?>
    </head>
    
    <body>
        <header>
            <!-- Navbar -->
            <?php include 'assets/navbar.php'; ?>
            <!-- /Navbar -->
            
            <!-- Hero -->   
            <?php include 'assets/hero.php'; ?>
            <!-- /Hero -->   
        </header>
        
        <!-- Acerca de -->
        <section id="acerca" class="section-wrapper section-light">
            <div class="container">
                <h3 class="section-title">Acerca de</h3>
                <div class="line-wrapper"><div class="line-color"></div></div>
                
                <div class="row">
                    <div class="col s12">
                        <div class="col s4">
                            <img class="responsive-img" src="assets/images/avatar.svg" alt="Avatar Alodor">
                        </div>
                       
                        <p class="flow-text">Me llamo José Alejandro Méndez Sánchez, Ingeniero Venezolano apasionado por la tecnología. Alodor es mi seudónimo, el mismo es un acrónimo originado a partir de un juego de palabras. Soy una persona amable, sincera y cortés, me encanta disfrutar el arte, la música, las cosas sencillas y los paisajes naturales, siempre tengo interés de investigar y ahondar en los temas que me apasionan. Soy un profesional que no le teme a los nuevos retos y que busca siempre soluciones prácticas a las situaciones que se presentan.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Acerca de -->
        
        <!-- Habilidades -->
        <section id="habilidades" class="section-wrapper section-light">
            <div class="container">
                <h3 class="section-title">Habilidades</h3>
                <div class="line-wrapper"><div class="line-color"></div></div>
                
                <div class="row">                   
                    <div class="col s12 m4 center">
                        <p>HTML5</p>
                        <progress value="90" max="100"></progress>
                        <p>CSS3</p>
                        <progress value="85" max="100"></progress>
                        <p>JavaScript</p>
                        <progress value="70" max="100"></progress>
                        <p>Java</p>                    
                        <progress value="35" max="100"></progress>
                        <p>jQuery</p>                    
                        <progress value="80" max="100"></progress>
                    </div>
                    <div class="col s12 m4 center">
                        <p>PHP</p>                    
                        <progress value="70" max="100"></progress>
                        <p>CMS</p>                    
                        <progress value="80" max="100"></progress>
                        <p>Windows / Linux</p>
                        <progress value="95" max="100"></progress>
                        <p>Base de Datos</p>
                        <progress value="74" max="100"></progress>
                        <p>Laravel</p>
                        <progress value="30" max="100"></progress>
                    </div>
                    <div class="col s12 m4 center">                    
                        <p>SEO</p>
                        <progress value="85" max="100"></progress>
                        <p>Análisis e Innovación</p>
                        <progress value="78" max="100"></progress>
                        <p>Python</p>                    
                        <progress value="35" max="100"></progress>
                        <p>UI / UX</p>                    
                        <progress value="80" max="100"></progress>
                        <p>Bootstrap</p>                    
                        <progress value="90" max="100"></progress>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Habilidades -->
        
        <!-- Portafolio -->
        <section id="portafolio" class="section-wrapper section-light">
            <div class="container">
                <h3 class="section-title">Portafolio</h3>
                <div class="line-wrapper"><div class="line-color"></div></div>
                
                <div class="row">
                    <div class="col s12">
                        <p class="flow-text">Aportar valor a su negocio es lo fundamental</p>
                    </div>
                </div>
                
                <div class="row">
                    <article class="col s12 m6">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="assets/images/portfolio/techsolution.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p class="flow-text">Tech Solution</p>
                                    <p>One Page</p>
                                </div>
                                <div class="card-action">
                                    <a href="http://techsolution.com.ve/" target="_blank" class="blue-text text-accent-4">
                                        <i class="fa fa-external-link"></i>
                                        Ver proyecto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ********************************* -->
                    <article class="col s12 m6">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="assets/images/portfolio/wuzzy.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p class="flow-text">Wuzzy</p>
                                    <p>Web App</p>
                                </div>
                                <div class="card-action">
                                    <a href="http://www.wuzzy.com.ve/" target="_blank" class="blue-text text-accent-4">
                                        <i class="fa fa-external-link"></i>
                                        Ver proyecto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ********************************* -->
                </div>
            </div>
        </section>
        <!-- /Portafolio -->
                
        <!-- Contacto -->
        <section id="contacto" class="section-wrapper section-light">
            <div class="container">
                <h3 class="section-title">Contacto</h3>
                <div class="line-wrapper"><div class="line-color"></div></div>
                
                <div class="row">
                    <div class="col s12">
                        <p class="flow-text">Me emociona la idea de conocerte y trabajar juntos</p>
                        <p class="flow-text">
                            <i class="fa fa-map-marker blue-grey-text text-lighten-4"></i> 
                            Barcelona – Edo. Anzoátegui. Venezuela
                        </p>
                        <p class="flow-text">
                            <i class="fa fa-envelope blue-grey-text text-lighten-4"></i> 
                            info@alodor.com.ve
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Formulario -->
                    <div class="col s12">                    
                        <form id="fcontacto">
                            <div class="input-field col s12 m6">
                                <input id="nombre" class="input" name="nombre" type="text" autocomplete="off" required>
                                <label for="nombre">Nombre</label>
                            </div>
                            <!-- *************************** -->
                            <div class="input-field col s12 m6">
                                <input id="email" class="input" name="email" type="email" autocomplete="off" required>
                                <label for="email">Email</label>
                            </div>
                            <!-- *************************** -->
                            <div class="input-field col s12 m6">
                                <input id="telefono" class="input" name="telefono" type="text" autocomplete="off" required>
                                <label for="telefono">Teléfono</label>
                            </div>
                            <!-- *************************** -->
                            <div class="input-field col s12 m6">
                                <select name="asunto" class="browser-default">
                                    <option value="Informacion">Información</option>
                                    <option value="Gracias">Gracias</option>
                                    <option value="Queja">Queja</option>
                                    <option value="Sugerencia">Sugerencia</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <!-- *************************** -->
                            <div class="input-field col s12">                     
                                <textarea id="mensaje" class="materialize-textarea input" name="mensaje" required></textarea>
                                <label for="mensaje">Escriba su mensaje</label>
                            </div>
                            
                            <!-- Button -->
                            <button class="btn btn-large waves-effect waves-light col s12  blue-grey darken-4" type="submit">
                                Enviar
                                <i class="fa fa-paper-plane right"></i>
                            </button>
                            <!-- /Button -->
                        </form>
                    
                        <!-- Aviso de Confirmacion -->
                        <div class="row">
                            <div id="respuesta" class="col s12" style="display: none"></div>
                        </div>
                        <!-- /Aviso de Confirmacion -->                        
                    </div>
                    <!-- /Formulario -->
                </div>
            </div>
        </section>
        <!-- /Contacto -->
        
        <!-- Google map -->
        <section id="map"></section>
        <!-- /Google map -->
                
        <!-- Footer -->
        <?php include 'assets/footer.php'; ?>
        <!-- /Footer -->
                       
        <!-- To top -->
        <?php include 'assets/to_top.php'; ?>
        <!-- /To top -->
                        
        <!-- Scripts -->
        <?php include 'assets/scripts.php'; ?>
        <!-- /Scripts -->
    </body>
</html>