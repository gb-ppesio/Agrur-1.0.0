<?php
    //include ("bibliotheques\session.inc");
?>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">AGRUR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="about.php">A Propos</a> <!-- about.html -->
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>    <!-- blog.html -->
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>  <!-- contact.html -->
                    </li>
					<li>
                        <a href="logout.php">Deconnection</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Bienvenue <strong><?php affiche_deco();?></strong>
                    </h2>
            
                    <hr>
                    <!--<img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">-->
                    <hr class="visible-xs">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">AGRUR</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                    
                        <input type="submit" name="btn1" value="Producteurs">
                        <!--<a href="#" >Producteurs</a>-->
                    </li>
                    <li>
                        <a href="#">Livraisons</a> <!-- about.html -->
                    </li>
                    <!--
                    <li>
                        <a href="#">Blog</a>    <!-- blog.html
                    </li>
                    -->
                    <li>
                        <a href="#">Commandes</a>  <!-- contact.html -->
                    </li>
                </ul>

                </div>
            </div>
        </div>
            </div>
            <!-- /.navbar-collapse -->
    </div>