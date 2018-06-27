<?php
require_once('verificasessao.php');
$title = 'Painel - GRULES';
$currentPage = 'painel';
?>

<?php include('head.php'); ?>

    <div class="page-header" align="center">
        <img src="img/logo.png" align="center" class="img-responsive" alt="Responsive image" width="125" height="105">
        <h1>Grules</h1>
    </div>

<?php include 'nav.php'; ?>

<div class="jumbotron">
    <div class="container" align="center">
            <p align="justify">Escrever algo sobre o grules.</p>

            <!-- Carrossel de fotos -->

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                </ol>


                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="jornal-virtual/30713762_1648454031935582_7416727101359508908_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                            <div class="carousel-caption">
                            ...
                            </div>
                        </div>
                <div class="item">
                    <img src="jornal-virtual/30742280_1648454615268857_6926476075874970830_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
                </div>

                <div class="item">
                    <img src="jornal-virtual/30716034_1648454901935495_1299171855140354781_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
                </div>

                <div class="item">
                    <img src="jornal-virtual/30738282_1648454398602212_5451949431184767802_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
                </div>

                <div class="item">
                    <img src="jornal-virtual/30705788_1648455131935472_2440216033717315771_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
                </div>

                <div class="item">
                    <img src="jornal-virtual/30738286_1648456131935372_3832877557701787503_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
                </div>

                <div class="item">
                    <img src="jornal-virtual/30724803_1648456155268703_82154851312732312_n.jpg" alt="..." class="img-responsive" alt="Responsive image">
                    <div class="carousel-caption">
                    ...
                </div>
                </div>

                ...
            </div>

                <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

                <!-- Fim Carrossel de fotos -->
                <p><a class="btn btn-primary btn-lg glyphicon glyphicon-thumbs-up" href="https://www.facebook.com/DoctumIpatinga/" role="button"><td></td> Facebook</a></p>
        </div>
</div>
 
<?php include('footer.php'); ?>