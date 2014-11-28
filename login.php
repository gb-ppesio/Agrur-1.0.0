<?php

// Connexion a mySQL
include("bibliotheques\configuration.php");
include("bibliotheques\mysql_connect.php");
include ("bibliotheques\session.inc");
if (isset($_POST['login']) && isset($_POST['password']) && (check_auth($_POST['login'], $_POST['password'])))
{
	header('Location: blog.php');
 
}
require("header.php");
require("navAccueil.php");


    if(check_login1()){
 
        affiche_deco1();
    } 
    else{
?>
    <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            Veuillez saisir vos identifiants
                        </h2>
                        <hr>
                        <form method="post" action="login.php">
                            <label>Login : </label><input type="text" name="login"> <br>
                            <label>Password :</label><input type="password" name="password">
                            <input type="submit" value="Login">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
<?php
    }
    require("footer.php");
?>