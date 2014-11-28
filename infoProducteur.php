<?php
    //require("header.php");
    //include ("bibliotheques\session.inc");
    if (!isset($_SESSION['username'])){
        header('Location: login.php');
    }
    else{
?>
  
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
            
                    <p>
                        <?php
                            include("fonctions.php");
                            afficher(8);
                        ?>
                    </p>
                </div>
            </div>
        </div>

<?php
    }
?>
