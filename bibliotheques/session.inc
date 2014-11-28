<?php
include("bibliotheques\configuration.php");
include("bibliotheques\mysql_connect.php");

define('INACTIVITY_TIMEOUT',3600); // (in seconds). If the user does not access any page within this time, his/her session is considered expired.
 
ini_set('session.use_cookies', 1);       // Use cookies to store session.
ini_set('session.use_only_cookies', 1);  // Force cookies for session (phpsessionID forbidden in URL)
ini_set('session.use_trans_sid', False); // Prevent php to use sessionID in URL if cookies are disabled.
 
session_start();
 
function allIPs()
// Returns the IP address of the client (Used to prevent session cookie hijacking.)
{
    $ip = $_SERVER["REMOTE_ADDR"];
    // Then we use more HTTP headers to prevent session hijacking from users behind the same proxy.
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip=$ip.'_'.$_SERVER['HTTP_X_FORWARDED_FOR']; }
    if (isset($_SERVER['HTTP_CLIENT_IP'])) { $ip=$ip.'_'.$_SERVER['HTTP_CLIENT_IP']; }
    return $ip;
}
 
function check_auth($login,$password) 
// Check that user/password is correct.
{
    include("bibliotheques\configuration.php");
    include("bibliotheques\mysql_connect.php");
    $request="SELECT * FROM `utilisateur` WHERE login like '$login' AND mot_pass like '$password'"; 
    $result = mysqli_query($db,$request) or die("Pb avec la requete: $request");
    
    if ((mysqli_num_rows($result) == 1))
    {
        $_SESSION['uid'] = sha1(uniqid('',true).'_'.mt_rand()); // generate unique random number (different than phpsessionid)
                                                                // which can be used to hmac forms and form token (to prevent XSRF)
        $_SESSION['ip']=allIPs();                // We store IP address(es) of the client to make sure session is not hijacked.
        $_SESSION['username']=$login;
        $_SESSION['expires_on']=time()+INACTIVITY_TIMEOUT;  // Set session expiration.
        return True;
    }
    else
    {
        return False;
    }
}
 
function check_login()
// Make sure user is logged in. Redirect to login page if not.
{
    // If session does not exist on server side, or IP address has changed, or session has expired, show login screen.
    if (!isset ($_SESSION['uid']) || !$_SESSION['uid'] || $_SESSION['ip']!=allIPs() || time()>=$_SESSION['expires_on'])
    {
        header('Location: index.php');
        return False;
    }
    else{
        return True;
    }
    $_SESSION['expires_on']=time()+INACTIVITY_TIMEOUT;  // User accessed a page : Update his/her session expiration date.
}
 
function logout()
// Force logout, redirect to login page.
{
    unset($_SESSION['uid'],$_SESSION['ip'],$_SESSION['expires_on']);
    session_destroy(); // Delete server-side session info
    header('Location: index.php');
    exit();
    // We do not bother deleting the phpsessionID cookie, because it can't be used anyway (All server-side
    // data attached to this session cookie is deleted. This makes the cookie useless. )
}
 
function check_login1()
// Make sure user is logged in. Redirect to login page if not.
{
    // If session does not exist on server side, or IP address has changed, or session has expired, show login screen.
    if (!isset ($_SESSION['uid']) || !$_SESSION['uid'] || $_SESSION['ip']!=allIPs() || time()>=$_SESSION['expires_on'])
    {
        return False;
    }
    else{
        return True;
    }
    $_SESSION['expires_on']=time()+INACTIVITY_TIMEOUT;  // User accessed a page : Update his/her session expiration date.
}

function affiche_deco(){
    if(check_login()){
    
    //echo '<div class="box1">';
    
    echo /*'Bienvenue '.*/$_SESSION['username']; //.', Vous ete connecter<br><br>';
    //echo '<a href="logout.php">DECONNEXION</a>';
    //echo '</div>';
   
    }
}

function affiche_deco1(){
    echo ''.$_SESSION['username'].', Vous ete déjà connecter <br>';
    echo '<a href="logout.php">DECONNEXION</a>';
}
?>

