<?php
    require("header.php");
    include ("bibliotheques\session.inc");
    if (isset($_SESSION['username'])){
        require("navConnecte.php");

    }
    else
        require("navAccueil.php");
?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Bienvenue sur le site de</small>
                    </h2>
                    <h1 class="brand-name">AGRUR</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>Par
                            <strong>VDEV</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Une Appellation d’
                        <strong>Origine Protégée</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>La Noix de Grenoble puise son goût, sa finesse et sa fraîcheur uniques dans son environnement naturel. Rassemblées dans la Vallée de l’Isère, les noyeraies profitent d’un climat relativement humide et venté. Les vergers, cultivés entre plaines et collines, de 150 à 800 m d’altitude, bénéficient de toute la fraîcheur d’un climat alpin parfaitement adapté à ce petit fruit de caractère…</p>
                    <p>Ces conditions géographiques, associées au savoir-faire des producteurs, font de la Noix de Grenoble une production phare de la région depuis plusieurs siècles. Les nuciculteurs allient aujourd’hui les méthodes les plus modernes au respect des traditions et de la nature pour vous offrir un fruit parfaitement sain et naturel.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Quelques chiffres </strong>de la campagne 2013-2014
                    </h2>
                    <hr>
                    <p>La commercialisation de la Noix de Grenoble AOP progresse sur le marché français tandis que la production est constante:
					<li>13 355 tonnes en volume de production AOP.</li>
					<li>10 694 tonnes commercialisées sous AOP.</li>
					<li>80% de la production commercialisée sous AOP.</li>
					</p>
					<p>Depuis 2010, la commercialisation sur le marché français ne cesse de progresser :
					<li>4 345 tonnes commercialisées en France.</li>
					<li>159 tonnes supplémentaires exportées en comparaison à 2012.</li>
					<li>2013 enregistre le 2ème volume le plus important après celui de 2006.</li>
					</p>
					<p>L’ouverture au marché européen reste fondamentale pour la Noix de Grenoble :
					<li>60% de la production est exportée en Europe.</li>
					<li>6 349 tonnes sont exportées au total (+30,21% par rapport à 2010).</li>
					<li>Le marché italien cède la seconde place au marché allemand qui importe 1 784 tonnes de Noix de Grenoble.</li>
					</p>
					
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

 <?php
    require("footer.php");