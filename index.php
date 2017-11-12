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
            </div>
        </section>
        <!-- /Contacto -->
        
        <!-- Google map -->
        <section id="map"></section>
        <!-- /Google map -->
                
        <!-- Footer -->
        <?php include 'assets/footer.php'; ?>
        <!-- /Footer -->
                        
        <!-- Scripts -->
        <?php include 'assets/scripts.php'; ?>
        <!-- /Scripts -->
    </body>
</html>