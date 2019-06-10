
<?php
	$article = $_GET['artic'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Body made by HenrySoft</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <nav class="nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <h1>BIOMEDICINA</h1>
                    </div>
                    <div class="col-md-8 ml-auto">
                        <button class="btn btn-primary">Inicio</button>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <!-- Aqui vendra el Slider del Paspa -->
    <!-- Aqui termina el poderoso slider super mamalon-->
    
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Noticias importantes</h1>
                    <p>Ingenieria Biomedica</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin del Carousel o Slider del Paspa -->

    <?php
    switch ($article) {
    	case 1:
    		include "article1.html";
    		include "article2.html";
    		include "article3.html";
    		include "article4.html";
    		break;
    	case 2:
    		include "article2.html";
    		include "article1.html";    		
    		include "article4.html";
    		include "article3.html";
    		break;
    	case 3:
    		include "article3.html";
    		include "article2.html";
    		include "article1.html";    		
    		include "article4.html";
    		break;
    	case 4:
    		include "article4.html";
    		include "article1.html";
    		include "article2.html";
    		include "article3.html";
    		break;
    	default:
    		# code...
    		break;
    }
    ?>

    <section class="seccion_2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-medkit fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Amet consectetur edipisicing.</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis saepe natus quaerat,
                        temporibus numquam vel.</p>
                </div>
                <div class="col-md-4 text-center">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-medkit fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Emet cunsectetur adipisicing.</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis saepe natus quaerat,
                        temporibus numquam vel.</p>
                </div>
                <div class="col-md-4 text-center">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-medkit fa-stack-1x fa-inverse"></i>
                    </span>
                    <h3>Omet consectatur adipisicing.</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis saepe natus quaerat,
                        temporibus numquam vel.</p>
                </div>
            </div>
    </section>

    <section class="seccion_3">
        <div class="container mb-5">
            <h3 class="seccion_titulo">Noticias sobre biomedicina</h3>
            <h5 class="seccion_subtitulo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, dolorum.</h5>
            <hr>

            <!-- Un aritculo -->
            <div class="row">
                <div class="col-12 col-md-9">
                    <!-- 1 articulo -->
                    <div class="row mb-5">
                        <div class="col-3">
                            <img src="img/img-2.jpg" alt="" class="img-fluid">
                            <p class="lead text-center">Lorem, ipsum dolor.</p>
                        </div>
                        <div class="col-9">
                            <a href="#">
                                <h5>Ipsum dolor sit amet nulla, consectetur.</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati perspiciatis
                                assumenda ex maiores accusamus vero a provident ipsa. Nobis aspernatur molestiae
                                repellendus corrupti placeat, id magni praesentium maiores amet est! Provident totam
                                natus harum voluptas delectus nulla, quaerat, a iure alias voluptates qui magni animi
                                nesciunt autem dicta neque cum.</p>
                            <a href="#" class="btn btn-primary">Leer mas..</a>

                        </div>
                    </div>
                    <hr>
                    <!-- Fin articulo -->
                </div>
                <div class="col-12 col-md-3">
                    <!-- Cards -->
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Titulo</div>
                        <div class="card-body">
                            <h5 class="card-title">Subitulo de algo</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam iusto
                                molestias iste. Repellat, dolorum sequi..</p>
                        </div>
                    </div>
                    <!-- Fin Cards -->
                </div>
            </div>
    </section>

    <section class="seccion_4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>PARALLAX</h1>
                </div>
            </div>
    </section>

    <section class="seccion_5">

    </section>
    <footer class="footer">

    </footer>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
    <!-- Bootstrap -->
    <script src="JS/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

</body>

</html>