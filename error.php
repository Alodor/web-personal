<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Alodor | Algo salió mal</title>    
    </head>
    
    <style>
        #error {
            margin-top: 100px;
            margin-bottom: 100px;
        }
    </style>
    
    <body>
        <header>
            <!-- Navbar -->
            <?php include 'assets/navbar.php'; ?>
            <!-- /Navbar -->
        </header>
       
        <div id="error" class="container">
            <div class="row">
                <div class="col m6">
                    <img class="responsive-img" src="assets/images/error.jpg">
                </div>
                
                <div class="col m6 center">
                    <h2>Oh, no...!!</h2>
                    <p class="flow-text">La página que intenta visualizar no se encuentra disponible</p>
                    <a class="waves-effect waves-light btn blue-grey darken-4" href="/">Volvamos al principio</a>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php include 'assets/footer.php'; ?>
        <!-- /Footer -->
        
        <!-- Scripts -->
        <?php include 'assets/scripts.php'; ?>
        <!-- /Scripts -->
    </body>
</html>